<x-layout>
    
    <x-navbar/>
    
    <h1 class="display-1 text.info fw-bold text-center">ARTICOLI</h1>

    <div class="conteiner">
        <div class="row justify-content-evenly">
            @foreach ($articoli as $el)
            <x-card :el=$el/>
            @endforeach
        </div>
    </div>

</x-layout>