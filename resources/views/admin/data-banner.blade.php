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
                            <div class="card-body">
                                <div class="table-responsive" style="overflow: unset!important">
                                    <table class="table table-striped table-md" id="tb">
                                        <thead>
                                            <tr class="bg-success text-light">
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Judul</th>
                                                <th>Desc</th>
                                                <th>Status</th>
                                                <th class="text-center">Uploaded By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
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
            <form id="form_upload" action="/banner/store-update" method="POST" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <input type="text" name="id" id="id">
                            <input type="text" name="type" id="type">
                            <div class="form-group">
                                <label>Banner</label>
                                <input type="file" name="upload_image" id="upload_image" accept="image/png, image/jpg, image/jpeg" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Judul Banner</label>
                                <input type="text" name="judul" id="judul" class="form-control required-field">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Deskripsi Banner</label>
                                <textarea class="summernote my-ckeditor" name="desc" id="desc"
                                    style="width: 100%; height: 154px; display: flex; top: 31px;"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Status Banner</label>
                                <select name="status" id="status" class="form-control selectric required-field">
                                    <option value="1">active</option>
                                    <option value="0">non-active</option>
                                </select>
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

    var tb = $('#tb').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/banner/datatables',
            type: 'GET'
        },
        columnDefs: [
            { className: 'text-center', targets: [1, 5, 6] },
        ],
        columns: [
            { data: 'DT_RowIndex',searchable: false, orderable: false},
            { data: 'image'},
            { data: 'judul'},
            { data: 'desc'},
            { data: 'status'},
            { data: 'user.name'},
            { data: 'user_id'},
 
        ],
        rowCallback : function(row, data){
            if(data.status == 1){
                $('td:eq(4)', row).html(`<span class="badge bg-success text-light">Active</span>`);
            } else{
                $('td:eq(4)', row).html(`<span class="badge bg-danger text-light">Non Active</span>`);
            }

            var url_edit   = "/banner/detail/" + data.id;
            var url_delete = "/banner/delete/" + data.id;
            $('td:eq(6)', row).html(`
                <button class="btn btn-info btn-sm mr-1" onclick="edit('${url_edit}')"><i class="fa fa-edit"></i></button>
                <button class="btn btn-danger btn-sm" onclick="delete_action('${url_delete}','${data.judul}')"><i class="fa fa-trash"> </i></button>
            `);
           
        }
    });

    function add(){
        $("#modal").modal('show');
        $("#form_upload")[0].reset();
        $('#deskripsi').summernote('code', '');
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
    .create( document.querySelector( '#desc' ) )
    .catch( error => {
        console.error( error );
    } );

    function edit(url){
        edit_action(url, 'Edit Banner');
        $("#type").val('update');
    }

</script>
@endsection
