<x-layout>
    <h1 class="text-center">Inserisci Richiesta</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
              {{-- enctype e per specificare il file nel form --}}
                <form method="POST" action="{{route('storeProduct')}}" enctype="multipart/form-data">

                    @csrf 
                    
                    <div class="mb-3">
                      <label for="exampleInputTitle" class="form-label">Titolo</label>
                      <input type="text" name="title" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp">
                    <div class="mb-3">
                      <label for="exampleInputDescription" class="form-label">Descrizione</label>
                      <textarea type="text" name="description" class="form-control" cols="30" rows="10" id="exampleInputDescription"></textarea>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" name="check" class="form-check-input" id="exampleCheck">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label">Inserisci il tuo numero telefonico</label>
                      <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                      <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                      <input class="form-control" type="file" id="formFileMultiple" name="imgProduct" multiple>
                      {{-- TODO: attualmente accetta ogni tipo di file --}}
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Inserisci Richiesta</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>