<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banners';

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query){
        if(request('search')) {
            if(request('search') == 'active'){return $query->where('status', 'like', 1);};
            if(request('search') == 'non active'){return $query->where('status', 'like', 0);};
            return $query->where('judul', 'like', '%'.request("search").'%')
                   ->orWhere('image', 'like', '%'.request('search').'%')
                   ->orWhereHas('user', function($data){
                        $data->where('name', 'like', '%'.request("search").'%');
                   });
        }
    }
}
