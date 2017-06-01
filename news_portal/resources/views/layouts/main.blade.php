@extends('layouts.body')

@section('content')
    <div class="container-fluid text-center">
        <div class="row content">
{{--______________________Left column for advertising_____________________--}}
            @include('layouts.advertising.left')

{{--_________________________Center column for articles_______________________--}}
            <div class="col-sm-8 text-left">
                <div class="row">
                    @foreach($categories as $category)
                        <?php $count = 1; ?>
                        <h2><a href="category/{{$category->id}}">{{$category->name}}</a></h2>
                            @foreach($posts as $post)
                                @if($count > 5)
                                    @break
                                @endif
                                @if($category->id == $post->category_id)
                                    <h4>{{$post->title}}</h4>
                                    <?php $count++; ?>
                                @endif
                            @endforeach
                    @endforeach
                </div>
            </div>

{{--_______________________Right column for advertising____________________--}}
            @include('layouts.advertising.right')
        </div>
    </div>
@endsection