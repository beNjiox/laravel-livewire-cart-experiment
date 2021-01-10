<html lang="fr">
<head>
    <title>Cart Experiment</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="w-full border-l-4 border-gray-50 mx-auto mt-6 md:w-1/2">
    <div class="flex justify-between mb-20 h-3">
        <h1 class="text-xl font-medium text-center pl-2 underline">Hello Cart</h1>
        <livewire:cart-main-counter />
    </div>

    @yield('content')
</div>
@livewireScripts
</body>
</html>
