
<div class="p-5 mb-4 bg-light rounded-3 mt-5">

    <div class="articles row justify-content-center ">
        @foreach ($photos as $photo)

                <div class="col-md-6">
            <div class="card my-3">

                    <img src="{{ Storage::url($photo->path)}}" alt="#">
                
            </div>
        </div>
        @endforeach
    </div>

</div>

