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
            
        <a href="{{ route('users.create') }}" class="btn btncus">Create</a>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Image</th>
                    <th scope='col'>Lastname</th>
                    <th scope='col'>Firstname</th>
                    <th scope='col'>Age</th>
                    <th scope='col'>Adress</th>
                    <th scope='col'>Email</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <th scope='row'>{{ $item->id }}</th>
                        <td><img src="{{ "/images/" . $item->icon }}" alt=""></td>
                        <td>{!! $item->lastname !!}</td>
                        <td>{{ $item->firstname }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->email }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can('delete', $item)
                                <form action="{{ route('users.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btncus2 ">Delete</button>
                                </form>
                                @endcan
                                @can('update', $item)
                                <a class='btn btncus3 mx-2' href='{{ route('users.edit', $item->id ) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btncus3' href='{{ route('users.read', $item->id ) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection