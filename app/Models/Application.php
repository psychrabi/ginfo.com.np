<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['app_name', 'app_path', 'app_parameter', 'app_icon', 'app_poster', 'app_category'];
}
