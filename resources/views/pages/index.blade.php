@extends('layout')

@section('prices')
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->constDemol }}</td>
                <td>{{ $product->shipping }}</td>
            </tr>
        @endforeach
    </tbody>
@endsection