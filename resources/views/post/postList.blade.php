@extends('layouts.app')


@vite(['resources/sass/theme.scss'])
@section('content')

    @include('component.err')

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
                    <table>
                        <tr class="d-block">
                            <td class="position-absolute top-50">
                                {{$post->image}}
                                ... ...
                                ... ...
                            </td>
                            <td>
                                {{$post->title}}
                            </td>
                            <td>
                                {{$post->views}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
    {{$posts->links()}}

@endsection
