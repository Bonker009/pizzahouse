@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center text-primary">Create a New Pizza</h1>
                    </div>
                    <div class="card-body">
                        <form action="/pizzas" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label text-info">Your name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your name">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label text-info">Choose pizza type:</label>
                                <select class="form-select" name="type" id="type">
                                    <option value="margarita">Margarita</option>
                                    <option value="hawaiian">Hawaiian</option>
                                    <option value="veg supreme">Veg Supreme</option>
                                    <option value="volcano">Volcano</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="base" class="form-label text-info">Choose pizza base:</label>
                                <select class="form-select" name="base" id="base">
                                    <option value="cheesy crust">Cheesy Crust</option>
                                    <option value="garlic crust">Garlic Crust</option>
                                    <option value="thin & crispy">Thin & Crispy</option>
                                    <option value="thick">Thick</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-info">Extra Toppings:</label>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="toppings[]"
                                                value="mushroom" id="mushroom">
                                            <label class="form-check-label text-success" for="mushroom">Mushrooms</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="toppings[]"
                                                value="peppers" id="peppers">
                                            <label class="form-check-label text-success" for="peppers">Peppers</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="toppings[]" value="garlic"
                                                id="garlic">
                                            <label class="form-check-label text-success" for="garlic">Garlic</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="toppings[]" value="olives"
                                                id="olives">
                                            <label class="form-check-label text-success" for="olives">Olives</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 float-end">
                                <button type="submit" class="btn btn-primary">Order Pizza</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
