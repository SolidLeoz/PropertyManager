<x-layout>
    <h1 class="text-center">Inserisci Richiesta</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('storeProduct')}}">

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
                        <label for="formFile" name="file" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>