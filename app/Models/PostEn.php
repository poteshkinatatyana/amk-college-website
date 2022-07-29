<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostEn extends Model
{
    use HasFactory;

    protected $table = 'post_ens';

    public function category()
    {
        return $this->belongsTo('App\Models\CategoryEn', 'cat_id');
    }


}
