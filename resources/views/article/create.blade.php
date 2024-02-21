<x-layout>
    <div class="container m-nav">
      <h1 class="text-center my-5 display-3">Crea il tuo articolo</h1>
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{route('article.store')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Titolo</label>
                      <input required placeholder="Scrivi il titolo" name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-floating">
                        <textarea required name="body" class="form-control" id="floatingTextarea2" style="height: 400px"></textarea>
                        <label for="floatingTextarea2">Contenuto Articolo</label>
                      </div>
                      <div class=" d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-success">Inserisci articolo</button>
                      </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>