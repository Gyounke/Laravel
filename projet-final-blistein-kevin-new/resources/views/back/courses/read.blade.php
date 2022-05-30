@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Users</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Professor</th>
                    <th scope='col'>Image</th>
                    <th scope='col'>Price</th>
                    <th scope='col'>Course name</th>
                    <th scope='col'>Course description</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $courses->id }}</th>
                    
                        <td>{{ $courses->professor }}</td>
                        <td>{{ $courses->image }}</td>
                        <td>{{ $courses->price }}</td>
                        <td>{{ $courses->course_name }}</td>
                        <td>{{ $courses->course_description }}</td>
                   
                        <td><img src="{{ asset("images/" . $courses->image) }}" alt="" style="width:50%; height:50%;"></td>
                    <td> {{-- read_td_anchor --}}
                        <td><a type="submit" class="btn btncus2" href="{{ route('courses.index') }}">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
