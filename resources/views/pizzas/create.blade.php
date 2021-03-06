
    @extends('layouts.layout')
       @section('content')
        <div class="wrapper create-pizza">
            <h1>Create a New Pizza</h1>
            <form action="/pizzas" method="POST"></form>
                <label for="name">Your name:</label>
                <input type="text" id="name" name="name">
                <label for="type">Choose pizza type</label>
                <select name="type" id="type">
                    <option value="margarita">Margarita</option>
                    <option value="hawaian">Hawaian</option>
                    <option value="veg supreme">Veg supreme</option>
                    <option value="volcano">Volcano</option>
                </select>
                <label for="type">Choose base type</label>
                <select name="base" id="base">
                    <option value="cheesy crust">Cheesy crust</option>
                    <option value="garlic crust">Garlic crust</option>
                    <option value="veg supreme">Veg supreme</option>
                    <option value="thin & crispy">Thin & crispy</option>
                    <option value="thick">Thick</option>
                </select>
                <input type="submit" value="Order Pizza">
        
        </div>
        @endsection