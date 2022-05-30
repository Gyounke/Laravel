@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Users</h1>
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
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $users->id }}</th>
                    
                        <td>{{ $users->image }}</td>
                        <td>{{ $users->lastname }}</td>
                        <td>{{ $users->firstname }}</td>
                        <td>{{ $users->age }}</td>
                        <td>{{ $users->adress }}</td>
                        <td>{{ $users->email }}</td>
                   
                        <td><img src="{{ asset("images/" . $users->image) }}" alt="" style="width:50%; height:50%;"></td>
                    <td> {{-- read_td_anchor --}}
                        <td><a type="submit" class="btn btncus2" href="{{ route('users.index') }}">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
