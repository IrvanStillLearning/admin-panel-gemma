@extends('partial.app')
@section('title','Master Banner')

@section('content')

<div class="section-body" style="overflow-y: hidden!important; position: relative;">
    @if($errors->any())
    {!! implode('', $errors->all(' <div class="col-sm-12 p-0">
        <div class="alert fade toast-notification alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
            role="alert" data-brk-library="component__alert">
            <button type="button" class="close font__size-18" data-dismiss="alert">
                <span aria-hidden="true">
                    <i class="fa fa-times danger "></i>
                </span>
                <span class="sr-only">Close</span>
            </button>
            <i class="start-icon far fa-times-circle faa-pulse animated"></i>
            <strong class="font__weight-semibold">Error...!</strong> :message
            <div class="progress progress_error"></div>
        </div>
    </div>')) !!}
    @endif

    @if(session()->has('success'))
    <div class="col-sm-12 p-0">
        <div class="alert fade toast-notification alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
            <button type="button" class="close font__size-18" data-dismiss="alert">
                <span aria-hidden="true"><a>
                        <i class="fa fa-times greencross"></i>
                    </a></span>
                <span class="sr-only">Close</span>
            </button>
            <i class="start-icon far fa-check-circle faa-tada animated"></i>
            <strong class="font__weight-semibold">Well done!</strong> {{ session('success') }}
            <div class="progress progress_success"></div>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Banner</h4>
                    <div class="card-header-action">
                        <button type="button" style="margin-right: 10px" class="btn btn-warning" onclick="add();"><i
                                class="fa fa-plus mr-1"></i>
                            Tambah Banner</button>
                    </div>
                    <form action="/banner">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" id="search"
                                value="{{ request('search') }}" placeholder="Search">
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
                                            <th>Image</th>
                                            <th>Judul</th>
                                            <th>Desc</th>
                                            <th>Status</th>
                                            <th class="text-center">Uploaded By</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($banner as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->image }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{!! $item->desc !!}</td>
                                            <td>
                                                <div
                                                    class='badge @if($item->status == true) badge-success @else badge-danger @endif'>
                                                    @if($item->status == 1) active @else non active @endif </div>
                                            </td>
                                            <td class="text-center">{{ $item->user->name }}</td>
                                            <td>
                                                <button class="btn btn-info btn-sm" onclick="edit({{ $item->id }})">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <form action="/banner/delete/{{ $item->id }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-sm btn-danger" onclick="return confirm('yakin ingin menghapus data...?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    {{ $banner->links('pagination::bootstrap-4') }}
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
            <form id="form_upload" action="/banner/upload" method="POST" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Banner</label>
                                <input type="file" name="image" id="image" accept="image/png, image/jpg, image/jpeg"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Judul Banner</label>
                                <input type="text" name="judul" id="judul" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Deskripsi Banner</label>
                                <textarea class="summernote" name="desc" id="desc"
                                    style="width: 100%; height: 154px; display: flex; top: 31px;"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Status Banner</label>
                                <div class="card-header-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="btn btn-success dropdown-toggle"
                                        id="status_now">active</a>
                                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <li class="dropdown-title">Select Status</li>
                                        <option class="dropdown-item status_list" value="non_active">non active</option>
                                        <option class="dropdown-item status_list" value="active">active</option>
                                        <input type="text" value="1" hidden name="status" id="status_input">
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
    function add() {
        $("#modal").modal('show');
        $(".modal-title").text('Tambah Banner Produk');
    }

    function edit($url) {
        save_method = 'edit';
        $("#modal").modal('show');
        $('#modal_loading').modal('show');
        $url = 'banner/edit/' + $url;
        console.log($url)
        $(".modal-title").text('Edit Banner Produk');
        $.ajax({
          url : $url,
          type: "GET",
          dataType: "JSON",
          success: function(response){
                console.log(response);
                Object.keys(response).forEach(function (key) {
                var elem_name = $('[name=' + key + ']');
                if (elem_name.hasClass('selectric')) {
                   elem_name.val(response[key]).change().selectric('refresh');
                }else if(elem_name.hasClass('select2')){
                   elem_name.select2("trigger", "select", { data: { id: response[key] } });
                }else if(elem_name.hasClass('selectgroup-input')){
                   $("input[name="+key+"][value=" + response[key] + "]").prop('checked', true);
                }else if(elem_name.hasClass('my-ckeditor')){
                   CKEDITOR.instances[key].setData(response[key]);
                }else{
                   elem_name.val(response[key]);
                }
             });
          },error: function (jqXHR, textStatus, errorThrown){
            setTimeout(() => {
                $('#modal_loading').modal('hide');
            }, 500);
             console.log('Error get data');
          }
       });
    }

    $('.status_list').on("click", function () {
        if ($(this).val() == 'non_active') {
            $('#status_now').text("non active");
            $('#status_now').addClass("btn-danger");
            $('#status_now').removeClass("btn-success");
            $('#status_input').val('0')
        } else {
            $('#status_now').text("active");
            $('#status_now').addClass("btn-success");
            $('#status_now').removeClass("btn-danger");
            $('#status_input').val('1')
        }
    })

    ClassicEditor
        .create(document.querySelector('#desc'))
        .catch(error => {
            console.error(error);
        });

</script>
@endsection
