<x-layout>
    <div class="container">
        <div class="row">
            {{-- @dd($products) --}}
            @foreach ($products as $product)
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    {{-- TODO ATTIVARE IMMAGINI --}}
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                      <h5 class="card-title">{{$product->title}}</h5>
                      <a href="{{route('showProduct', compact ('product'))}}" class="btn btn-primary">Apri Richiesta</a>
                    </div>
                </div>            
            </div>
            @endforeach
        </div>
    </div>
</x-layout>