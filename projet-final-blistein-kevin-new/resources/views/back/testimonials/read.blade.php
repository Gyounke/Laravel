@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Testimonials</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Subtitle</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Button</th>
                    <th scope='col'>Image</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $testimonials->id }}</th>
                    
                        <td>{{ $testimonials->subtitle }}</td>
                    
                        <td>{!! $testimonials->title !!}</td>
                    
                        <td>{{ $testimonials->button }}</td>
                   
                        <td><img src="{{ asset("images/" . $testimonials->image) }}" alt="" style="width:50%; height:50%;"></td>
                    <td> {{-- read_td_anchor --}}
                        <td><a type="submit" class="btn btncus2" href="{{ route('testimonials.index') }}">Back</button></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
