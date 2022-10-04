<section>
    <div class="row">
        <div class="col-md-6 bg-primary">

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($photos as $photo)
                        {{-- @dump($photo) --}}
                        @if ($photo->category_id ==1)
                        @if ($photo->id ==1)
                        <div class="carousel-item active">
                            <img src="{{ Storage::url($photo->path)}}" alt="#" class="d-block w-100">
                        </div>
                        @elseif($photo->id >1)
                        <div class="carousel-item">
                            <img src="{{ Storage::url($photo->path) }}" alt="" class="d-block w-100">
                        </div>
                        @endif
                        @endif
                        @endforeach

                    </div>
                </div>

        </div>
        <div class="col-md-6 bg-primary">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($photos as $photo)
                    {{-- @dump($photo) --}}
                    @if ($photo->category_id ==2)
                    @if ($photo->id )
                    <div class="carousel-item active">
                        <img src="{{ Storage::url($photo->path)}}" alt="#" class="d-block w-100">
                    </div>
                    @elseif($photo->id >1)
                    <div class="carousel-item">
                        <img src="{{ Storage::url($photo->path) }}" alt="" class="d-block w-100">
                    </div>
                    @endif
                    @endif
                    @endforeach

                </div>
            </div>

    </div>

    </div>



</section>
