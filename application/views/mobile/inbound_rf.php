<style>
    @media (max-width: 576px) {
        .form-group.row label {
            display: inline-block;
            width: 100%;
            margin-bottom: 0.5rem;
            /* Sesuaikan dengan kebutuhan Anda */
        }
    }
</style>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4>Inbound RF Pilot</h4>
            </div>
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">General Form</li>
                </ol>
            </div> -->
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Form Scan Item</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="card-body">
                            <div class="form-inline">
                                <label for="" class="col-form-label">Lokasi</label>
                                <input type="text" class="form-control" id="inLokasi" placeholder="Input Lokasi">
                            </div>
                            <div class="form-inline">
                                <label for="" class="col-form-label">Input Item Code</label>
                                <input type="text" class="form-control" id="" placeholder="Input Item Code">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-inline">
                                        <label for="" class="col-form-label">Quantity</label>
                                        <input type="number" class="form-control" id="" placeholder="Input Qty">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-inline">
                                        <label for="" class="col-form-label">Uom</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">--Pilih Uom--</option>
                                            <option value="">Pcs</option>
                                            <option value="">Carton</option>
                                            <option value="">Doz</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-inline">
                                <label for="" class="col-form-label">Carton</label>
                                <input type="number" class="form-control" id="" placeholder="Input Master Carton">
                            </div>
                            <div class="form-inline">
                                <label for="" class="col-form-label">Pallet</label>
                                <input type="number" class="form-control" id="" placeholder="Input Pallet">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-info float-right">Submit</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Scanned Item</h3>

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
                                    <th>No.</th>
                                    <th>Id IB</th>
                                    <th>Item Code</th>
                                    <th>Lokasi</th>
                                    <th>Scan Qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>Pencil Kayu RR 170 XCV</td>
                                    <td>89985564987</td>
                                    <td><span class="tag tag-success">WHS009</span></td>
                                    <td>9</td>
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
</section>