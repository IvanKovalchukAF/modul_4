@extends('admin-lte.admin_template')

@section('content')

    <div class="container" {{$page_title = 'Добавление товаров'}}>
        <form class="form-horizontal" role="form" action="/crud/comments/save" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- create form column -->
            <div class="col-md-9 personal-info">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Номер новости для коментария: </label>
                    <div class="col-lg-8">
                        <input id="note2" class="form-control" name="post_id" type="number" value="{{--{{$good->name}}--}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">ИД пользователя: </label>
                    <div class="col-lg-8">
                        <input id="note2" class="form-control" name="user_id"  type="number" value="{{Auth::user()->id}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Ваш коментарий: </label>
                    <div class="col-lg-8">
                        <input id="note2" class="form-control" name="body" type="text" value="{{--{{$good->price}}--}}">
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