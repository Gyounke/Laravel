@extends('backoffice')


@section('abouttable')
    
<div class="container">
    <h5 class="fw-bold mt-5"><strong><u>ABOUT</u></strong></h5>
<table class="table">
    <thead>
        <tr>
            <th scope="col">scores</th>
            <th scope="col">text</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($about as $item)
            <tr>
                <th scope="row">{{ $item->scores }}</th>
                <td>{{ $item->text }}</td>
                <td>
                    <form action="{{ route("abouts.destroy", $item->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route("abouts.edit", $item->id) }}">edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection