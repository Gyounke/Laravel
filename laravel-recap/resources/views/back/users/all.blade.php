@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Users</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>lastname</th>
                    <th scope='col'>firstname</th>
                    <th scope='col'>age</th>
                    <th scope='col'>address</th>
                    <th scope='col'>email</th>
                    <th scope='col'>password</th>
                    <th scope='col'>status</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($users as $users)
                    <tr>
                        <th scope='row'>{{ $users->id }}</th>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btn-primary' href='{{ route('users.edit', $users->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('users.read', $users->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection