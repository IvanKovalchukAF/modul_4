<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Image;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Input;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-lte.crud');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $postImg = Image::where('post_id', $id)->get();
        return view('admin-lte.edit', ['post' => $post, 'images' => $postImg]);
    }

    public function create()
    {
        return view('admin-lte.create');
    }

    /*saving posts to DB*/
    public function store()
    {
        //Check from intruders
        $post = new Post();
/*        dd(request('title'));*/
        $post->title = request('title');
        $post->category_id = request('category_id');
        $post->user_id = request('user_id');
        $post->intro = request('intro');
        $post->body = request('body');


        //for choice only few things, not all,
        //we can use next method request like array
        //(\request(['price', 'name']));
        //
        $post->save();

        if(Input::hasfile('file')){
            $file = Input::file('file');
            $file->move('media/images/', $file->getClientOriginalName());

            $postImg = new Image();

            $postImg->post_id = $post->id;
            $postImg->path_image = '/media/images/' . $file->getClientOriginalName();

            $postImg->save();
        }

        return redirect('home/crud');
        /*___________________________________________________________*/
        /*another methods for create*/
        /*_______________________________________________________*/
        /*$this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'latin_url' => 'required',
        ]);

        Goods::create(
           request(['name', 'description', 'category_id', 'price', 'latin_url'])
        );*/

        /*$product = new Goods();

        $product->name = request('name');
        $product->description = request('description');
        $product->category_id = request('category_id');
        $product->price = request('price');
        $product->latin_url = request('latin_url');
        //for choice only few things, not all,
        //we can use next method request like array
        //(\request(['price', 'name']));
        //
        $product->save();*/

        /*Goods::create([
           'name' =>request('name'),
           'description' =>request('description'),
           'category_id' =>request('category_id'),
           'price' =>request('price'),
           'latin_url' =>request('latin_url'),
        ]);*/
    }

    public function update($id)
    {

        /*update products*/
        $post = Post::find($id);//search product by id
        $this->validate(request(), [//Where We transmit request
            'title' => 'required',      //<-validation rules
            'category_id' => 'required',//All fields are required
            'user_id' => 'required',
            'intro' => 'required',
            'body' => 'required',
        ]);

        $post->update(request(
            ['title', 'category_id', 'user_id', 'intro', 'body']
        ));
        $post->title = request()->title;


        if(Input::hasfile('file')){ // add image, if has it
            $file = Input::file('file');
            $file->move('media/images/', $file->getClientOriginalName());

            $postImage = new Image();

            $postImage->post_id = $id;
            $postImage->path_image = '/media/images/' . $file->getClientOriginalName();

            $postImage->save();
        }


        return redirect('/home/crud');

    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return back();
    }

    public function showPostsById($id)
    {
        $category = Category::find($id);
        if($category) {
            $posts = DB::table('posts')
                ->where('category_id', $category->id)
                ->orderBy('created_at')
                ->Paginate(5);
            return view('admin-lte.posts', compact('category'), compact('posts'));
        }
        return 'Даная категория не существует';
    }
    /*___________create category___________*/
    public function createCategory()
    {
        $category = new Category();
        $category->name = request('name');
        $category->save();

        return view('admin-lte.category.categories');

    }
    /*___________edit category___________*/
    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('admin-lte.category.editCategory', ['category' => $category]);
    }
    /*___________update category___________*/
    public function updateCategory($id)
    {
        $category = Category::find($id);

        $category->name = request()->name;
        $category->save();

        return redirect('/crud/categories');
    }
/*_________delete category_________*/
    public function destroyCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back();
    }


}
