
<div class="p-5 mb-4 bg-light rounded-3 mt-5">

    <h1 class="display-3 text-center">Photos</h1>
    <div class="articles row justify-content-center ">
        @foreach ($photos as $photo)
        
        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-body">
                    <p class="card-title ">{{ $photo->path }}</p>

                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

