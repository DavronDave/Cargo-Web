<script type="text/javascript">
    $(document).ready(function(){
        $('#add_person').on('submit',function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/admin/sender-people",
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
                        $('#add_person').find('.parsley-errors-list').remove();
                        $.each(errors, function (key, err_values) {
                                // $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_code');
                                 $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_full_name');
                            }
                        );
                    }
                }
            });
        });
    });

    function getSenderPersonData(id){
        $.ajax({
            type: "GET",
            async: false,
            url: "/admin/sender-people/" + id +"/edit",
            success: function (response) {
                if(response.status == 404){
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-danger');
                    $('#success_message').text(response.message);
                } else {
                    $('#edit_full_name').val(response.sender_person.full_name);

                    $('#edit_id').val(response.sender_person.id);

                    $('#modal-dialog-show').modal('hide');

                    setTimeout(function(){
                        $('#modal-dialog-edit').modal("show")
                    }, 100);
                }
            }
        });
    }

    $(document).ready(function(){
        $('#update_productCategory').on('submit', function (event) {
            event.preventDefault();
            var product_category_id = $('#edit_id').val();
            var formData = new FormData(this);
            $.ajax({
                method: "POST",
                type: "PUT",
                url: "/admin/sender-people/" + product_category_id,
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
                        $('#update_productCategory').find('.parsley-errors-list').remove();
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
