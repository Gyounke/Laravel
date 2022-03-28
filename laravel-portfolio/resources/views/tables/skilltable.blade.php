@extends('backoffice')


@section('skilltable')
    
<div class="container">
<h5 class="fw-bold mt-5"><strong><u>SKILL</u></strong></h5>
<table class="table">
    <thead>
        <tr>
            <th scope="col">percentage</th>
            <th scope="col">skill</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($skill as $item)
            <tr>
                <th scope="row">{{ $item->percentage }}</th>
                <td>{{ $item->skill }}</td>
                <td>
                    <form action="{{ route("skills.destroy", $item->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
                
                <td>
                    <a href="{{ route("skills.edit", $item->id) }}">edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection