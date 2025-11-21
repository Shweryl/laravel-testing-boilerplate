<?php
namespace App\Domains\Auth\Models;

class Category extends \Illuminate\Database\Eloquent\Model{
    protected $fillable = [
        'name',
        'description',
    ];

    protected $table = 'categories';
}
