
<div class="col-4 p-3 d-flex justify-content-evenly">
    <div class="card" style="width: 18rem;">
        <img src="{{$el['immagine']}}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{ $el['nome'] }}</h5>
            <p class="card-text"><span class="fw-bold">Prezzo: </span> {{$el['prezzo']}}</p>
            <p class="card-text"><span class="fw-bold">Materiale: </span>{{$el['materiale']}}.</p>
            <a href="{{Route('dettaglio_articoli',['id'=>$el['id']])}}" class="btn btn-primary">Visualizza</a>
        </div>
    </div>
</div> 