
<div class="p-5 mb-4 bg-light rounded-3 mt-5">

    <h1 class="display-3 text-center">Photos</h1>
    <img src="{{ asset('storage/app/public/images/2M22m0WOrCdQWnh2MRl8Z3SaOLa2nrIzuRRr4xt9.jpg') }}" class="d-block w-100 " alt="...">


    <div class="articles row justify-content-center ">

        @foreach ($photos as $photo)

        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-body">
                    <p class="card-title ">{{ $photo->name }}
                    </p>
                    <p>{{ $photo->category_id }}</p>
                    <p>{{ $photo->path }}</p>
                    <p class="bg-success"><img src="{{asset('storage/app/public/images/6NtkG8Z0yzdIgabrwBzpjpomAvtW8puOPxKSsHio.jpg') }}" alt=""></p>

                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

