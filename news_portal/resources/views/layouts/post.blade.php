@extends('layouts.body')

@section('content')
    <div class="container-fluid text-center">
        <div class="reply">
            {{--______________________Left column for advertising_____________________--}}
            @include('layouts.advertising.left')

            {{--_________________________Center column for articles_______________________--}}
            <div class="col-sm-8 text-left">
                <div class="row">
                    <h1 class="fig">{{$post->title}}</h1>
                    @foreach($images as $image)
                        <p class="fig">
                            <img src="{{$image->path_image}}" height="300" width="700" alt="Иллюстрация" />
                        </p>
                    @endforeach
                    <p>{{$post->body}}</p>
                </div>
                {{--show comments--}}
                <hr>
                <div class="comments">
                    <ul class="list-group">
                        @foreach($post->comments as $comment)
                            @foreach(App\User::all() as $user)
                                @if($comment->user_id === $user->id)
                                    {{ $user->name }},
                                @endif
                            @endforeach
                            {{ $comment->created_at->diffForHumans() }} : &nbsp;
                            <li class="list-group-item"><i></i>
                                {{$comment->body}}
                            </li>
                                <button class="js-like_button" data-comment-id="{{$comment->id}}">like {{$comment->like}}</button>
                                <button class="js-dislike_button" data-comment-id="{{$comment->id}}">dislike {{$comment->dislike}}</button>
                        @endforeach
                    </ul>
                </div>
                {{--add a comments--}}
                @if (Auth::guest())
                    <li>Для того чтобы оставить коментарий, Вам нужно  <a href="{{url('/register')}}">зарегистрироваться!</a></li>
                    <div class="card">
                        <div class="card-block">
                            <form>
                                {{ csrf_field() }}
                                <div class="form-group">
                                </div>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="card">
                        <div class="card-block">
                            <form method="get" action="/post/{{ $post->id }}/comments/{{ Auth::user()->id }}" >
                                {{ csrf_field() }}
                                {{ Auth::user()->name }}
                                <div class="form-group">
                                    <textarea name="body" required placeholder="Ваш коментарий тут." class="form-control" ></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> Добавить коментарий</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif

                Сейчас на сайте находиться {{rand(0, 5)}}
                <br>

                Количество просмотров  {{$post->view_count}}
            </div>
            {{--_______________________Right column for advertising____________________--}}
            @include('layouts.advertising.right')
        </div>
    </div>
@endsection

