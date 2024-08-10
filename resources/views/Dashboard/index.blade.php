@extends('app')
@section('content')
<style>
        .appointment-status {
            display: flex;
            justify-content: center
        }
        .label-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-right: 1px;
            margin-top: 60px;
        }
        .label {
            font-size: 0.9rem;
            color: #999;
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            text-align: center;
            width: 100px;
        }
        .card-appointment {
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 250px; /* Adjusted width to fit content */
            margin-right: 20px;
        }
        .highlight {
            background-color: #d4e157; /* Match the green color in the image */
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .highlight .value {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .data-row {
            display: flex;
            justify-content: center;
            padding: 10px;
            border-top: 1px solid #ddd;
        }
        .data-row .value {
            font-size: 1rem;
            font-weight: bold;
        }
        .copay-card {
      background-color: #ffebc1;
      border-radius: 5px;
      padding: 10px;
      margin-top: 20px;
    }
    .copay-card h5 {
      font-size: 1.2rem;
      margin-bottom: 15px;
      text-align: left;
    }
    .copay-card .card-body {
      padding: 10px;
      display: flex;
      justify-content: space-around;
      align-items: center;
    }
    .copay-card .amount {
      text-align: center;
      font-size: 1.1rem;
    }
    .chart-card {
      margin-top: 20px;
    }
    .chart-card h5 {
      font-size: 1.2rem;
    }

    .status-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .status-item {
            text-align: center;
            flex: 1;
        }
        .status-item .amount {
            font-size: 2rem;
            color: #007bff;
        }
        .status-item .status-label {
            font-size: 0.9rem;
            color: #6c757d;
        }
</style>
    <div class="row mt-2">
        <div class="col-lg-12 mt-5 mt-lg-0">
            <div class="container">
                {{-- <div class="container my-4"> --}}
                    <div class="status-box my-4">
                        <div class="status-item">
                            <div class="amount">838</div>
                            <div class="status-label"><a href="#" class="text-decoration-none text-primary">Unread Fax</a></div>
                        </div>
                        <div class="status-item">
                            <div class="amount">2</div>
                            <div class="status-label"><a href="#" class="text-decoration-none text-primary">Inbox</a></div>
                        </div>
                        <div class="status-item">
                            <div class="amount">0</div>
                            <div class="status-label"><a href="#" class="text-decoration-none text-primary">Online Appointment(s)</a></div>
                        </div>
                    </div>
                {{-- </div> --}}
                <div class="card row mt-1">
                    <div class="card-header bg-primary text-white">
                      Appointment Status
                    </div>
                    <div class="card-body">
                        <div class="appointment-status">
                            <div class="label-container">
                                <div class="label">Last Week</div>
                                <div class="label">MTD</div>
                                <div class="label">YTD</div>
                            </div>
                            <div class="card-appointment">
                                <div class="highlight">
                                    <div class="text-center">Seen</div>
                                </div>
                                <div class="data-row">
                                    <div class="value">153</div>
                                </div>
                                <div class="data-row">
                                    <div class="value">588</div>
                                </div>
                                <div class="data-row">
                                    <div class="value">3569</div>
                                </div>
                            </div>
                            <div class="card-appointment">
                                <div class="highlight">
                                    <div class="text-center">Seen</div>
                                </div>
                                <div class="data-row">
                                    <div class="value">153</div>
                                </div>
                                <div class="data-row">
                                    <div class="value">588</div>
                                </div>
                                <div class="data-row">
                                    <div class="value">3569</div>
                                </div>
                            </div>
                            <div class="card-appointment">
                                <div class="highlight">
                                    <div class="text-center">Seen</div>
                                </div>
                                <div class="data-row">
                                    <div class="value">153</div>
                                </div>
                                <div class="data-row">
                                    <div class="value">588</div>
                                </div>
                                <div class="data-row">
                                    <div class="value">3569</div>
                                </div>
                            </div>
                            <div class="card-appointment" id="print-token">
                                <div class="text-center p-2">
                                    <h1 class="h4">Token Number</h1>
                                    <p class="h6">Your token number is:</p>
                                    <div class="token-number">
                                        <h2 class="h3 fw-bold">123</h2>
                                    </div>
                                    <button onclick="printDiv('print-token')" class="btn btn-primary mt-3 d-print-none">Print Token</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row my-4">
                    <div class="col">
                      <div class="copay-card">
                        <div class="card-body">
                          <h5 class="card-title">Fee Collection</h5>
                          <div class="amount">
                            <div>123.00</div>
                            <small>Last Week</small>
                          </div>
                          <div class="amount">
                            <div>257.00</div>
                            <small>This Month</small>
                          </div>
                          <div class="amount">
                            <div>3498.00</div>
                            <small>This Year</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">Visits Count</div>
                            <div id="visits-count">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">Visit By Payer Types</div>
                            <div id="visits-count-payertypes">
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'bar'
            },
            series: [{
                name: 'sales',
                data: [30,40,45,50,49,60,70,91,125]
            }],
            xaxis: {
                categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
            }
        }
        var chart = new ApexCharts(document.querySelector("#visits-count"), options);

        chart.render();


        var donutoptions = {
            chart: {
                type: 'donut'
            },
            series: [44, 55],
            labels: ['MEDICARE', 'COMM']
        }

            var donutChart = new ApexCharts(document.querySelector("#visits-count-payertypes"), donutoptions);
            donutChart.render();

    </script>
    <script>
        function printDiv(divName) {
             var printContents = document.getElementById(divName).innerHTML;
             var originalContents = document.body.innerHTML;

             document.body.innerHTML = printContents;

             window.print();

             document.body.innerHTML = originalContents;
        }
    </script>
@endsection
