<!-- MAIN CONTENT -->
<div id="layoutSidenav_content">
    <main>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-5">
            <!-- Custom page header alternative example-->
            <div class="d-flex justify-content-between align-items-sm-center flex-column flex-sm-row mb-4">
                <div class="me-4 mb-3 mb-sm-0">
                    <h1 class="mb-0">Dashboard</h1>
                    <div class="small">
                        <span class="fw-500 text-primary">Friday</span>
                        &middot; September 20, 2021 &middot; 12:16 PM
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <!-- Dashboard info widget 1-->
                    <div class="card border-start-lg border-start-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-primary mb-1">Earnings (daily)</div>
                                    <div class="h5">$4,390</div>
                                    <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-up"></i>
                                        12%
                                    </div>
                                </div>
                                <div class="ms-2"><i class="fas fa-dollar-sign fa-2x text-gray-200"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <!-- Dashboard info widget 1-->
                    <div class="card border-start-lg border-start-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-primary mb-1">Earnings (weekly)</div>
                                    <div class="h5">$4,390</div>
                                    <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-up"></i>
                                        12%
                                    </div>
                                </div>
                                <div class="ms-2"><i class="fas fa-dollar-sign fa-2x text-gray-200"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <!-- Dashboard info widget 1-->
                    <div class="card border-start-lg border-start-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <div class="small fw-bold text-primary mb-1">Earnings (monthly)</div>
                                    <div class="h5">$4,390</div>
                                    <div class="text-xs fw-bold text-success d-inline-flex align-items-center">
                                        <i class="me-1" data-feather="trending-up"></i>
                                        12%
                                    </div>
                                </div>
                                <div class="ms-2"><i class="fas fa-dollar-sign fa-2x text-gray-200"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TABLE  -->
                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card border-start-lg border-start-danger h-100">
                        <div class="card-body">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-xl-auto ">
                                    <div class="large fw-bold text-danger mb-3">Sales Per Branch</div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-2">
                                    <select id="rowsPerPageSelect" class="form-select">
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="offset-7 col-md-3">
                                    <div class="mb-3 position-relative">
                                        <input type="text" id="myInput" class="form-control" onkeyup="searchTable(); toggleClearButton();" placeholder="Search for any data..">
                                        <button type="button" id="clearButton" class="btn-close btn-sm position-absolute top-50 end-0 translate-middle-y me-2" aria-label="Clear" onclick="document.getElementById('myInput').value=''; searchTable(); toggleClearButton();" style="display: none;"></button>
                                    </div>
                                </div>
                            </div>

                            <div style="overflow-x: auto;">
                                <table id="myTable" class="table table-responsive table-bordered table-striped">
                                    <thead>
                                        <tr class="header">
                                            <th style="width: 5%;">#</th>
                                            <th style="width: 10%;">Kode</th>
                                            <th>Nama Cabang</th>
                                            <th style="width: 20%;">Sales Per Day</th>
                                            <th style="width: 15%;">Products Sold</th>
                                            <th style="width: 5%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>OTO-001</td>
                                            <td>OTO Pusat</td>
                                            <td>Rp. 2.500.000</td>
                                            <td>10 Pcs</td>
                                            <td>
                                                <a href="sales_branch_detail.php" class="btn btn-primary btn-sm">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div id="dataInfo"></div>
                                </div>
                                <div class="col-md-6 align-items-end">
                                    <nav id="rfPagination"></nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TABLE  -->


                <!-- TABLE  -->
                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card border-start-lg border-start-warning h-100">
                        <div class="card-body">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-xl-auto ">
                                    <div class="large fw-bold text-warning mb-3">Stock Per Branch</div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-2">
                                    <select id="rowsPerPageSelect" class="form-select">
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="offset-7 col-md-3">
                                    <div class="mb-3 position-relative">
                                        <input type="text" id="myInput" class="form-control" onkeyup="searchTable(); toggleClearButton();" placeholder="Search for any data..">
                                        <button type="button" id="clearButton" class="btn-close btn-sm position-absolute top-50 end-0 translate-middle-y me-2" aria-label="Clear" onclick="document.getElementById('myInput').value=''; searchTable(); toggleClearButton();" style="display: none;"></button>
                                    </div>
                                </div>
                            </div>

                            <div style="overflow-x: auto;">
                                <table id="myTable" class="table table-responsive table-bordered table-striped">
                                    <thead>
                                        <tr class="header">
                                            <th style="width: 5%;">#</th>
                                            <th style="width: 10%;">Kode</th>
                                            <th>Nama Cabang</th>
                                            <th style="width: 40%;">Alamat</th>
                                            <th style="width: 15%;">Total Qty</th>
                                            <th style="width: 5%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>OTO-001</td>
                                            <td>OTO Pusat</td>
                                            <td>Jl. Raya Kelapa Dua, Kelapa Dua, Tanggerang</td>
                                            <td>90 Pcs</td>
                                            <td>
                                                <a href="stock_branch_detail.php" class="btn btn-primary btn-sm">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div id="dataInfo"></div>
                                </div>
                                <div class="col-md-6 align-items-end">
                                    <nav id="rfPagination"></nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TABLE  -->

                <!-- TABLE  -->
                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card border-start-lg border-start-info h-100">
                        <div class="card-body">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-xl-auto ">
                                    <div class="large fw-bold text-info mb-3">Products Leaderboard (monthly)</div>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-md-2">
                                    <select id="rowsPerPageSelect" class="form-select">
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="offset-7 col-md-3">
                                    <div class="mb-3 position-relative">
                                        <input type="text" id="myInput" class="form-control" onkeyup="searchTable(); toggleClearButton();" placeholder="Search for any data..">
                                        <button type="button" id="clearButton" class="btn-close btn-sm position-absolute top-50 end-0 translate-middle-y me-2" aria-label="Clear" onclick="document.getElementById('myInput').value=''; searchTable(); toggleClearButton();" style="display: none;"></button>
                                    </div>
                                </div>
                            </div>

                            <div style="overflow-x: auto;">
                                <table id="myTable" class="table table-responsive table-bordered table-striped">
                                    <thead>
                                        <tr class="header">
                                            <th style="width: 5%;">#</th>
                                            <th style="width: 10%;">SKU</th>
                                            <th style="width: 50%;">Description</th>
                                            <th style="width: 15%;">Qty Sold</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>P-001</td>
                                            <td>Product 1</td>
                                            <td>30 Pcs</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div id="dataInfo"></div>
                                </div>
                                <div class="col-md-6 align-items-end">
                                    <nav id="rfPagination"></nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TABLE  -->
            </div>
        </div>
    </main>
</div>
