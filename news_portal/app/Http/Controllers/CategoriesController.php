<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use DB;


class CategoriesController extends Controller
{


    public function index()
    {
        $posts = DB::table('posts')
            ->orderBy('created_at')
            ->limit(25)
            ->get();
        $categories = Category::all();
        return view('layouts.main', compact('categories'), compact('posts'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        if($category) {
            $posts = DB::table('posts')
                ->where('category_id', $category->id)
                ->orderBy('created_at')
                ->Paginate(5);
            return view('layouts.category', compact('category'), compact('posts'));
        }
        return 'Категория не найдена';
    }
}
