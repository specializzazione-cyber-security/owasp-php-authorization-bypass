<x-layout>
    <div class="container m-nav">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-10">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Testo</th>
                        <th scope="col">Azioni</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                      <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{substr($article->title,0,40)}}...</td>
                        <td>{{substr($article->body,0,60)}}...</td>
                        <td>
                            <div class="btn btn-primary">Leggi</div>
                            <div class="btn btn-danger">Elimina</div>
                        </td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-layout>