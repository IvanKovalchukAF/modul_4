@extends('admin-lte.admin_template')

@section('content')
<div{{$page_title = 'Пирведствуем в админ-панели News-Portal'}}>
    <div class="box-body table-responsive no-padding tools">
        <table class="table table-hover">
            <ul class="treeview-menu">
                <h2>Сортировка всех новостей по категориям :</h2>
                <?php $number = 1 ; ?>
                @foreach(App\Category::all() as $category)
                    <h3>
                        <a href="/crud/category/{{$category->id}}" class="bt">{{$number}} {{$category->name}}</a>
                    </h3>
                    <?php $number++ ; ?>
                @endforeach
            </ul>
        </table>
    </div>
</div>
@endsection