@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Utilisateurs</h1>
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
                    <th scope='col'>Action</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>prenom</th>
                    <th scope='col'>email</th>
                    <th scope='col'>adresse</th>
                    <th scope='col'>role_id</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($utilisateurs as $utilisateur)
                    <tr>
                        <th scope='row'>{{ $utilisateur->id }}</th>
                        <td>{{ $utilisateur->nom }}</td>
                        <td>{{ $utilisateur->prenom }}</td>
                        <td>{{ $utilisateur->email }}</td>
                        <td>{{ $utilisateur->adresse }}</td>
                        <td>{{ $utilisateur->role_id }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
