<script type="text/javascript">
    $(document).ready(function(){
        $('#add_company').on('submit',function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/admin/company-contracts",
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
                        $('#add_company').find('.parsley-errors-list').remove();
                        $.each(errors, function (key, err_values) {
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_admin_' + key);
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_sender_id');
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_receiver_id');
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_date');
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_code');
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_status');
                            }
                        );
                    }
                }
            });
        });
    });

    function getCompanyData(id){
        $.ajax({
            type: "GET",
            async: false,
            url: "/admin/company-contracts/" + id +"/edit",
            success: function (response) {
                if(response.status == 404){
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-danger');
                    $('#success_message').text(response.message);
                } else {
                    $('#edit_sender_id').val(response.company.sender_id);
                    $('#edit_receiver_id').val(response.company.receiver_id);
                    $('#edit_code').val(response.company.code);
                    $('#edit_from_date').val(response.company.from_date);
                    $('#edit_status').val(response.company.status);

                     $('#edit_id').val(response.company.id);

                    $('#modal-dialog-show').modal('hide');

                    setTimeout(function(){
                        $('#modal-dialog-edit').modal("show")
                    }, 100);
                }
            }
        });
    }

    $(document).ready(function(){
        $('#update_contract').on('submit', function (event) {
            event.preventDefault();
            var company_id = $('#edit_id').val();
            var formData = new FormData(this);
            $.ajax({
                method: "POST",
                type: "PUT",
                url: "/admin/company-contracts/" + company_id,
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
                        $('#update_contract').find('.parsley-errors-list').remove();
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
