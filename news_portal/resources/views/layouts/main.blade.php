@extends('layouts.body')
@section('content')
    <div class="container-fluid text-center">
        <div class="row content">
{{--______________________Left column for advertising_____________________--}}
            @include('layouts.left_advertising')

{{--_________________________Center column for articles_______________________--}}
            @include('layouts.article')

{{--_______________________Right column for advertising____________________--}}
            @include('layouts.right_advertising')
        </div>
    </div>
@endsection