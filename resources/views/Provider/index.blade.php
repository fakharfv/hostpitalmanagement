@extends('app')
@section('content')
@push('styles')

@endpush
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div>
    <div class="text-end">
        <button id="prov_modal_add_btn" class="btn btn-primary mb-3">+ Add Provider</button>
    </div>
    <table class="table table-bordered data-table" id="prov_data_tables" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>PMDC</th>
                <th>Qualification</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
    <div class="modal fade" id="prov-modal" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"><span id="modal-type"></span> Provider</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="body-modal-data">

                </div>
            </div>
        </div>
    </div>

@push('scripts')

<script>
    var table = $('#prov_data_tables').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('provider.list') }}",
    columns: [
        {
            data: 'id',
            name: 'id'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'phone',
            name: 'phone'
        },
        {
            data: 'pmdc',
            name: 'pmdc'
        },
        {
            data: 'qualification',
            name: 'qualification',
        },
    ]
});
// $('#prov_data_tables').on('draw.dt', function() {
//     KTMenu.init();
// });
$('#search').on('keyup', function() {
    table.search($(this).val()).draw();
});

$(document).on('submit', '#provider-add', function(event) {

            event.preventDefault(); // Prevent the default form submission
            var form = $(this);
                var submitButton = form.find('button[type="submit"]');

                submitButton.prop('disabled', true);
                submitButton.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...');

            var actionUrl = $('#provider-add').attr('action');

            // Get form data
            let formData = $('#provider-add').serialize();

            // Send AJAX request
            $.ajax({
            data: formData,
            url: actionUrl,
            type: "POST",
            dataType: 'json',
            success: function (data) {

                $('#provider-add').trigger("reset");
                $('#prov-modal').modal('hide');
                table.draw();

            },
            error: function (data) {

                if (data.status === 422) {
                    console.log(data);
                        // Validation errors
                    let errors = data.responseJSON.errors;
                    displayErrors(errors);
                    submitButton.prop('disabled', false);
                    submitButton.html('Add Provider');
                } else {
                    // Other errors

                    submitButton.prop('disabled', false);
                    submitButton.html('Submit');
                }
            }
        });
            // axios.post(actionUrl, formData)
            //     .then(function(response) {
            //         // Handle success
            //         console.log(response.data);
            //         // toastr.success(response.data.message); // Show toast message
            //         location.reload();
            //     })
            //     .catch(function(error) {
            //         // Handle error
            //         if (error.response.status === 422) {
            //             // Validation errors
            //             let errors = error.response.data.errors;
            //             displayErrors(errors);
            //             submitButton.prop('disabled', false);
            //             submitButton.html('Submit');
            //         } else {
            //             // Other errors
            //             console.error(error);
            //             submitButton.prop('disabled', false);
            //             submitButton.html('Submit');
            //         }
            //     });
        });

    $('#prov_modal_add_btn').on('click', function() {
        $('#modal-type').text('Add');
        var modalHtml = {!! json_encode(view('Provider.add-modal')->render()) !!};
            if (modalHtml.trim() !== '') {
                $('#body-modal-data').html(modalHtml);
                $('#prov-modal').modal('show');
            } else {
                // Handle the case when the modal HTML is empty
                console.error('Failed to render modal HTML');
            }
    });

    $('#prov_data_tables').on('click', '.edit-provider', function() {
        $('#modal-type').text('Edit');
        var id = $(this).data('id');
        var url = '{{ route("provider.edit", ":id") }}';
        url = url.replace(':id', id);

        $.ajax({
            url: url,
            type: "GET",
            dataType: 'json',
            success: function (data) {
                if (data.trim() !== '') {
                    $('#body-modal-data').html(data);
                    $('#prov-modal').modal('show');
                } else {
                    console.error('Failed to render modal HTML');
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
                alert('Please try again.');
            }
        });
        // axios.get('providers/'+id+'/edit')
        //     .then(function(response) {
        //         $('#body-modal-data').html(response.data);
        //         $('#prov-modal').modal('show');
        //     })
        //     .catch(function(error) {
        //         alert('Please try again.');
        //     });
    });

    function displayErrors(errors) {

        // Clear previous error messages
        document.querySelectorAll('.error-message').forEach(function(element) {
            element.innerHTML = '';
        });

        // Display new error messages
        Object.keys(errors).forEach(function(key) {
            console.log(key);
            let errorMessage = errors[key][0];
            let errorElement = document.getElementById(key + '-error');
            if (errorElement) {
                errorElement.innerHTML = errorMessage;
            }
        });
    }


</script>
@endpush
@endsection
