<!-- здесь будем выводить сообщения об успешности добавления комментария -->


@if(Session::has('message'))
    {{Session::get('message')}}
@endif