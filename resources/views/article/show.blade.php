<x-layout>
    <div class="container m-nav">
        <div class="row">
            <div class="col-10">
                <h1 class="display-1 mt-5">{{$article->title}}</h1>
                <h5 class="fs-3 mb-5">Pubblicato il {{$article->created_at}}</h5>
                <div class="col-8">
                    <p>{{$article->body}}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>