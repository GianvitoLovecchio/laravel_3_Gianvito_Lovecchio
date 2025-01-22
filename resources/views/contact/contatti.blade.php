<x-layout>

    <x-navbar />

    <h1 class="display-1 text.info fw-bold text-center">CONTATTACI</h1>

    <div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center p-5">
            <form class="border border-primary p-3 px-5" action="{{route('invio_contatto')}}" method="POST">
                @csrf
                <div class="p-3 d-flex justify-content-between">
                    <label class="fw-bold mx-4" for="name">Nome:</label>
                    <input type="text" id="name" name="nome">
                </div>
                <div class="p-3 d-flex justify-content-between">
                    <label class="fw-bold mx-4" for="surname">Cognome:</label>
                    <input type="text" id="surname" name="cognome">
                </div>
                <div class="p-3 d-flex justify-content-between">
                    <label class="fw-bold mx-4" for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="p-3 d-flex justify-content-between">
                    <label class="fw-bold mx-4" for="about">Argomento:</label>
                    <textarea id="about" name="argomento"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-25">Invia</button>
                </div>
            </form>
        </div>
    </div>
</div>

    

</x-layout>
