<script type="text/javascript">
    $(document).ready(function(){
        var urlParts = window.location.href.split('/');
        var driverId = urlParts[urlParts.length - 1];
        $('#add_productCategories').on('submit',function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/admin/driver-receivers/" + driverId,
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
                        $('#add_productCategories').find('.parsley-errors-list').remove();
                        $.each(errors, function (key, err_values) {
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_' + key);
                            }
                        );
                    }
                }
            });
        });
    });

    function getDriverReceiverData(driverId, receiverId) {
        // You'll need to make an AJAX request to retrieve the receiver person's data
        // and populate the modal fields with the data.
        $.ajax({
            url: '/admin/driver-receivers/' + driverId + '/' + receiverId + '/edit', // Replace with the actual edit route
            type: 'GET',
            success: function(data) {
                // Populate the modal fields with the data
                $('#edit_full_name').val(data.full_name);
                $('#edit_passport').val(data.passport);
                $('#edit_birthdate').val(data.birthdate);
                $('#edit_phone').val(data.phone);
                $('#edit_address_id').val(data.address_id);
                $('#edit_id').val(data.id);
                $('#edit_driver_id').val(driverId);

                // Show the modal
                $('#modal-dialog-edit').modal('show');
            },
            error: function(xhr, status, error) {
                // Handle errors if necessary
                console.error(xhr.responseText);
            }
        });
    }

    $('#modal-dialog-edit').on('click', '.btn-primary', function(e) {
        e.preventDefault();
        // Get the values from the modal fields
        var full_name = $('#edit_full_name').val();
        var passport = $('#edit_passport').val();
        var birthdate = $('#edit_birthdate').val();
        var phone = $('#edit_phone').val();
        var address_id = $('#edit_address_id').val();
        var driverId = $('#edit_driver_id').val();
        var receiverId = $('#edit_id').val();

        // Check if driverId and receiverId are valid numeric values
        if (!driverId || !receiverId || isNaN(driverId) || isNaN(receiverId)) {
            alert('Invalid driverId or receiverId');
            return;
        }

        // Make an AJAX request to update the receiver person's data
        $.ajax({
            url: '/admin/driver-receivers/' + driverId + '/' + receiverId,
            type: 'PUT',
            data: {
                full_name: full_name,
                passport: passport,
                birthdate: birthdate,
                phone: phone,
                address_id: address_id,
                // Add other fields as needed
                _token: '{{ csrf_token() }}', // Include CSRF token for security
            },
            success: function(response) {
                // Handle success, e.g., close the modal or show a success message
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


</script>
