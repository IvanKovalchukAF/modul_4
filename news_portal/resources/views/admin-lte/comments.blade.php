@extends('admin-lte.admin_template')

@section('content')
    <div class="row" {{$page_title1 or $page_title = 'Страница для редактирования новостей'}}>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Поиск">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding tools">
                    <form method="get" action="{{url('/crud/create/comments')}}">
                        <button type="submit">Добавить новость</button>
                    </form>
                    <table class="table table-hover">
                        <tr>
                            <th>Номер коментария:</th>
                            <th>Номер новости:</th>
                            <th>ИД пользователя</th>
                            <th>Like</th>
                            <th>Dislike</th>
                            <th>Коментарий:</th>
                        </tr>

                        <?php $comments = App\Comment::paginate(5)?>
                        @foreach( $comments as $comment)
                            <tr>
                                <td><h4>{{ $comment['id'] }}</h4></td>
                                <td>{{ $comment['post_id'] }}</td>
                                <td>{{ $comment['user_id'] }}</td>
                                <td>{{ $comment['like'] }}</td>
                                <td>{{ $comment['dislike'] }}</td>
                                <td>{{ substr(($comment['body']), 0, 75) }}</td>
                                <td>
                                    <a href="/crud/edit/comment/{{ $comment['id'] }}" class="bt"><i class="fa fa-edit"></i></a>
                                    <a href="/crud/delete/comment/{{ $comment['id'] }}" onclick="return confirm('Удалить файл?')" class="bt"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $comments->links() }}

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection