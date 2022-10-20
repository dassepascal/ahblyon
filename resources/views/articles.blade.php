<div class="p-5 mb-4 bg-light rounded-3 mt-5">
    <div class="container-fluid ">
        <h1 id="evenements" class="display-3 text-center h1" >Evénements </h1>
        <div class="articles row justify-content-center ">
            @foreach ($articles as $article)

            <div class="col-md-6 col-sm-12">
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title ">{{ $article->title }}</h5>
                        <p class="card-text">
                            <span class="publie">Publié le : {{ $article->dateFormated() }}</span>
                        </p>
                        <a href="{{ route('article', $article->slug) }}" class="btn btn-primary text-light"> Lire
                            la
                            suite</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">{{ $articles->links() }}
        </div>
    </div>

</div>
