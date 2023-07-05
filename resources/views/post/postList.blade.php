@extends('layouts.app')


@vite(['resources/sass/theme.scss'])
@section('content')


    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card">
                    <table class="table">
                        <tr class="d-block">
                            <td>
                                {{$post->title}}
                            </td>
                            <td>
                                {{$post->views}}
                            </td>
                            <td>
                                {{$post->image}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
    {{$posts->links()}}

@endsection
