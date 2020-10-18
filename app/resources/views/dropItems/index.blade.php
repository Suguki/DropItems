@extends('layouts.app')

@section('content')

<table border="1">
    <thead>
        <tr>
            <th>name</th>
            <th>droped_at</th>
            <th>address</th>
            <th>details</th>
        </tr>
    </thead>
    <tbody>
        @forelse($datas as $index => $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->droped_at }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->details }}</td>
            <td>{{ $item->user_id }}</td>
        </tr>
        @empty
        no item.

        @endforelse
    </tbody>
</table>

@endsection