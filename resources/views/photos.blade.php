<section>


            <div class="p-5 mb-6 bg-light rounded-3 mt-5 justify-content-center">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($photos as $photo)
                        <div class="carousel-item active">

                            <img src="{{ asset('images/32.jpg') }}" class="d-block w-100" alt="enfant-azara" >


                        </div>
                        <div class="carousel-item ">

                            <img src="{{ Storage::url($photo->path)}}" alt="#" class="d-block w-50" >


                        </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button
                </div>
            </div>



        {{-- <div class="col-md-6">

            <div class="p-5 mb-4 bg-light rounded-3 mt-5 justify-content-center">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            @if ($photo->category->id === 1)
                            <img src="{{ Storage::url($photo->path)}}" alt="#">
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}







</section>
