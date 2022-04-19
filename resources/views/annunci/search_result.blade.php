<x-layout>
<h1 class='text-center my-5'>Risultati ricerca per:</h1>

@if(count($announcements) == 0)
<div class="container">
    <div class="row justify-content-center pt-5 vh-100">
        <div class="col-md-6 d-flex flex-column align-items-center">
            <p class="text-center fs-4 pt-5">Nessun elemento trovato</p>
            <a href="{{route('welcome')}}" class='btn main-bg-color text-white mb-5'>Torna alla Home</a>
        </div>
    </div>
</div>   
@endif

<div class="container">
    <div class="row justify-content-around">
    @foreach ($announcements as $announcement)
            <div class="card text-center col-12 col-md-4 my-5 mx-5">
                <div class="card-header">
                    {{$announcement->category->name}}
                </div>
                <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-text">{{$announcement->user->name}}</p>
                        <p class="card-text">{{$announcement->description}}</p>
                        @foreach($announcement->images as $image)
                        @if ($loop -> first)
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <img width="100%" height="100%" 
                                        src="{{$image->getUrl(400, 300)}}" alt="">
                                    </div>
                                </div>
                        @endif        
                    @endforeach
                        <p class="card-text">{{$announcement->price}}$</p>
                        <a href="{{route('show',compact('announcement'))}}" class="text-white btn main-bg-color ">Dettaglio</a>
                </div>
                <div class="card-footer text-muted">
                    {{$announcement->created_at->format('d/m/Y')}}
                </div>
            </div>
    @endforeach
    </div>
</div>    

</x-layout>