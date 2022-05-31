@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Courses</h1>
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
            
        <a href="{{ route('courses.create') }}" class="btn btncus">Create</a>

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Image</th>
                    <th scope='col'>Professor</th>
                    <th scope='col'>Price</th>
                    <th scope='col'>Course name</th>
                    <th scope='col'>Course description</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($courses as $item)
                    <tr>
                        <th scope='row'>{{ $item->id }}</th>
                        <td><img src="{{ "/images/" . $item->image }}" alt=""></td>
                        <td>{!! $item->professor !!}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->course_name }}</td>
                        <td>{{ $item->course_description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                @can('delete', $item)
                                <form action="{{ route('courses.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btncus2 ">Delete</button>
                                </form>
                                @endcan
                                @can('update', $item)
                                <a class='btn btncus3 mx-2' href='{{ route('courses.edit', $item ) }}' role='button'>Edit</a>
                                @endcan
                                <a class='btn btncus3' href='{{ route('courses.show', $item ) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection