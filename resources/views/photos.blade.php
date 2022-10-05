<section>
    <div class="row">
        <div class="col-md-6 ">
            <div id="carouselGauche" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    @foreach ($photos as $photo)
                    {{-- @dump($photo) --}}
                    @if ($photo->category_id==1)
                    <div class="carousel-item ">
                        <img src="{{ Storage::url($photo->path)}}" alt="#" class="d-block w-100">
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>


        <div class="col-md-6 d-flex  justify-content-center align-items-center ">
            <div id="carouselDroit" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    @foreach ($photos as $photo)
                    {{-- @dump($photo) --}}
                    @if ($photo->category_id==2)
                    <div class="carousel-item ">
                        <img src="{{ Storage::url($photo->path)}}" alt="#" class="d-block ">
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
</section>
