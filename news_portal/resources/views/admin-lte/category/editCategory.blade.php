@extends('admin-lte.admin_template')

@section('content')
    <div class="container" {{$page_title = 'Редактирование категории:'}}>
        <div class="row">
            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <br>
                <br>
                {{--Edit form--}}
                <form class="form-horizontal" action="/crud/edit/category/{{$category->id}}" role="form" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('patch')}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Название: </label>
                        <div class="col-lg-8">
                            <input id="note2" class="form-control" name="name" type="text" value="{{$category->name}}">
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

@endsection
