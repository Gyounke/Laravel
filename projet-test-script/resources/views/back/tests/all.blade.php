@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Tests</h1>
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
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($tests as $test)
                    <tr>
                        <th scope='row'>{{ $test->id }}</th>
                        <td>{{ $test->nom }}</td>
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
