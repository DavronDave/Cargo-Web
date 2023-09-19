<script type="text/javascript">

    function showRole(id){
        $.ajax({
            type: 'GET',
            url: '{{ url("admin/roles/") }}/' + id,
            success: function(response){
                $('#modal-dialog-show').children().html(response);
                $('#modal-dialog-show').modal('show');
            }
        });
    }
    $(document).ready(function(){
        $('#add_role').on('submit',function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/admin/roles",
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
                        $('#add_role').find('.parsley-errors-list').remove();
                        $.each(errors, function (key, err_values) {
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_admin_' + key);
                            }
                        );
                    }
                }
            });
        });
    });

    function getRoleData(id){
        $.ajax({
            type: "GET",
            async: false,
            url: "/admin/roles/" + id +"/edit",
            success: function (response) {
                if(response.status == 404){
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-danger');
                    $('#success_message').text(response.message);
                } else {
                    $('#edit_name').val(response.role.name);
                    $('#edit_key').val(response.role.key);

                    $('#edit_id').val(response.role.id);

                    $('#modal-dialog-show').modal('hide');

                    setTimeout(function(){
                        $('#modal-dialog-edit').modal("show")
                    }, 100);
                }
            }
        });
    }
    $(document).ready(function(){
        $('#update_role').on('submit', function (event) {
            event.preventDefault();
            var role_id = $('#edit_id').val();
            var formData = new FormData(this);
            $.ajax({
                method: "POST",
                type: "PUT",
                url: "/admin/roles/" + role_id,
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
                        $('#update_role').find('.parsley-errors-list').remove();
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
