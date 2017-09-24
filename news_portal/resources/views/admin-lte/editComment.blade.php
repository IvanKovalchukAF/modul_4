@extends('admin-lte.admin_template')

@section('content')
    <div class="container" {{$page_title = 'Редактирование товости:'}}>
        <div class="row">
            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <br>
                <br>
                {{--Edit form--}}
                <form class="form-horizontal" action="/crud/edit/comment/{{$comment->id}}" role="form" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('patch')}}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Номер новости: </label>
                        <div class="col-lg-8">
                            <input id="note2" class="form-control" name="post_id" type="number" value="{{$comment->post_id}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">ИД пользователя: </label>
                        <div class="col-lg-8">
                            <input id="note2" class="form-control" name="user_id"  type="number" value="{{$comment->user_id}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Like: </label>
                        <div class="col-lg-8">
                            <input id="note2" class="form-control" name="like" type="number" value="{{$comment->like}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Dislike: </label>
                        <div class="col-lg-8">
                            <input id="note2" class="form-control" name="dislike" type="number" value="{{$comment->dislike}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Ваш коментарий: </label>
                        <div class="col-md-8">
                            <textarea id="note" name="body">{{$comment->body}}</textarea>
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
@endsection

