@extends('layouts.app')

@section('content')


    <h1>Users</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Id</th>
                <th>First_name</th>
                <th>Last_name</th>
                <th>Age</th>
                <th>Mobile</th>
                <th>Deleted_at</th>
                <th>Created_at</th>
                <th>updated_at</th>
                <th>-</th>
            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">

            <tbody>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <a href="" style="color: gray">Go to profile</a>
                </td>
                <td></td>
                <td>
                    <button>Del</button>
                    <button>...</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


    <!-- follow me template -->
    <div class="made-with-love">
        Made with
        <i>♥</i> by
        <a target="_blank" href="https://github.com/R1maro">R!maro</a>
    </div>


@endsection

@section('test')
    {{$users}}
@endsection
