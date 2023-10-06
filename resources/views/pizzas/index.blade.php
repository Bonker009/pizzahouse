@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center display-4 mb-5">Pizza List</h1>
        <div class="row justify-content-center">
            @foreach ($pizzas as $pizza)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title h4 text-uppercase fw-bold fs-1">{{ $pizza->name }}</h2>
                            <a href="/pizzas/{{ $pizza->id }}" class="btn btn-primary">View Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
             
        </div>
    </div>
@endsection
