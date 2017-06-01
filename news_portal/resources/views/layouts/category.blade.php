@extends('layouts.body')

@section('content')
    <div class="container-fluid text-center">
        <div class="row content">
            {{--______________________Left column for advertising_____________________--}}
            @include('layouts.advertising.left')

            {{--_________________________Center column for articles_______________________--}}
            <div class="col-sm-8 text-left">
                <div class="row">
                    <h1>{{$category->name}}</h1>
                    @foreach($posts as $post)
                        @if($category->id == $post->category_id)
                            <hr>
                            <h4><a href="/post/{{$post->id}}">{{$post->title}}</a></h4>
                            {{--<h5>{{$post->intro}}</h5>--}}
                        @endif
                    @endforeach
                     {{$posts->render()}}
                </div>
            </div>

            {{--_______________________Right column for advertising____________________--}}
            @include('layouts.advertising.right')
        </div>
    </div>
@endsection

