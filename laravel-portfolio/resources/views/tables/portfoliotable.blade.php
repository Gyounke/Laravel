@extends('backoffice')


@section('portfoliotable')
    
<div class="container">
<h5 class="fw-bold mt-5"><strong><u>PORTFOLIO</u></strong></h5>
<table class="table">
    <thead>
        <tr>
            <th scope="col">image</th>
            <th scope="col">title</th>
            <th scope="col">text</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($portfolio as $item)
            <tr>
                <th scope="row">{{ $item->image }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->text }}</td>
                <td>
                    <form action="{{ route("portfolios.destroy", $item->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route("portfolios.edit", $item->id) }}">edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection