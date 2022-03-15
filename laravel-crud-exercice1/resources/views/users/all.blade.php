@extends("back.layouts.app")

@section("content")
<div class="texxt-center py-4">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td> {{ $user->name }}</td>
                        <td> {{ $user-> email }}</td>
                        <td>************************</td>
                        <td>
                            <form action="{{ route("users.destroy", $user->id) }}" method="post">
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>                                
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>        
        </table>    
    </div>
@endsection
