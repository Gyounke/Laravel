@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Titles</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>id</th>
                    <th scope='col'>name</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $title->id }}</th>
                    <td>{{ $title->id }}</td>
                    <td>{{ $title->name }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('title.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
