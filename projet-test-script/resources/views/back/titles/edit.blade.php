@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Titles</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('title.update' , $title->id) }}' method='post'>
            @csrf
            <div>
                <label for=>id</label>
                <input type='text' name='id' value='{{ $title->id }}'>
            </div>
            <div>
                <label for=>name</label>
                <input type='text' name='name' value='{{ $title->name }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
