@extends('admin-lte.admin_template')

@section('content')

<div class="container" {{$page_title = 'Добавление товаров'}}>
    <form class="form-horizontal" role="form" action="/home/crud" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-8">
                <label class="col-lg-3 control-label">Картинка: </label>
                <br>
                <br>
                <input type="file" name="file" id="file" value="Добавить картинку товара">
            </div>
            <br>
        </div>
            <!-- create form column -->
        <div class="col-md-9 personal-info">
            <div class="form-group">
                <label class="col-lg-3 control-label">Название: </label>
                <div class="col-lg-8">
                    <input id="note2" class="form-control" name="title" type="text" value="{{--{{$good->name}}--}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Номер категории: </label>
                <div class="col-lg-8">
                    <input id="note2" class="form-control" name="category_id"  type="text" value="{{--{{$good->price}}--}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Номер пользователя: </label>
                <div class="col-lg-8">
                    <input id="note2" class="form-control" name="user_id" type="number" value="{{1}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Сокращенный текст: </label>
                <div class="col-lg-8">
                    <input id="note2" class="form-control" name="intro" type="text" value="{{--{{$good->price}}--}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Текст статьи: </label>
                <div class="col-md-8">
                    <textarea id="note" name="body">{{--{{$good->description}}--}}</textarea>
                    <style>
                        textarea#note {
                            width:100%;
                            display:block;
                            max-width:100%;
                            line-height:1.5;
                            padding:15px 15px 30px;
                            border-radius:3px;
                            border:1px solid #F7E98D;
                            font:15px Tahoma, cursive;
                            transition:box-shadow 0.5s ease;
                            box-shadow:0 4px 6px rgba(0,0,0,0.1);
                            background:linear-gradient(#F9EFAF, #F7E98D);
                            background:-o-linear-gradient(#F9EFAF, #F7E98D);
                            background:-ms-linear-gradient(#F9EFAF, #F7E98D);
                            background:-moz-linear-gradient(#F9EFAF, #F7E98D);
                            background:-webkit-linear-gradient(#F9EFAF, #F7E98D);
                        }
                        input#note2 {
                            width:100%;
                            display:block;
                            max-width:100%;
                            line-height:1.5;
                            padding:15px 15px 30px;
                            border-radius:3px;
                            border:1px solid #F7E98D;
                            font:15px Tahoma, cursive;
                            transition:box-shadow 0.5s ease;
                            box-shadow:0 4px 6px rgba(0,0,0,0.1);
                            background:linear-gradient(#F9EFAF, #F7E98D);
                            background:-o-linear-gradient(#F9EFAF, #F7E98D);
                            background:-ms-linear-gradient(#F9EFAF, #F7E98D);
                            background:-moz-linear-gradient(#F9EFAF, #F7E98D);
                            background:-webkit-linear-gradient(#F9EFAF, #F7E98D);
                        }
                    </style>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                    <input type="submit" class="btn btn-primary" value="Сохранить">
                    {{--<input type="reset" class="btn btn-default" value="Отменить">--}}
                </div>
            </div>
        </div>
        @include('admin-lte.errors')
    </form>
</div>

@endsection