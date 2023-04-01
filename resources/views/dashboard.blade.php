@extends('master')

@section('Title')
Dashboard
@endsection

@section('Style')
@endsection

@section('Content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        @role('admin')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title"><strong>ADMIN DASHBOARD CONTANT</strong></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>New Orders</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>New Orders</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>New Orders</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>New Orders</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>New Orders</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>New Orders</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>New Orders</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <!-- small card -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>New Orders</p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                    Donut Chart
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool"
                                                        data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool"
                                                        data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="donut-chart" style="height: 300px;"></div>
                                            </div>
                                            <!-- /.card-body-->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Bar chart -->
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    <i class="far fa-chart-bar"></i>
                                                    Bar Chart
                                                </h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool"
                                                        data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool"
                                                        data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="bar-chart" style="height: 300px;"></div>
                                            </div>
                                            <!-- /.card-body-->
                                        </div>
                                        <!-- /.card -->

                                        <!-- Donut chart -->
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endrole

            @role('employee')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><strong>EMPLOYEE DASHBOARD CONTANT</strong></h5>
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary" id="check_in">Check-In Here</a>
                            <a href="#" class="btn btn-primary" id="complete_check_in">Attendance Completed!</a>
                            <input type="hidden" value="{{ auth()->user()->id }}" id="user_id">
                            <input type="hidden" value="{{ auth()->user()->roles[0]->name }}" id="user_role">
                            <a href="#" class="btn btn-primary" id="check_out">Check-Out Here</a>
                        </div>
                    </div>
                </div>
            </div>
            @endrole
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    @endsection

    @section('Script')
    <script src="vendor/sweetalert/sweetalert.all.js"></script>
    <script src="{{asset('plugins')}}/flot/jquery.flot.js"></script>
    <script src="{{asset('plugins')}}/flot/plugins/jquery.flot.pie.js"></script>

    <script>
    $(document).ready(function() {
        var user_id = $('#user_id').val();
        $('#complete_check_in').hide();

        if (user_id != null) {
            $('#check_out').hide();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "attendance/" + user_id,
                success: function(data) {
                    // console.log(data);

                    if (data.check_in) {
                        $('#check_in').hide();
                        $('#check_out').show();
                    }
                    if (data.check_out) {
                        $('#check_out').hide();
                        $('#check_in').hide();
                        $('#complete_check_in').show();
                    }
                }
            });
        }
    });


    $(function() {
        $('#check_in').on("click", function() {
            $('#check_in').hide();
            $('#check_out').show();
            var user_id = $('#user_id').val();

            $.ajax({
                type: "POST",
                url: "attendance",
                data: {
                    user_id: user_id,
                },
                success: function(data) {
                    // console.log(data);

                    swal.fire({
                        title: 'Attendance',
                        text: data.message,
                    })
                }
            });
        });
    });

    $(function() {
        $('#check_out').on("click", function() {
            $('#check_out').hide();
            $('#complete_check_in').show();
            var user_id = $('#user_id').val();

            $.ajax({
                type: "POST",
                url: "attendance",
                data: {
                    user_id: user_id,
                },
                success: function(data) {
                    // console.log(data);

                    swal.fire({
                        title: 'Attendance',
                        text: data.message,
                    })
                }
            });
        });
    });
    </script>
    <script>
    $(function() {
        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
            data: [
                [1, 10],
                [2, 8],
                [3, 4],
                [4, 13],
                [5, 17],
                [6, 9]
            ],
            bars: {
                show: true
            }
        }
        $.plot('#bar-chart', [bar_data], {
            grid: {
                borderWidth: 1,
                borderColor: '#f3f3f3',
                tickColor: '#f3f3f3'
            },
            series: {
                bars: {
                    show: true,
                    barWidth: 0.5,
                    align: 'center',
                },
            },
            colors: ['#3c8dbc'],
            xaxis: {
                ticks: [
                    [1, 'January'],
                    [2, 'February'],
                    [3, 'March'],
                    [4, 'April'],
                    [5, 'May'],
                    [6, 'June']
                ]
            }
        })
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [{
                label: 'Series2',
                data: 30,
                color: '#3c8dbc'
            },
            {
                label: 'Series3',
                data: 20,
                color: '#0073b7'
            },
            {
                label: 'Series4',
                data: 50,
                color: '#00c0ef'
            }
        ]
        $.plot('#donut-chart', donutData, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.5,
                    label: {
                        show: true,
                        radius: 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            // legend: {
            //     show: false
            // }
        })
        /*
         * END DONUT CHART
         */

    })

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
            label +
            '<br>' +
            Math.round(series.percent) + '%</div>'
    }
    </script>
    @endsection