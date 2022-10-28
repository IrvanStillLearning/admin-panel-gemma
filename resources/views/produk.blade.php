@extends('partial.app');
@section('title')
Produk
@endsection
@section('content')
    <section class="container-fluid section">
        <div class="row">
            <div class="col-md-8" style="height: 500px; overflow-y: scroll">
                <div class="row mr-1">
                    @for ($i = 0; $i < 8; $i++)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="product-image">
                                    <img alt="image" src="assets/img/example-image.jpg" class="img-fluid">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5>Nama Produk</h5>
                                <div class="mb-2 text-muted">Harga Produk</div>
                                <button type="button" class="btn btn-primary" style="width: 100%">Add to card</button>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-4" style="height: 400px; overflow-y: scroll">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-shopping-cart"></i> Keranjang Belanja</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr style="font-size: 14px">
                                    <th>Qty</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                    <th>Delete</th>
                                </tr>
                                <tr style="font-size: 12px">
                                    <td>2</td>
                                    <td>Nama Produk</td>
                                    <td>100.000</td>
                                    <td>200.000</td>
                                    <td style="text-align: center;"><i class="fas fa-times" style="color: red"></i></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8 no-padding">
                        <div class="text-center d-flex align-items-center justify-content-center text-light bg-warning mt-4
                        " style="position: relative; height: 32px;">Total Harga</div>
                    </div>
                    <div class="col-md-2 no-padding">
                        <div class="text-center d-flex align-items-center justify-content-center text-light bg-success mt-4
                        " style="position: relative; height: 32px;"><i class="fas fa-money-check-alt mr-1"></i><span>Bayar</span></div>
                    </div>
                    <div class="col-md-2 no-padding">
                        <div class="text-center d-flex align-items-center justify-content-center text-light bg-danger mt-4
                        " style="position: relative; height: 32px;"><i class="fas fa-ban mr-1"></i><span>Tunggu</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection