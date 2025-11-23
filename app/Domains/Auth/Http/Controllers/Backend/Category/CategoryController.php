<?php
namespace App\Domains\Auth\Http\Controllers\Backend\Category;

use Illuminate\Routing\Controller;

class CategoryController extends Controller{
    public function index(){
        return view('backend.auth.category.index');
    }
}
