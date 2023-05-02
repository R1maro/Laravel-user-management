@extends('layouts.app')

@section('content')


    <h1 class="mb-4">
        Users
    </h1>

    <div class="mb-3">
        <a href="{{route('user.create',)}}" class="btn btn-outline-warning d-block w-50 m-auto p-2 fs-5">
            Create new user
        </a>
    </div>

    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" class="table table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>-</th>
            </tr>
            </thead>
            <tbody class="tbl-content">
            @foreach($users as $user)
                <tr>
                    <td>
                        {{$user->id}}
                    </td>

                    <td>
                        {{$user->name}}
                    </td>

                    <td>
                        {{$user->email}}
                    </td>

                    <td>
                        {{$user->mobile}}
                    </td>

                    <td>
                        <a href="{{route('user.delete',$user->id)}}" class="btn btn-danger">
                            &times;
                        </a>
                    </td>

                    <td>
                        -
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <span class="pagination">
        {{$users->links()}}
        </span>
    </div>


    <!-- follow me template -->
    <div class="made-with-love">
        Made with
        <i>♥</i> by
        <a target="_blank" href="https://github.com/R1maro">R1maro</a>
    </div>


@endsection

{{--@section('test')--}}
{{--    {{$users}}--}}
{{--@endsection--}}
