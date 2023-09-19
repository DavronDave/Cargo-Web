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
                url: "/admin/companies",
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
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_name');
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_country_id');
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_region_id');
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_district_id');
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_phone');
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_address');
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
            url: "/admin/companies/" + id +"/edit",
            success: function (response) {
                if(response.status == 404){
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-danger');
                    $('#success_message').text(response.message);
                } else {
                    $('#edit_name').val(response.company.name);
                    $('#edit_phone').val(response.company.phone);
                    $('#edit_address').val(response.company.address);
                    $('#edit_country_id').val(response.company.country_id);
                    $('#edit_region_id').val(response.company.region_id);
                    $('#edit_district_id').val(response.company.district_id);

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
        $('#update_region').on('submit', function (event) {
            event.preventDefault();
            var company_id = $('#edit_id').val();
            var formData = new FormData(this);
            $.ajax({
                method: "POST",
                type: "PUT",
                url: "/admin/companies/" + company_id,
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
                        $('#update_region').find('.parsley-errors-list').remove();
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
