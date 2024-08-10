
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HMS</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<style>
    .table thead th {
            text-align: center;
            white-space: nowrap;
            font-size: 14px; /* Prevent wrapping */
        }

        .table tr td {
            white-space: nowrap; /* Prevent wrapping */
            font-size: 13px;
        }
        .table tr td a {
            border-bottom: 1px solid rgb(7, 175, 231);
        }

        .top-right {
            position: fixed;
            top: 10px;
            z-index: 1;
            right: 10px;
            display: flex;
            align-items: center;

        }
        .search-bar {
            background-color: #0d6efd; /* Primary blue color */
            border-radius: 15px;
            display: flex;
            align-items: center;
            padding: 5px 10px;
            width: fit-content;
            margin-right: 15px; /* Space between search bar and dropdown */
        }
        .search-bar .icon {
            color: white;
            font-size: 1.2rem;
        }
        .search-bar .search-input {
            background-color: #0d6efd;
            border: none;
            color: white;
            outline: none;
            padding-left: 10px;
        }
        .search-bar .search-input::placeholder {
            color: #e9ecef; /* Light grey placeholder color */
        }
        .profile-dropdown .dropdown-toggle::after {
            display: none;
        }

        #loader {
            display: none; /* Initially hidden */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px; /* Larger size */
            height: 100px; /* Larger size */
            border-width: 10px; /* Thicker border */
        }
        .rolling {
            animation: roll 1s linear infinite;
        }
        @keyframes roll {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        .pagination-custom {
            display: flex;
            justify-content: center;
            padding-left: 0;
            list-style: none;
            border-radius: 50px;
            background: #f1f1f1;
            padding: 10px 15px;
        }

        .pagination-custom .page-item {
            margin: 0 3px;
        }

        .pagination-custom .page-link {
            border: none;
            border-radius: 8px;
            padding: 5px 10px;
            font-size: 14px;
            color: #000;
            background: #ffffff;
            text-decoration: none;
            transition: background 0.3s, color 0.3s;
        }

        .pagination-custom .page-link:hover {
            background: #e2e6ea;
        }

        .pagination-custom .page-item.active .page-link {
            background: #007bff;
            color: white;
        }

        .pagination-custom .page-link-prev-next {
            border: none;
            border-radius: 8px;
            padding: 5px 10px;
            font-size: 14px;
            color: #000;
            background: #ffffff;
            text-decoration: none;
            transition: background 0.3s, color 0.3s;
        }

        .pagination-custom .page-link-prev-next:hover {
            background: #e2e6ea;
            color: #007bff;
        }

    .dataTable-header-bg {
      background-color: #53a2f1; /* Change this color as needed */
    }

    .dataTable-header-bg th {
      background-color: inherit; /* Ensure the header cells use the same background color */
    }
</style>
@stack('styles')
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  {{-- <div class="row bg-info p-3 topnav">
    <div class="col-6 col-sm-4">
        <a>
            <img src="" alt="test" class="rounded-pill" width="10px" height="10px" />
        </a>
    </div>
    <div class="top-right col-6 col-sm-8 justify-content-end">
        <div class="search-bar">
            <div class="icon">
                <i class="bi bi-person-plus"></i>
            </div>
            <input type="text" class="search-input" placeholder="SEARCH PATIENT">
            <div class="icon">
                <i class="bi bi-sliders"></i>
            </div>
        </div>
        <div class="profile-dropdown dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" onclick="loadSetting()">Settings</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
    </div> --}}
    <div class="p-4">
    <nav class="navbar navbar-expand-sm fixed-top bg-info p-3">
        <div class="container-fluid">
          {{-- <a class="navbar-brand" href="#"><img src="" alt="logo" width="20px" height="20px" /> Logo</a> --}}
          <h2 class="text-white">Alaska Hospital</h2>
          <div class="top-right col-6 col-sm-8 justify-content-end">
            {{-- <div class="search-bar">
              <div class="icon">
                <i class="bi bi-person-plus"></i>
              </div>
              <input type="text" list="myDatalist" class="search-input" id="search" placeholder="SEARCH PATIENT">
              <datalist id="datalistPatient"></datalist>
              <div class="icon">
                <i class="bi bi-sliders"></i>
              </div>

            </div> --}}
            <div class="search-bar position-relative">
                <div class="icon">
                  <i class="bi bi-person-plus"></i>
                </div>
                <input type="text" list="datalistPatient" class="search-input form-control" id="search" placeholder="SEARCH PATIENT">
                <datalist id="datalistPatient">
                  <option value=""></option>
                </datalist>
                <div class="icon">
                  <i class="bi bi-sliders"></i>
                </div>
              </div>

            <div class="profile-dropdown dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" onclick="loadSetting()">Settings</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="{{ route('dashboard') }}" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ route('patient.list') }}" class="nav-link scrollto"><i class="bi bi-people"></i> <span>Patient</span></a></li>
        <li><a href="{{ route('provider.list') }}" class="nav-link scrollto"><i class="bi bi-person-add"></i><span>Provider</span></a></li>
        <li><a href="{{ route('setting.show') }}" class="nav-link scrollto"><i class="bi bi-gear"></i> <span>Setting</span></a></li>
        <li><a href="{{ route('document.list') }}" class="nav-link scrollto"><i class="bi bi-files"></i> <span>Documents</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Patients</h5>
          <div class="ms-auto">
            <!-- New button added to the left of the close button -->
            <a href="{{ route('patient.create') }}" class="btn btn-primary me-2">+ Add Patient</a>
            <button type="button" class="btn-close patient-modal-close" aria-label="Close"></button>
          </div>
        </div>
        <div class="modal-body">
            <div class="col-8 offset-2 my-4">
                <form id="patient-filter" method="POST">
                    @csrf
                <div class="row gutters">
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" name="firstName" value="" class="form-control" id="firstName" placeholder="first name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" name="lastName" value="" class="form-control" id="lastName" placeholder="last name">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="cnic">CNIC ID</label>
                                <input type="text" name="cnic" class=" form-control" id="cnic" value="" placeholder="XXXXX-XXXXXXX-X" maxlength="15">
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" name="phone" value="" class="form-control" id="phone" placeholder="e.g., 0301-2345678 or 021-1234567">
                            </div>
                        </div>
                </div>
                <div class="my-3 d-flex justify-content-center">
                    <button type="submit" id="submit-patient-filter" class="btn btn-primary btn-sm">Filter Patients</button>
                </div>
            </form>
            </div>
            <div class="container text-center mt-5">
                <div id="loader" class="spinner-border text-primary rolling" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>

          <div class="table-responsive my-5" id="patrer-table" >
            <table id="patient-table34" class="table table-bordered" overflow-X=true>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>CNIC</th>
                  <th>Phone</th>
                  <th>Address</th>
                </tr>
              </thead>
              <tbody id="modal-table-content">

              </tbody>
            </table>

          </div>
        </div>
        <div class="modal-footer">
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-custom" id="pagination-controls">
                  <!-- Pagination controls will be loaded here -->
                </ul>
            </nav>
          {{-- <button type="button" class="btn btn-secondary btn-sm patient-modal-close">Close</button> --}}
        </div>
      </div>
    </div>
  </div>

  <main id="main">
    <div class="container mt-5">
            @yield('content')
    </div>
  </main><!-- End #main -->

  <!-- Vendor JS Files -->

  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#basicExample').DataTable({ "scrollX": true, "scrollY": true })

    });
