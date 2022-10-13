<section>
    {{-- <div class="row">
        <div class="col-md-12 mb-1 ">
            <div id="carouselGauche" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    @foreach ($photos as $photo)

                    @if ($photo->category_id==1)
                    <div class="carousel-item ">
                        <img src="{{ url('/').'/storage/'.$photo->path}}" alt="#" class="img-fluid">

                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div> --}}
<img src="{{ asset('images/3-ecole-de-kongodiana.jpg') }}" alt="" class="img-fluid">

        {{-- <div class="col-md-4 d-flex  justify-content-center align-items-center mt-1 ">
            <div id="carouselDroit" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    @foreach ($photos as $photo)
                    @if ($photo->category_id==2)
                    <div class="carousel-item ">
                        <img src="{{ url('/').'/storage/'.$photo->path}}" alt="#" class="d-block ">
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>--}}
        </div>
</section>
