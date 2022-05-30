@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Courses</h1>
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

                    {{-- read_td_anchor --}}
                        <form action='{{ route('courses.update' , $service->id) }}' method='post'>
                            @csrf

                            <td> <input type="text" name="professor" value="{{ $course->professor }}"></td>
                            
                            <td> <input type="text" name="image" value="{{ $course->image }}"></td>

                            <td> <input type="text" name="price" value="{{ $course->price }}"></td>
                               
                            <td> <input type="text" name="course_name" value="{{ $course->course_name }}"></td>
                             
                            <td> <input type="text" name="course_description" value="{{ $course->course_description }}"></td>
                            

                            <td><button class="btn btncus2" type='submit'>Update</button> {{-- update_blade_anchor --}}</td>
                        </form>
                </tr>
            </tbody>
        </table>
        
    </div>
@endsection
