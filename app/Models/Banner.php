<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Banner extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    public static function get_colums()
    {
        return Schema::getColumnListing('banners');
    }
}