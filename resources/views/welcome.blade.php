<x-layout>
    <div class="container m-nav">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            @foreach($articles as $article)
                <div class="col-8 my-3">
                    <div class="p-3 bg-secondary">
                        <div class="d-flex justify-content-between mx-2">
                            <h2>{{$article->title}}</h2>
                            <p>{{$article->user->name}}</p>
                        </div>
                        <div class="py-2">
                            <p class="text-truncate">{{$article->body}}</p>
                        </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>
</x-layout>