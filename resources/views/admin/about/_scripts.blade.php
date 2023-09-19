@section('script')
    <script>
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
        function myFunction(id){
            $.ajax({
                type: "GET",
                url: "/admin/languages/active/"+id,
                dataType: "json",
                id: id,
                success: function (response) {
                    if (response.status == 201) {
                        location.reload();
                    }
                }
            });

        }
        function showLanguage(id){
            $.ajax({
                type: 'GET',
                url: '{{ url("/admin/languages/") }}/' + id,
                success: function(response){
                    $('#modal-dialog-show').children().html(response);
                    $('#modal-dialog-show').modal('show');
                }
            });
        }
        $(document).ready(function (e) {
            $('#add_language').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:'POST',
                    url: "/admin/languages",
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $('#modal-dialog-create').find('input').val("");
                        $('#modal-dialog-create').modal('hide');
                        location.reload();
                    },
                    error: function(xhr, status, error){
                        const errors = JSON.parse(xhr.responseText)?.errors;
                        if (xhr.status == 422) {
                            $('#add_language').find('.parsley-errors-list').remove();
                            $.each(errors, function (key, err_values) {
                                $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#create_' + key)
                            });
                        }
                    }
                });
            });
        });
        function changeSwitchery(element, checked) {
            if ( ( element.is(':checked') && checked == false ) || ( !element.is(':checked') && checked == true ) ) {
                element.parent().find('.switchery').trigger('click');
            }
        }
        function getLanguageData(id){
            $.ajax({
                type: "GET",
                url: "/admin/languages/" + id+"/edit",
                success: function (response) {
                    if(response.status == 404){
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-danger');
                        $('#success_message').text(response.message);
                    }
                    else
                    {
                        $('#edit_name').val(response.language.name);
                        $('#edit_status').val(response.language.status);
                        $('#edit_url').val(response.language.url);

                        var element = $('#edit_default');
                        changeSwitchery(element, response.language.default == 1);

                        $('#edit_id').val(response.language.id);

                        $('#output_edit').attr('src', response.language.url ? response.language.image  : '{{ asset("images") }}/' + 'no-image.png');

                        $('#modal-dialog-show').modal('hide');
                        $('#modal-dialog-edit').modal("show");
                    }
                }
            });
        }

        $(document).ready(function (e) {
            $('#update_language').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    method: "POST",
                    type: "PUT",
                    url: "/admin/languages/" + $('#edit_id').val(),
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
                            $('#update_language').find('.parsley-errors-list').remove();
                            $.each(errors, function (key, err_values) {
                                    $('<span class="parsley-errors-list filled">' + err_values + '</span>').insertAfter('#edit_' + key);
                                }
                            );
                        }
                    }
                });
            });
        });

        $(document).ready(function() {
            FormSliderSwitcher.init();
        });

    </script>
@endsection
