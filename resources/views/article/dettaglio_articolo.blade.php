<x-layout>
    
    <x-navbar/>
    
    <h1 class="display-1 text.info fw-bold text-center">{{$item['nome']}}</h1>

    <div class="container">
        <div class="row f">
            <div class="col-6 p-3">
                <h1 class="text-danger">Articolo: <span class="text-dark">{{$item['nome']}}</span></h1>
                <h2 class="text-danger">Prezzo:<span class="text-dark"> {{$item['prezzo']}}€</span></h2>
                <h2 class="text-danger">Materiale:<span class="text-dark"> {{$item['materiale']}}</span></h2>
                <h2 class="text-danger">Descrizione:<span class="text-dark"> {{$item['descrizione']}}</span></h2>
            </div>
            <div class="col-6  d-flex justify-content-center align-items-center p-5">
                <img src="{{$item['immagine']}}" alt="" class="w-50">
            </div>
        </div>
    </div>

</x-layout>