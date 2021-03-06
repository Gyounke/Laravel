@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Albums</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('album.update' , $album->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>name</label>
                <input type='text' name='name' value='{{ $album->name }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
