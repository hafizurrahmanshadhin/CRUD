@extends('layouts.app')
@section('main')
    <div class="container">
        <div class="text-right">
            <a href="{{ route('products.create') }}" class="btn btn-dark mt-2">New Product</a>
        </div>

        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="products/{{ $product->id }}/show"
                                class="text-decoration-none text-dark">{{ $product->name }}</a></td>
                        <td>
                            <img src="{{ asset('products/' . $product->image) }}" alt="Not Found" width="30" height="30"
                                class="rounded-circle">
                        </td>
                        <td>
                            <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                            <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                            {{--  <form class="d-inline" method="POST" action="products/{{ $product->id }}/delete">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>  --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
@endsection
