@extends('admin-lte.admin_template')

@section('content')
    <div class="container" {{$page_title = 'Редактирование товара:'}}>
        <div class="row">
            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <br>
                <br>
                {{--Edit form--}}
                <form class="form-horizontal" action="/crud/{{$post->id}}" role="form" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('patch')}}
                        <label class="col-lg-3 control-label">Фото: </label>
                        @foreach($images as $image)
                                <img src="{{$image->path_image}}" height="150px" width="150px" />
                                {{--<i class="fa fa-trash-o"></i>--}}
                        @endforeach
                            <br><br><br><br>
                            <input type="file" name="file" id="file" value="Добавить картинку товара">
                        <br>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Название: </label>
                        <div class="col-lg-8">
                            <input id="note2" class="form-control" name="title" type="text" value="{{$post->title}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Номер категории: </label>
                        <div class="col-lg-8">
                            <input id="note2" class="form-control" name="category_id"  type="text" value="{{$post->category_id}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Номер пользователя: </label>
                        <div class="col-lg-8">
                            <input id="note2" class="form-control" name="user_id" type="number" value="{{$post->user_id}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Сокращенный текст: </label>
                        <div class="col-lg-8">
                            <input id="note2" class="form-control" name="intro" type="text" value="{{$post->intro}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Текст статьи: </label>
                        <div class="col-md-8">
                            <textarea id="note" name="body">{{$post->body}}</textarea>
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
                </form>
            </div>
        </div>
    </div>

    {{--jQuery & Bootstrap
    <link href="{{asset('/../bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <script src="{{asset('/../bootstrap/jquery/jquery-1.8.2.min.js') }}"></script>
    <script src="{{asset('/../bootstrap/js/bootstrap.min.js') }}"></script>
    Bootstrap-editable
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
--}}
@endsection

