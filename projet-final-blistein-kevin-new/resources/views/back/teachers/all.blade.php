@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Teachers</h1>
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
            
        <a href="{{ route('teachers.create') }}" class="btn btncus">Create</a>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Field</th>
                    <th scope='col'>Description</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($teachers as $item)
                    <tr>
                        <th scope='row'>{{ $item->id }}</th>
                        <td>{!! $item->name !!}</td>
                        <td>{{ $item->field }}</td>
                        <td>{{ $item->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can('delete', $item)
                                <form action="{{ route('teachers.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btncus2 ">Delete</button>
                                </form>
                                @endcan
                                @can('update', $item)
                                <a class='btn btncus3 mx-2' href='{{ route('teachers.edit', $item ) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btncus3' href='{{ route('teachers.show', $item ) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection