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
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-success">Leggi</a>
                            <form class="d-inline" method="POST" action="{{route('article.delete', compact('article'))}}">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-outline-danger">Elimina</button>
                            </form>
                        </td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-layout>