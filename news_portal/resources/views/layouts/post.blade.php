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
                    <p>{{substr(($post->body), 0, 200)}} ...</p>
                    <h4><a href="#">читать дальше</a></h4>
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
                            <li class="list-group-item">

                                {{$comment->body}}

                            </li>
                        @endforeach
                    </ul>
                </div>
                {{--add a comments--}}
                @if (Auth::guest())
                    <li>Для того чтобы оставлять коментарии, Вам нужно зарегестрироваться! </li>
                    <div class="card">
                        <div class="card-block">
                            <form>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <textarea name="body" required placeholder="Ваш коментарий тут." class="form-control" ></textarea>
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
                        Количество просмотров  {{$post->view_count}}
                    </div>
                @endif
            </div>
            {{--_______________________Right column for advertising____________________--}}
            @include('layouts.advertising.right')
        </div>
    </div>
@endsection
