<!DOCTYPE html>
<html lang=>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- MOSTRA UN MESSAGGIO DI SUCCESSO NEL CASO IN CUI LA MAIL SIA STATA CORRETTAMENTE INVIATA ED AVVIENE IL REINDIRIZZAMENTO ALL'HOMEPAGE --}}
    {{ $slot }}
    @if (session('emailSent'))
        <div class="alert alert-success alert-dismissible fade show text-center mx-auto w-25" role="alert">
            {{session('emailSent')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif



</body>

</html>
