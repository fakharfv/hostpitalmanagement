@extends('app')
@section('content')
@push('styles')
<a href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css" ></a>
<style>
    .loading-indicator {
        display: none;
        position: fixed;
        left: 50%;
        top: 50%;
        z-index: 9999;
        transform: translate(-50%, -50%);
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
@endpush


<nav class="mt-3 bg-mute-dark text-white">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <button class="nav-link tab-link active" data-type="patient" id="nav-patient-tab" data-bs-toggle="tab" data-bs-target="#nav-patient" type="button" role="tab"  aria-controls="nav-patient" aria-selected="true">Patient Type</button>
      <button class="nav-link tab-link" id="nav-provider-tab" data-type="provider" data-bs-toggle="tab" data-bs-target="#nav-provider" type="button" role="tab" aria-controls="nav-provider" aria-selected="true">Provider Type</button>
      <button class="nav-link tab-link" id="nav-appointment-tab" data-type="appointment" data-bs-toggle="tab" data-bs-target="#nav-appointment" type="button" role="tab" aria-controls="nav-appointment" aria-selected="true">Appointment Type</button>
      <button class="nav-link tab-link" id="nav-lab-tab" data-bs-toggle="tab" data-bs-target="#nav-lab" type="button" role="tab" aria-controls="nav-lab" aria-selected="true">Lab Type</button>
      <button class="nav-link tab-link" id="nav-charge-tab" data-bs-toggle="tab" data-bs-target="#nav-charge" type="button" role="tab" aria-controls="nav-charge" aria-selected="true">Charge Type</button>
      <button class="nav-link tab-link" id="nav-expense-tab" data-bs-toggle="tab" data-bs-target="#nav-expense" type="button" role="tab" aria-controls="nav-expense" aria-selected="true">Expense Type</button>
      <button class="nav-link tab-link" id="nav-refund-tab" data-bs-toggle="tab" data-bs-target="#nav-refund" type="button" role="tab" aria-controls="nav-refund" aria-selected="true">Refund Type</button>

    </div>
  </nav>
  <div class="tab-content mt-5" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-patient" role="tabpanel" aria-labelledby="nav-patient-tab">
        <div class="col-8 offset-2 my-4">
            <form id="patient-type" class="submitSettingForm" action="{{ route('setting.createPatientTypes') }}" method="POST">
                @csrf
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="" class="form-control" id="name" placeholder="name">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="" class="form-control" id="description" placeholder="last name">
                        </div>
                    </div>

                </div>
            <div class="my-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-sm">Create</button>
            </div>
        </form>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-provider" role="tabpanel" aria-labelledby="nav-provider-tab">
        <div class="col-8 offset-2 my-4">
            <form id="provider-type" class="submitSettingForm" action="{{ route('setting.createProviderTypes') }}" method="POST">
                @csrf
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="" class="form-control" id="name" placeholder="name">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="" class="form-control" id="description" placeholder="last name">
                        </div>
                    </div>

                </div>
            <div class="my-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-sm">Create</button>
            </div>
        </form>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-appointment" role="tabpanel" aria-labelledby="nav-appointment-tab">
        <div class="col-8 offset-2 my-4">
            <form id="appointment-type" class="submitSettingForm" action="{{ route('setting.createAppointmentTypes') }}" method="POST">
                @csrf
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="" class="form-control" id="name" placeholder="name">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="" class="form-control" id="description" placeholder="last name">
                        </div>
                    </div>

                </div>
            <div class="my-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-sm">Create</button>
            </div>
        </form>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-lab" role="tabpanel" aria-labelledby="nav-lab-tab">
        <div class="col-8 offset-2 my-4">
            <form id="lab-type" class="submitSettingForm" action="{{ route('setting.createLabTypes') }}" method="POST">
                @csrf
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="" class="form-control" id="name" placeholder="name">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="" class="form-control" id="description" placeholder="last name">
                        </div>
                    </div>

                </div>
            <div class="my-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-sm">Create</button>
            </div>
        </form>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-charge" role="tabpanel" aria-labelledby="nav-charge-tab">
        <div class="col-8 offset-2 my-4">
            <form id="charge-type" class="submitSettingForm" action="{{ route('setting.createChargeTypes') }}" method="POST">
                @csrf
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="" class="form-control" id="name" placeholder="name">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="" class="form-control" id="description" placeholder="last name">
                        </div>
                    </div>

                </div>
            <div class="my-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-sm">Create</button>
            </div>
        </form>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-expense" role="tabpanel" aria-labelledby="nav-expense-tab">
        <div class="col-8 offset-2 my-4">
            <form id="expense-type" class="submitSettingForm" action="{{ route('setting.createExpenseTypes') }}" method="POST">
                @csrf
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="" class="form-control" id="name" placeholder="name">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="" class="form-control" id="description" placeholder="last name">
                        </div>
                    </div>

                </div>
            <div class="my-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-sm">Create</button>
            </div>
        </form>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-refund" role="tabpanel" aria-labelledby="nav-refund-tab">
        <div class="col-8 offset-2 my-4">
            <form id="refund-type" class="submitSettingForm" action="{{ route('setting.createRefundTypes') }}" method="POST">
                @csrf
                <div class="row gutters">
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="" class="form-control" id="name" placeholder="name">
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="" class="form-control" id="description" placeholder="last name">
                        </div>
                    </div>

                </div>
            <div class="my-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-sm">Create</button>
            </div>
        </form>
        </div>
    </div>
  </div>
    <div class="table-responsive my-5" id="pat-table" >
        <div class="loading-indicator" id="loading-indicator"></div>
        <table id="example" class="table table-bordered example" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id="setting-table-body">
                @isset($patientTypes)
                    @foreach ($patientTypes as $type)
                        <tr class="text-center">
                            <td>{{ $type->name }}</td>
                            <td>{{ $type->description }}</td>
                        </tr>
                    @endforeach
                @endisset

            </tbody>
        </table>
    </div>



@push('scripts')
{{-- <script>$('#example').DataTable();</script> --}}
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
$(document).ready(function () {
    $('.submitSettingForm').on('submit', function (e) {
        e.preventDefault();
        var table = $('.example').DataTable({
            columns: [
                { data: 'name' },
                { data: 'description' }
            ]
        });
        var form = $(this);
        var url = $(this).attr('action') // Your common endpoint for handling form submissions
        var formData = form.serialize();
        $('form[class="submitSettingForm"]').validate({
            rules: {
            name: {
                required: true,
                minlength : 4
            },
            description: {
                maxlength : 200
            }
            },
            messages: {
            name: {
                required : 'Name is required',
                minlength: 'Name must be greater than 3 characters',
                maxlength: 'Name must not be greater than 20 characters long'
            },
            description: {
                maxlength: 'Description must not be greater than 200 characters long'
            }
            }

        });

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            success: function (response) {
                // Handle success
                swal({
                    title: "Good job!",
                    text: "You clicked the button!",
                    icon: "success",
                });
                table.clear().rows.add(response).draw();
            },
            error: function (response) {
                // Handle error
                alert('Error: ' + response.responseJSON.message);
            }
        });
    });
});


</script>
<script>
    $(document).ready(function() {
        var table = $('.example').DataTable({
            columns: [
                { data: 'name' },
                { data: 'description' }
            ]
        });

        $('.tab-link').on('click', function() {
            var type = $(this).data('type');
            $('#loading-indicator').show();

            $.ajax({
                url: '{{ route("setting.show") }}',
                type: 'GET',
                data: { type: type },
                success: function(data) {
                    console.log(data);
                    table.clear().rows.add(data).draw();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                },
                complete: function() {
                    $('#loading-indicator').hide();
                }
            });
        });
    });
</script>
<script>
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        destroy: true, // Add this line
        ajax: "{{ route('setting.show') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'description', name: 'description'},
            {data: 'price', name: 'price'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
</script>
@endpush

@endsection
