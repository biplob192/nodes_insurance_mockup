@extends('master')

@section('Title')
File Index
@endsection

@section('Style')
@endsection

@section('Content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class=" col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><strong>Attendance</strong></h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">Name</th>
                                                    <th style="text-align: center;">File <br>Ref. No.</th>
                                                    <th style="text-align: center;">Inspection <br>Ref No.</th>
                                                    <th style="text-align: center;">Risk Location</th>
                                                    <th style="text-align: center;">Date </th>
                                                    <th style="text-align: center;">Check In</th>
                                                    <th style="text-align: center;">Live Location</th>
                                                    <th style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">John Doe</td>
                                                    <td style="text-align: center;">12hF201</td>
                                                    <td style="text-align: center;">21Rth32</td>
                                                    <td style="text-align: center;">Justin Road,<br> Hurdiyara sharani</td>
                                                    <td style="text-align: center;">12/03/2023</td>
                                                    <td style="text-align: center;">14:24:00</td>
                                                    <td style="text-align: center;">F-38,Justin Road,<br> Hurdiyara sharani</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default" onclick="confirmDelete(event)">
                                                            Delete
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">John Doe</td>
                                                    <td style="text-align: center;">12hF201</td>
                                                    <td style="text-align: center;">21Rth32</td>
                                                    <td style="text-align: center;">Justin Road,<br> Hurdiyara sharani</td>
                                                    <td style="text-align: center;">12/03/2023</td>
                                                    <td style="text-align: center;">14:24:00</td>
                                                    <td style="text-align: center;">F-38,Justin Road,<br> Hurdiyara sharani</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default" onclick="confirmDelete(event)">
                                                            Delete
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">John Doe</td>
                                                    <td style="text-align: center;">12hF201</td>
                                                    <td style="text-align: center;">21Rth32</td>
                                                    <td style="text-align: center;">Justin Road,<br> Hurdiyara sharani</td>
                                                    <td style="text-align: center;">12/03/2023</td>
                                                    <td style="text-align: center;">14:24:00</td>
                                                    <td style="text-align: center;">F-38,Justin Road,<br> Hurdiyara sharani</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default" onclick="confirmDelete(event)">
                                                            Delete
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection

@section('Script')
<script src="vendor/sweetalert/sweetalert.all.js"></script>
<script>
    function confirmDelete(e) {
        e.preventDefault();

        const url = e.target.closest("a");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )

                // location.reload();
            }
        });
    }
</script>
@endsection