@extends('layouts.default')

@section('title', 'Esto es un registro')
@section('content')
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">cos</th>
            </tr>           
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
