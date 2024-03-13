<script type="text/javascript">
    var loadFile = function(event, output = 'output_create') {
            var output = document.getElementById(output);
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

    var loadFile = function(event, output = 'output_edit') {
        var output = document.getElementById(output);
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };


    function showUser(id){
        $.ajax({
            type: 'GET',
            url: '{{ url("admin/users/") }}/' + id,
            success: function(response){
                $('#modal-dialog-show').children().html(response);
                $('#modal-dialog-show').modal('show');
            }
        });
    }
                    /* Yangi quduq qo'shsish */
    $(document).ready(function(){
        $('#add_user').on('submit',function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/admin/users",
                data: formData,
                dataType: 'JSON',
                cache:false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if(response.status == 200){
                        $('#modal-dialog-create').find('input').val("");
                        $('#modal-dialog-create').modal('hide');
                        location.reload();
                    }
                },
                error: function(xhr, status, error){
                    const errors = JSON.parse(xhr.responseText)?.errors;
                    if (xhr.status == 422) {
                        $('#add_user').find('.parsley-errors-list').remove();
                        $.each(errors, function (key, err_values) {
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_' + key);
                            }
                        );
                    }
                }
            });
        });
    });

    function getUserData(id){
        console.log(id)
        $.ajax({
            type: "GET",
            async: false,
            url: "/admin/users/" + id +"/edit",
            success: function (response) {
                if(response.status == 404){
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-danger');
                    $('#success_message').text(response.message);
                } else {
                    $('#edit_full_name').val(response.user.full_name);
                    $('#edit_username').val(response.user.username);
                    $('#edit_new_password').val(response.user.new_password);
                    $('#edit_password_confirm').val(response.user.password_confirm);
                    $('#edit_role_id').val(response.user.role_id);

                    $('#output_edit').attr('src', response.user.image ?  response.image : '{{asset("admin-assets/img/user.png")}}');
                    $('#edit_id').val(response.user.id);

                    $('#modal-dialog-show').modal('hide');

                    setTimeout(function(){
                        $('#modal-dialog-edit').modal("show")
                    }, 100);
                }
            }
        });
    }
    $(document).ready(function(){
        $('#update_user').on('submit', function (event) {
            event.preventDefault();
            var user_id = $('#edit_id').val();
            var formData = new FormData(this);
            $.ajax({
                method: "POST",
                type: "PUT",
                url: "/admin/users/" + user_id,
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
                success: function (response) {
                    $('#modal-dialog-edit').find('input').val("");
                    $('#modal-dialog-edit').modal('hide');
                    location.reload();
                },
                error: function(xhr, status, error){
                    const errors = JSON.parse(xhr.responseText)?.errors;
                    if (xhr.status == 422) {
                        $('#update_user').find('.parsley-errors-list').remove();
                        $.each(errors, function (key, err_values) {
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#edit_' + key);
                            }
                        );
                    }
                }
            });
        });
    });
</script>
