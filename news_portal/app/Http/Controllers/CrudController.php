<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
use App\Image;
use App\Http\Controllers\PostController;
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

        return redirect('home/crud')->with($page_title1 = 'Товар добавлен');
        /*___________________________________________________________*/
        /*another methods for create products*/
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
        return redirect('/home/crud');

    }

}
