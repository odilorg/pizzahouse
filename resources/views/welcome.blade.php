
       @extends('layouts.layout')
       @section('content')
        

            <div class="content">
            <img src="/img/pizza-house.png" alt="loggo pizzahouse">
                <div class="title m-b-md">
                    
                    The North's Best Pizzas
                </div>
                <p class="mssg">{{session('mssg') }}</p>
                <a href="/pizzas/create">Order a pizza</a>
            </div>
        </div>
        @endsection