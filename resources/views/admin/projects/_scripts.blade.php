<script type="text/javascript">
    $(document).ready(function(){
        $('#add_project').on('submit',function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/admin/projects",
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
                        $('#add_project').find('.parsley-errors-list').remove();
                        $.each(errors, function (key, err_values) {
                            $('#add_project').find('[name="' + key + '"]').after('<span class="parsley-errors-list filled">' + err_values + '</span>');
                        });
                    }
                }
            });
        });
    });

    function getProjectData(id){
        $.ajax({
            type: "GET",
            async: false,
            url: "/admin/projects/" + id +"/edit",
            success: function (response) {
                if(response.status == 404){
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-danger');
                    $('#success_message').text(response.message);
                } else {
                    $('#edit_sender_id').val(response.project.sender_id);
                    $('#edit_receiver_id').val(response.project.receiver_id);
                    $('#edit_company_contract_id').val(response.project.company_contract_id);
                    $('#edit_incoterm_id').val(response.project.incoterm_id);
                    $('#edit_code').val(response.project.code);
                    $('#edit_name').val(response.project.name);
                    $('#edit_ready_date').val(response.project.ready_date);
                    $('#edit_status').val(response.project.status);

                    $('#edit_epi').prop('checked', response.project.epi_code === 1);
                    $('#edit_mnf').prop('checked', response.project.manifest_code === 1);
                    $('#edit_phone').prop('checked', response.project.isDisplayPhone === 1);

                    console.log(response.project.epi_code);
                     $('#edit_id').val(response.project.id);

                    $('#modal-dialog-show').modal('hide');

                    setTimeout(function(){
                        $('#modal-dialog-edit').modal("show")
                    }, 100);
                }
            }
        });
    }

    $(document).ready(function(){
        $('#update_project').on('submit', function (event) {
            event.preventDefault();
            var project_id = $('#edit_id').val();
            var formData = new FormData(this);
            $.ajax({
                method: "POST",
                type: "PUT",
                url: "/admin/projects/" + project_id,
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
