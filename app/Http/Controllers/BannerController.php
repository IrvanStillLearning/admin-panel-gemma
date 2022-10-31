<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Datatables;
use App\Models\User;
use App\Models\banner;
use PDO;

class BannerController extends Controller
{
    public function index(){
        $data['banner'] = Banner::all();
        return view('admin.data-banner', $data);
    }

    public function detail($id){
        return Banner::find($id);
    }

    public function datatables(){
        $data = Banner::with('user')->orderBy('id','desc')->get();
        return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }

    public function delete($id){
        Banner::where('id', $id)->delete();

        return [
            'status' => 200,
            'message' => 'Data berhasil didelete'
        ];
    }

    public function store_update(request $request){
        $validator = Validator::make($request->all(), [
        'judul' => 'required',
        'desc' => 'required',
        'status' => 'required',
        'upload_image' => 'nullable|mimes:jpg,png,jpeg,webp|max:2048',
    ]);

    if($validator->fails()) {
        return [
            'status' => 300,
            'message' => $validator->errors()->first()
        ];
    }

    $request->request->add(['user_id' => 1]);

    if(!empty($request->file('upload_image'))){
        $file = $request->file('upload_image');

        $place_image = 'berkas/master-banner/';
        $name_image =  md5(time()."_".$file->getClientOriginalName()).".".$file->getClientOriginalExtension();

        $file->move($place_image, $name_image);
        $database_file = $place_image . $name_image;

        $request->request->add(['image' => $database_file]);
    }

    Banner::updateOrCreate(['id' => $request->id],$request->all() );

    return [
        'status' => 200, // SUCCESS 
        'message' => 'Data berhasil disimpan'
    ];        
    }
}
