
<div class="p-5 mb-4 bg-light rounded-3 mt-5">

    <h1 class="display-3 text-center">Photos</h1>


    <div class="articles row justify-content-center ">


        @foreach ($photos as $photo)
        @dump($photo->path)
        <img src="{{ $photo->path }}" alt="image du 32" width="100%">

        <img src="{{ Storage::url('images/1664781346.jpg')}}" alt="">
        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-body">
                    <p class="card-title ">{{ $photo->name }}
                    </p>
                    <p>{{ $photo->category_id }}</p>
                    <p>'{{  $photo->path }}'</p>
                    {{-- <img src=" {{ Storage::url('')  alt="artisanat"> --}}
                    {{-- <img src="asset{{$photo->path}}" alt=""> --}}


                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

