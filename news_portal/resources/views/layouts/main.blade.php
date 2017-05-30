@extends('layouts.body')

@section('content')
    <div class="container-fluid text-center">
        <div class="row content">
{{--______________________Left column for advertising_____________________--}}
            @include('layouts.left_advertising')

{{--_________________________Center column for articles_______________________--}}
            <div class="col-sm-8 text-left">
                <div class="row">
                    @foreach($categories as $category)
                        <h2><a href="category/{{$category->id}}">{{$category->name}}</a></h2>
                            @foreach($posts as $post)
                                @if($category->id == $post->category_id)
                                    <h4>{{$post->title}}</h4>
                                @endif
                            @endforeach
                    @endforeach
                </div>
            </div>

{{--_______________________Right column for advertising____________________--}}
            @include('layouts.right_advertising')
        </div>
    </div>
@endsection