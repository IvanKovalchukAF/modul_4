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
            ->orderBy('updated_at','DESC')
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
                ->orderBy('updated_at','DESC')
                ->Paginate(5);
            return view('layouts.category', compact('category'), compact('posts'));
        }
        return 'Даная категория не существует';
    }
}
