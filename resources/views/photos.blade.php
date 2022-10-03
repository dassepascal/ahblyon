
<div class="p-5 mb-4 bg-light rounded-3 mt-5">

    <div class="articles row justify-content-center ">
        @foreach ($photos as $photo)
{{-- @dump($photo->category->id) --}}
                <div class="col-md-6">
            <div class="card my-3">
@if ($photo->category->id === 2)
<img src="{{ Storage::url($photo->path)}}" alt="#">
@endif
@if ($photo->category->id === 1)
<img src="{{ Storage::url($photo->path)}}" alt="#">
@endif



            </div>
        </div>
        @endforeach
    </div>

</div>

