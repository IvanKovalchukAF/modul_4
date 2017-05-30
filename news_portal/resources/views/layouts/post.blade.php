@extends('layouts.body')

@section('content')
    <div class="container-fluid text-center">
        <div class="row content">
            {{--______________________Left column for advertising_____________________--}}
            @include('layouts.left_advertising')

            {{--_________________________Center column for articles_______________________--}}
            <div class="col-sm-8 text-left">
                <div class="row">
                    <h1>{{$post->title}}</h1>
                    <p>{{substr(($post->body), 0, 200)}} ...</p>
                    <h4><a href="#">чить дальше</a></h4>
                </div>
            </div>

            {{--_______________________Right column for advertising____________________--}}
            @include('layouts.right_advertising')
        </div>
    </div>
@endsection