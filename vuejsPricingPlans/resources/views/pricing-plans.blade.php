<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing Plans</title>
    <link rel="stylesheet" href="/assets/style.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
 
    <div id="app">
     <pricing-plan></pricing-plan>
    </div>
    

    <script type="text/x-template" id="plan-template">
    
    <div class="pricing-table">

            <h3 class="pricing-title">@{{ name }}</h3>
            <div class="price">@{{ price }}<sup>/Month</sup></div>
            <!-- Lista de Caracteristicas / Propiedades -->
            <ul class="table-list">
                <li>Available space: @{{ storage }}/GB</li>
                <li>Mail included: @{{ mailInc }} </li>
            </ul>
            <!-- Contratar / Comprar -->
            <div class="table-buy">
                <p>@{{ price }}<sup>/Month</sup></p>
                <a href="#" class="pricing-action">Buy</a>
            </div>
        </div>

    
    </script>

    <script type="text/x-template" id="pricing-plan">

    <div class="container">
    <plan-template v-for="plan in plans" :name="plan.name" :price="plan.price" :storage="plan.storage" :mailInc="plan.mailInc" ></plan-template>
    </div>
    

    </script>

    
</body>
</html>