@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Users</h1>
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

                    {{-- read_td_anchor --}}
                        <form action='{{ route('users.update' , $service->id) }}' method='post'>
                            @csrf

                            <td> <input type="text" name="image" value="{{ $user->image }}"></td>
                            
                            <td> <input type="text" name="lastname" value="{{ $user->lastname }}"></td>

                            <td> <input type="text" name="firstname" value="{{ $user->lastname }}"></td>
                               
                            <td> <input type="text" name="age" value="{{ $user->age }}"></td>
                             
                            <td> <input type="text" name="adress" value="{{ $user->adress }}"></td>
                            
                            <td>  <input type="file" name="email" value="{{ $user->email }}"></td>

                            <td><button class="btn btncus2" type='submit'>Update</button> {{-- update_blade_anchor --}}</td>
                        </form>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
