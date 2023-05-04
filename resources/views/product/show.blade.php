<x-layout>
    <div class="container">
        <div class="row">
            {{-- @dd($product) --}}
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    {{-- TODO ATTIVARE IMMAGINI --}}
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                      <h5 class="card-title">{{$product->title}}</h5>
                      <p class="card-text">{{$product->description}}</p>
                      <p class="card-text">{{$product->phone}}</p>
                      <a href="{{route('indexProduct')}}" class="btn btn-primary">Tutte le Richieste</a>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</x-layout>