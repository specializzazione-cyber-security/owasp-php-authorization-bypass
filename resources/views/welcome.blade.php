<x-layout>
    <div class="container m-nav">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12 my-5 text-center">
                <h1 class="display-1">InsecurAulab</h1>
                <h3 class="display-6">Dove notizie e vulnerabilità sono di casa</h3>
            </div>
            @foreach($articles as $article)
                <div class="col-8 my-3">
                    <a class="text-decoration-none text-black" href="{{route('article.show', compact('article'))}}">
                        <div class="p-3 rounded-4 shadow article">
                            <div class="d-flex justify-content-between mx-2 align-items-baseline">
                                <h2>{{$article->title}}</h2>
                                <p class="bg-info rounded-3 p-1">{{$article->user->name}}</p>
                            </div>
                            <div class="py-2">
                                <p class="text-truncate">{{$article->body}}</p>
                            </div>
                        </div> 
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>