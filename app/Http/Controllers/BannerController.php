<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\banner;

class BannerController extends Controller
{
    public function index(){        
        $data['banner'] = Banner::with('user')->latest()->filter()->get();

        return view('admin.data-banner', $data);
    }
}
