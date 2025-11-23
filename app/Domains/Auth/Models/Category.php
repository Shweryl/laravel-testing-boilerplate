<?php
namespace App\Domains\Auth\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    protected $fillable = [
        'name',
        'description',
    ];

    protected $table = 'categories';
}
