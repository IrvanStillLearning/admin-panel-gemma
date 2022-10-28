<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\banner;

class BannerController extends Controller
{
    public function index(){
        $data['banner'] = Banner::all();
        return view('admin.data-banner', $data);
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'deskripsi' => 'required',
            'status' => 'required'
        ]);

        return 123;
    }
}
