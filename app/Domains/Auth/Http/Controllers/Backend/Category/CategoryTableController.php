<?php
namespace App\Domains\Auth\Http\Controllers\Backend\Category;

use App\Domains\Auth\Models\Category;
use Illuminate\Routing\Controller;
use Yajra\DataTables\Facades\DataTables;

class CategoryTableController extends Controller{
    public function __invoke()
    {
        $query = Category::select('*');
        return DataTables::of($query)
        ->make(true);
    }
}

