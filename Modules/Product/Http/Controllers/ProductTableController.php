<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Yajra\DataTables\Facades\DataTables;

class ProductTableController extends Controller
{

    public function index()
    {
        $query = Product::select('*');
        return DataTables::of($query)
            ->addColumn('action', function ($product) {
                return $product->action_button;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
