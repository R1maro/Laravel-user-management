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
                    <a href="{{route('post.delete',$post->slug)}}" class="del-btn">
                        Delete
                    </a>

                    <a href="{{route('post.edit',$post->slug)}}" class="edit-btn">
                        Edit
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <img src="{{$post->imgUrl()}}" class="post-img" alt="...">
                        <li>
                            Title: {{$post->title}}
                        </li>
                        <li class="mb-1">
                            Views:{{$post->views}} &#x1F441;
                        </li>
                        <li class="mt-2">
                            Create Date: {{$post->created_at->diffForHumans()}}
                        </li>
                        <li class="mt-2">
                            Update Date: {{$post->updated_at->diffForHumans()}}
                        </li>

                    </ul>
                </div>
            </div>
        @endforeach
    </div>
    {{$posts->links()}}

@endsection
