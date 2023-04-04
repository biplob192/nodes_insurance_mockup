@extends('master')

@section('Title')
File
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
                        <h5 class="card-title"><strong>File Details</strong></h5>
                        <div class="float-sm-right ml-1">
                            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-lg" style="background-color: #D5D6EA;">+ Add Inspection</button>
                        </div>
                        <div class="float-sm-right ml-1">
                            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-lg2" style="background-color: #D5D6EA;">+ Add Invoice</button>
                        </div>
                        <div class="modal fade" id="modal-lg">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Inspection</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="name">Inspector Name</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Enter category name" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="user_type">Inspection Category</label>
                                                    <select class="form-control" name="user_type">
                                                        <option value="1">Inspection Type 1</option>
                                                        <option value="2" selected>Inspection Type 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <!-- <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div> -->
                                        </form>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <div class="modal fade" id="modal-lg2">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Invoice</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="name">Invoice No.</label>
                                                    <input type="text" class="form-control" id="id" placeholder="Enter Invoice No." name="id">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Date of Invoice</label>
                                                    <input type="date" class="form-control" id="invoice_date" placeholder="Enter Date of Invoice" name="invoice_date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Payment Recieving Date</label>
                                                    <input type="date" class="form-control" id="payment_date" placeholder="Enter Payment Recieving Date" name="payment_date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="user_type">Inspection Type</label>
                                                    <select class="form-control" name="user_type">
                                                        <option value="1">Senior</option>
                                                        <option value="2">Junior</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Amount">Amount</label>
                                                    <textarea type="number" class="form-control" id="Amount" placeholder="Enter Amount" name="Amount"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <!-- <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div> -->
                                        </form>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">File Ref. No.</th>
                                                    <th style="text-align: center;">Location of Risk</th>
                                                    <th style="text-align: center;">Date</th>
                                                    <th style="text-align: center;">Risk Renewal Date</th>
                                                    <th style="text-align: center;">Insured Name </th>
                                                    <th style="text-align: center;">Status</th>
                                                    <th style="text-align: center;"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">101</td>
                                                    <td style="text-align: center;">F-38,Justin Road,<br> Hurdiyara sharani</td>
                                                    <td style="text-align: center;">12/03/2023</td>
                                                    <td style="text-align: center;">17/03/2023</td>
                                                    <td style="text-align: center;">John Doe</td>
                                                    <td style="text-align: center; color:#3CB371;font-weight:bold">Completed</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                Status Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="#">Not Started</a>
                                                                <a class="dropdown-item" href="#">Pending</a>
                                                                <a class="dropdown-item" href="#">Completed</a>
                                                            </div>
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
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><strong>Inspection List</strong></h5>
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
                                                    <th style="text-align: center;">Referance No.</th>
                                                    <th style="text-align: center;">Inspector Category</th>
                                                    <th style="text-align: center;">Inspector Name</th>
                                                    <th style="text-align: center;">Status</th>
                                                    <th style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">201</td>
                                                    <td style="text-align: center;">Senior</td>
                                                    <td style="text-align: center;">John Doe</td>
                                                    <td style="text-align: center; color:#3CB371;font-weight:bold">Completed</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="#">Assign Inspector</a>  
                                                                <a class="dropdown-item" href="{{route('ddreport.download')}}">Download Report</a>
                                                                <a class="dropdown-item" href="#" onclick="confirmDelete(event)">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">202</td>
                                                    <td style="text-align: center;">Junior</td>
                                                    <td style="text-align: center;">Johny Doeal</td>
                                                    <td style="text-align: center; color:#FFA500;font-weight:bold">Pending</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="#">Assign Inspector</a>  
                                                                <a class="dropdown-item" href="{{route('ddreport.download')}}">Download Report</a>
                                                                <a class="dropdown-item" href="#" onclick="confirmDelete(event)">Delete</a>
                                                            </div>
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
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"><strong>Invoice</strong></h5>
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
                                                    <th style="text-align: center;">Invoice No.</th>
                                                    <th style="text-align: center;">Date of Invoice</th>
                                                    <th style="text-align: center;">Payment Recieving Date</th>
                                                    <th style="text-align: center;">Amount</th>
                                                    <th style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;">301</td>
                                                    <td style="text-align: center;">23/02/2023</td>
                                                    <td style="text-align: center;">02/03/2023</td>
                                                    <td style="text-align: center;">12,456 BDT</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="#" onclick="confirmDelete(event)">Delete</a>
                                                                <a class="dropdown-item" href="#">Time Log</a>
                                                                <a class="dropdown-item" href="#">Invoice</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">302</td>
                                                    <td style="text-align: center;">02/03/2023</td>
                                                    <td style="text-align: center;">23/03/2023</td>
                                                    <td style="text-align: center;">16,456 BDT</td>
                                                    <td style="text-align: center;">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                Action<span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <a class="dropdown-item" href="#" onclick="confirmDelete(event)">Delete</a>
                                                                <a class="dropdown-item" href="#">Time Log</a>
                                                                <a class="dropdown-item" href="#">Invoice</a>
                                                            </div>
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