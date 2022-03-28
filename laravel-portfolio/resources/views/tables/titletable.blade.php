@extends('backoffice')


@section('titletable')
    
<div class="container">
<h5 class="fw-bold mt-5"><strong><u>TITLE</u></strong></h5>
<table class="table">
    <thead>
        <tr>
            <th scope="col">s_title</th>
            <th scope="col">em</th>
            <th scope="col">span</th>
            <th scope="col">title_1</th>
            <th scope="col">title_2</th>
            <th scope="col">title_3</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($title as $item)
            <tr>
                <th scope="row">{{ $item->s_title }}</th>
                <td>{{ $item->em }}</td>
                <td>{{ $item->span }}</td>
                <td>{{ $item->title_1 }}</td>
                <td>{{ $item->title_2 }}</td>
                <td>{{ $item->title_3 }}</td>
                <td>
                    <form action="{{ route("titles.destroy", $item->id) }}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
                
                <td>
                    <a href="{{ route("titles.edit", $item->id) }}">edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection