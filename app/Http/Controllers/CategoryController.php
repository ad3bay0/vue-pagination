<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){

        $data = Category::paginate(10);

        return response()->json($data);
    }
}
