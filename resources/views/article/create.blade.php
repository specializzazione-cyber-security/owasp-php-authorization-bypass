<x-layout>
    <div class="container m-nav">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{route('article.store')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Titolo Articolo</label>
                      <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 form-floating">
                        <textarea name="body" class="form-control" id="floatingTextarea2" style="height: 400px"></textarea>
                        <label for="floatingTextarea2">Contenuto Articolo</label>
                      </div>
                    <button type="submit" class="btn btn-primary">Conferma</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>