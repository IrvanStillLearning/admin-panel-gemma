@extends('partial.app')
@section('title','Master Banner')

@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Banner</h4>
                    <div class="card-header-action">
                        <button type="button" style="margin-right: 10px" class="btn btn-warning" onclick="add();"><i class="fa fa-plus mr-1"></i>
                            Tambah Banner</button>
                    </div>
                    <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                </div>

                <div class="row mx-2">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <tr class="bg-success text-light">
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Judul</th>
                                            <th>Desc</th>
                                            <th>Status</th>
                                            <th class="text-center">Uploaded By</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($banner as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->desc }}</td>
                                            <td>
                                                <div class='badge @if($item->status == true) badge-success @else badge-danger @endif'>
                                                @if($item->status == 1) active @else non active @endif </div>
                                            </td>
                                            <td class="text-center">{{ $item->user->name }}</td>
                                            <td>
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i
                                                    class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" role="dialog" id="modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header br">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_upload" action="/admin/data-banner/upload" method="POST" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Banner</label>
                                <input type="file" name="upload_image" id="upload_image" accept="image/png, image/jpg, image/jpeg" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Judul Banner</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Deskripsi Banner</label>
                                <textarea class="summernote" name="deskripsi" id="deskripsi"
                                    style="width: 100%; height: 154px; display: flex; top: 31px;"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Status Banner</label>
                                <div class="card-header-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="btn btn-success dropdown-toggle" id="status_now">active</a>                                    
                                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <li class="dropdown-title">Select Status</li>
                                    <li><a class="dropdown-item status_list" status="non_active">non active</a></li>
                                    <li><a class="dropdown-item status_list" status="active">active</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function add(){
        $("#modal").modal('show');
        $(".modal-title").text('Tambah Banner Produk');
    }

    $('.status_list').on("click", function(){
        if($(this).attr('status') == 'non_active'){
            $('#status_now').text("non active");
            $('#status_now').addClass("btn-danger");
            $('#status_now').removeClass("btn-success");
        } else {
            $('#status_now').text("active");
            $('#status_now').addClass("btn-success");
            $('#status_now').removeClass("btn-danger");
        }
    })

    ClassicEditor
    .create( document.querySelector( '#deskripsi' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection
