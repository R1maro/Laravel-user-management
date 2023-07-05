@extends('layouts.app')


@vite(['resources/sass/theme.scss'])
@section('content')


    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <table>
                    <tr>
                        <td>
                            {{$post->title}}
                        </td>
                        <td>
                            {{$post->image}}
                        </td>
                        <td>
                            {{$post->views}}
                        </td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    @endforeach
    {{$posts->links()}}

@endsection
