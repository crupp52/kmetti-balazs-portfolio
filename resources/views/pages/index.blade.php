{{-- @extends('layout') --}}
@extends('layout1')

@section('prices')
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
    </tbody>
@endsection