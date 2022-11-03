<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\banner;

class BannerController extends Controller
{
    public function index(){        
        $data['banner'] = Banner::with('user')->latest()->filter()->paginate(5)->withQueryString();


        return view('admin.data-banner', $data);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'image' => 'required|unique:banners,image',
            'judul' => 'required|max:50',
            'desc' => 'max:255',
            'status' => 'required'
        ]);
        
        $validateData['user_id'] = 1;
        Banner::create($validateData);
        
        return redirect('/banner')->with('success', 'Banner Berhasil Ditambahkan');
    }

    public function destroy($id){
        Banner::destroy($id);
        return redirect('/banner')->with('success', 'Banner Berhasil Dihapus');
    }
}
