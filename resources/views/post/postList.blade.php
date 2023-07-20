@extends('layouts.app')


@vite(['resources/sass/theme.scss'])
@section('content')

    @include('component.err')


    <div class="mb-3">
        <a href="{{route('post.create',)}}" class="btn btn-outline-warning d-block w-50 m-auto p-2 fs-5">
            Create new post
        </a>
    </div>

    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card">
                    <a href="{{route('post.delete',$post->id)}}" class="del-btn">
                        Delete
                    </a>

                    <a href="{{route('post.edit',$post->id)}}" class="edit-btn">
                        Edit
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <img src="{{$post->imgUrl()}}" class="post-img" alt="...">
                        <li>
                            Title: {{$post->title}}
                        </li>
                        <li>
                            Views:{{$post->views}}
                        </li>

                    </ul>
                </div>
            </div>
        @endforeach
    </div>
    {{$posts->links()}}

@endsection
