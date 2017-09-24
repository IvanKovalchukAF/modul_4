@extends('admin-lte.admin_template')

@section('content')
    <div class="row" {{$page_title1 or $page_title = 'Страница редактирования категорий '}} >
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
                    <form method="get" action="{{url('/crud/create/category')}}">
                        <button type="submit">Добавить категорию</button>
                    </form>
                    <br>
                    <table class="table table-hover">
                        <tr>
                            <th>Название категории</th>
                        </tr>

                        @foreach(App\Category::all() as $category)
                            <tr>
                                <td><h4>{{ $category['name'] }}</h4></td>
                                <td>
                                    <a href="/crud/edit/category/{{ $category['id'] }}" class="bt"><i class="fa fa-edit"></i></a>
                                    <a href="/crud/delete/category/{{ $category['id'] }}" onclick="return confirm('Удалить файл?')" class="bt"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