</script>

<script>
    $(document).ready(function() {
        $('#static-modal').click(function(){

            $('#staticBackdrop').modal('show');
            $('#loader').hide();
            $('#pat-table').hide();

        })
    });

    function loadPage(page) {
        var url = "{{ route('patient.filterPatient') }}";
  $.ajax({
    url: url,
    type: 'POST',
    data: { page: page },
    success: function(response) {
      // Update the modal content
      $('#modal-table-content').html(response.content);

      // Update the pagination controls
      let paginationControls = '';
      for (let i = 1; i <= response.totalPages; i++) {
        paginationControls += `<li class="page-item ${i === page ? 'active' : ''}">
                                  <a class="page-link" href="#" onclick="loadPage(${i})">${i}</a>
                               </li>`;
      }
      $('#pagination-controls').html(paginationControls);
    }
  });
}

    $(document).ready(function(){
        $(".patient-modal-close").click(function(){
            // $('#patient-table-body').html('');
            // $('#patient-table').hide();
            $("#staticBackdrop").modal('hide');
            $('#loader').hide();
            $('#submit-patient-filter').attr('disabled', false);

        });

        $('#patient-filter').on('submit',function(e){
            e.preventDefault();

            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var cnic = $('#cnic').val();
            var phone = $('#phone').val();
            var token = $('input[name="_token"]').val();
            var url = "{{ route('patient.filterPatient') }}";
            $('#loader').show();
            $('#submit-patient-filter').attr('disabled', true);
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    firstName: firstName,
                    lastName: lastName,
                    cnic: cnic,
                    phone: phone,
                    _token: token
                },
                success: function(response){
                    const data = response;
                    // Handle success response
                    $('#modal-table-content').html(response.content);

                    // Update the pagination controls
                    let paginationControls = '';
                    console.log(response.totalPages);
                    var page = response.page;
                        if (page = 1) {
        paginationControls += `<li class="page-item" disabled>
                                 <a class="page-link" href="#" onclick="loadPage(${page - 1})">Previous</a>
                               </li>`;
      }

      // Page numbers
      for (let i = 1; i <= response.totalPages; i++) {
        paginationControls += `<li class="page-item ${i === page ? 'active' : ''}">
                                  <a class="page-link" href="#" onclick="loadPage(${i})">${i}</a>
                               </li>`;
      }

      // Next button
      if (page = response.totalPages) {
        paginationControls += `<li class="page-item" disabled>
                                 <a class="page-link" href="#" onclick="loadPage(${page + 1})">Next</a>
                               </li>`;
      }

                    $('#pagination-controls').html(paginationControls);
                    // setTimeout(function() {
                    // // Load content (simulated here with a simple text message)
                    //     populateTable(data);
                    //     $('#submit-patient-filter').attr('disabled', false);
                    //     $('#pat-table').show();
                    // // Hide the loader
                    //     $("#loader").hide();
                    // }, 3000); // 2 second delay to simulate loading time
                    // populateTablePagination(response.links);

                    // $('#loader').hide();
                    // $("#patient-filter").reset();
                },
                error: function(xhr, status, error){
                    console.error(xhr.responseText);
                    // Handle error response
                    $('#loader').hide();
                }
            });
        });
    });
</script>

<script>$('#patient-table').DataTable();</script>
@stack('scripts')

<script>
    function loadSetting(){
        window.location.href = "{{ route('setting.show') }}";
    }
</script>
<script>
    $(document).ready(function(){
        $('#search').on('input', function(){
            var query = $(this).val();
            const datalist = $('#datalistPatient');
            datalist.empty();
            if(query.length > 2) {
                $.ajax({
                    url: '{{ route("patient.search") }}',
                    type: 'GET',
                    data: { q: query },
                    success: function(response) {
                        // Assuming the response is an array of suggestions
                        response.forEach(item => {
                            var patient_route = "{{ url('/patient/details') }}/";  // Pass the base URL to JavaScript
// Append the datalist with the correct format
datalist.append(`<option class="dl-item" data-url="${patient_route}${item.id}" value="${item.first_name}">${item.first_name}</option>`);
                        });
                    },
                    error: function() {
                        console.error('Error fetching data');
                    }
                });
            }
        });
    });
    $('#search').on('change', function() {
        var selectedValue = $(this).val();
        var selectedOption = $(`#datalistPatient option[value="${selectedValue}"]`);

        if (selectedOption.length) {
            var url = selectedOption.data('url');
            if (url) {
                window.location.href = url;  // Redirect to the selected patient's page
            }
        }
    });
</script>

</body>

</html>
