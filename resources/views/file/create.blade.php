@extends('master')

@section('Title')
Create File
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
                        <h3 class="card-title">Basic Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>File Referance No. </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Location of Risk </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Date of Application</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Date of renewal of risk</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Client / Insured Name </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Underwriting office </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Person accompanied</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Persons contacted</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- select -->
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
                            </div>
                    </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Risk Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Year of Establishment </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Plot Area </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Type of Plot </label>
                                        <select class="form-control">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Number of employees</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Number of shifts</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Business activity </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Production capacity </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Security Arrangements</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Sl </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Security Type </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Description </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Date of renewal of risk</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Neighbour Occupancies</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>North </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>South </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>East</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>West</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Distance From Water Source</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Lake </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>River</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Sea</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Canal</label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Any Other </label>
                                        <input type="text" class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Claims History Of Previous Years</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Year </label>
                                <select class="form-control">
                                    <option>1991</option>
                                    <option>1992</option>
                                    <option>1993</option>
                                    <option>1994</option>
                                    <option>2023</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Department </label>
                                <select class="form-control">
                                    <option>Department 1</option>
                                    <option>Department 2</option>
                                    <option>Department 3</option>
                                    <option>Department 4</option>
                                    <option>Department 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Number Of Claims</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Amount Assessed</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div> <!-- /.card-body -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Purpose of Inspection</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Item/ Issue </label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Details / Description</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Comments</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>File Opening Date </label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Invoice Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Invoice No. </label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Date of Invoice</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Payment Recieving Date</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Amount </label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                            file</label>
                                    </div>
                                    <!-- <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection

@section('Script')
@endsection
