@extends('admin-lte.admin_template')

@section('content')
    <div class="row" {{$page_title1 or $page_title = 'Страница для редактирования новостей категории ' . $category->name}}>
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
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding tools">
                    <form method="get" action="{{url('/crud/create')}}">
                        <button type="submit">Добавить новость</button>
                    </form>
                    <table class="table table-hover">
                        <tr>
                            <th>Номер новости</th>
                            <th>Название</th>
                            <th>Номер категории</th>
                            <th>ИД пользователя</th>
                            <th>сокращенный текс</th>
                            <th>Текс новости</th>
                            <th>Images</th>
                        </tr>


                        @foreach( $posts as $post)
                            <tr>
                                <td><h4>{{ $post->id }}</h4></td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category_id }}</td>
                                <td>{{ $post->user_id }}</td>
                                <td>{{ substr(($post->intro), 0, 50) }}</td>
                                <td>{{ substr(($post->body), 0, 75) }}</td>
                                <td>
                                    @foreach(App\Image::all() as $image)
                                        @if($post->id == $image['post_id'])
                                            {{ $image['path_image'] }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a href="/crud/edit/{{ $post->id }}" class="bt"><i class="fa fa-edit"></i></a>
                                    <a href="/crud/delete/{{ $post->id }}" onclick="return confirm('Удалить файл?')"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $posts->links() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection
