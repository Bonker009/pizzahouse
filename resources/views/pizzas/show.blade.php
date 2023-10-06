@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title h2 mb-2">Order for {{ $pizza->name }}</h1>
                        <p class="card-text text-muted">Type - {{ $pizza->type }}</p>
                        <p class="card-text text-muted">Base - {{ $pizza->base }}</p>
                        <p class="card-text text-muted mb-2">Extra Toppings:</p>
                        <ul class="list-unstyled pl-4">
                            @foreach ($pizza->toppings as $topping)
                                <li class="card-text text-muted">{{ $topping }}</li>
                            @endforeach
                        </ul>
                        <form action="{{ route('pizza.destroy', $pizza->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mt-3" type="submit">Complete Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a href="/pizzas" class="btn btn-link mt-3 text-decoration-none text-muted d-block">&lt;- Back to all pizzas</a>

    </div>
@endsection
