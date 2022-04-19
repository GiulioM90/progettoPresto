<x-layout>
  
    <div class="container py-5">
        <div class="row justify-content-center">
        <div class="col-md-6 col-12 d-flex flex-column align-items-center">
              <h1 class="text-center">{{$announcement->title}}</h1>
              <div class='my-hr-shadow mb-4'></div>
              <p class='text-center my-3'>{{$announcement->description}}</p>
              <p class='text-center my-2'>{{$announcement->price}}$</p>
        </div>
        <div class="col-md-6 col-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @foreach($announcement->images as $image)
                      @if ($loop->first)
                      <div class="carousel-item active">
                        <img width="100%" height="100%" 
                        src="{{$image->getUrl(400, 300)}}" alt="">
                      </div>  
                      @endif
                      @if ($loop->iteration != 1)
                      <div class="carousel-item">
                        <img width="100%" height="100%" 
                        src="{{$image->getUrl(400, 300)}}" alt="">
                      </div>
                      @endif    
                    @endforeach
                  </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span aria-hidden="true"><i class='bi bi-arrow-left main-text-color'></i></span>
      <span class="visually-hidden">Previous</span>  
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span aria-hidden="true"><i class='bi bi-arrow-right main-text-color'></i></span>
      <span class="visually-hidden">Next</span>
    </button>
                </div>
        </div>
        </div>
    </div>
</x-layout>