@extends('partial.app');
@section('title')
Kas
@endsection

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header shadow-bottom">
            <ul class="nav nav-pills" id="myTab3" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home3" aria-selected="true">Pelanggan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile3" aria-selected="false">Supplier</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="karyawan-tab3" data-toggle="tab" href="#karyawan3" role="tab" aria-controls="karyawan3" aria-selected="false">Karyawan</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="top-body row">
                <div class="col-md-6 col-sm-3">
                    <h5>Total Transaksi</h5>
                </div>
                <div class="col-md-6 col-sm-9 d-flex justify-content-end">
                    <p style="white-space: nowrap"><i class="fas fa-cogs mx-1"></i><strong>Pengaturan Grup</strong></p>
                    <i class="fas fa-stream mx-5" style="font-size: 1.5rem"></i>
                </div>
            </div>
            <div class="tab-content" id="myTabContent2">
                <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="text-primary">Piutang Belum Bayar</h4>
                                    <div class="card-header-action">
                                    <p href="#" class="btn btn-primary">
                                        1
                                    </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5>Rp. 5.000.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h4 class="text-warning" style="white-space: nowrap">Piutang Jatuh Tempo</h4>
                                    <div class="card-header-action">
                                    <p href="#" class="btn btn-warning">
                                        2
                                    </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 style="white-space: nowrap">Rp. 15.000.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h4 class="text-danger">Kredit Memo</h4>
                                    <div class="card-header-action">
                                    <p href="#" class="btn btn-danger">
                                        0
                                    </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5>Rp. 0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center">
                            <h5><i class="fas fa-users"></i> Daftar Pelanggan</h5>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <button type="button" class="btn btn-success">Import</button>
                            <button type="button" class="btn btn-success">Ekspor</button>
                        </div>
                        <div class="col-md-4">
                            <div class="search-element d-flex justify-content-center">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                <div class="search-backdrop"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>
                                                    <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Nama</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No Handphone</th>
                                                <th>Saldo</th>
                                            </tr>
                                            <tr>
                                                <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>Nama Pelanggan</td>
                                                <td class="align-middle">
                                                    Nama Perusahaan
                                                </td>
                                                <td>
                                                    Jalan Tropodo No. 5 
                                                </td>
                                                <td>2018-01-20</td>
                                                <td><div class="badge badge-success">08517220****</div></td>
                                                <td>Rp. 5.000.000</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="text-primary">Piutang Belum Bayar</h4>
                                    <div class="card-header-action">
                                    <p href="#" class="btn btn-primary">
                                        1
                                    </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5>Rp. 5.000.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h4 class="text-warning" style="white-space: nowrap">Piutang Jatuh Tempo</h4>
                                    <div class="card-header-action">
                                    <p href="#" class="btn btn-warning">
                                        2
                                    </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 style="white-space: nowrap">Rp. 15.000.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h4 class="text-danger">Kredit Memo</h4>
                                    <div class="card-header-action">
                                    <p href="#" class="btn btn-danger">
                                        0
                                    </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5>Rp. 0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center">
                            <h5><i class="fas fa-users"></i> Daftar Supplier</h5>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <button type="button" class="btn btn-success">Import</button>
                            <button type="button" class="btn btn-success">Ekspor</button>
                        </div>
                        <div class="col-md-4">
                            <div class="search-element d-flex justify-content-center">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                <div class="search-backdrop"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>
                                                    <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Nama</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No Handphone</th>
                                                <th>Saldo</th>
                                            </tr>
                                            <tr>
                                                <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>Nama Pelanggan</td>
                                                <td class="align-middle">
                                                    Nama Perusahaan
                                                </td>
                                                <td>
                                                    Jalan Tropodo No. 5 
                                                </td>
                                                <td>2018-01-20</td>
                                                <td><div class="badge badge-success">08517220****</div></td>
                                                <td>Rp. 5.000.000</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="karyawan3" role="tabpanel" aria-labelledby="karyawan-tab3">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="text-primary">Piutang Belum Bayar</h4>
                                    <div class="card-header-action">
                                    <p href="#" class="btn btn-primary">
                                        1
                                    </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5>Rp. 5.000.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h4 class="text-warning" style="white-space: nowrap">Piutang Jatuh Tempo</h4>
                                    <div class="card-header-action">
                                    <p href="#" class="btn btn-warning">
                                        2
                                    </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 style="white-space: nowrap">Rp. 15.000.000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h4 class="text-danger">Kredit Memo</h4>
                                    <div class="card-header-action">
                                    <p href="#" class="btn btn-danger">
                                        0
                                    </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5>Rp. 0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center">
                            <h5><i class="fas fa-users"></i> Daftar Karyawan</h5>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <button type="button" class="btn btn-success">Import</button>
                            <button type="button" class="btn btn-success">Ekspor</button>
                        </div>
                        <div class="col-md-4">
                            <div class="search-element d-flex justify-content-center">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                <div class="search-backdrop"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>
                                                    <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Nama</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No Handphone</th>
                                                <th>Saldo</th>
                                            </tr>
                                            <tr>
                                                <td class="p-0 text-center">
                                                    <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>Nama Pelanggan</td>
                                                <td class="align-middle">
                                                    Nama Perusahaan
                                                </td>
                                                <td>
                                                    Jalan Tropodo No. 5 
                                                </td>
                                                <td>2018-01-20</td>
                                                <td><div class="badge badge-success">08517220****</div></td>
                                                <td>Rp. 5.000.000</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection