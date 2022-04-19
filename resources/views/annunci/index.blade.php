<x-layout>

@if ($message = Session::get('success'))
<div class="container">
    <div class="row">
        <div class="alert alert-success alert-block">    
            <strong>{{ __('ui.annuncioRevisione') }}</strong>
        </div>   
    </div>
</div>
@endif

@if(count($announcements) == 0)
<div class="container">
    <div class="row justify-content-center pt-5 vh-100">
        <div class="col-md-6 d-flex flex-column align-items-center">
            <p class="text-center fs-4 pt-5">Nessun elemento trovato</p>
            <div class="col-12 col-md-4 mt-5 d-flex justify-content-center">
                <div class="dropdown">
                    <button class="btn text-white main-bg-color dropdown-toggle" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                        {{__('ui.annunciCategoria')}}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        @foreach($categories as $category)
                        <li>
                            <button class="dropdown-item" type="button">
                                <a href="{{route('filterByCategory', [$category->name, $category->id])}}">
                                    {{$category->name}}
                                </a>
                            </button>
                        </li>
                        @endforeach
                        <hr>
                        <li>
                            <a href="{{route('index')}}">
                                Tutti gli annunci
                            </a>
                        </li>
                    </ul>
               </div>
            </div>
            </div>
        </div>
    </div>
</div>   
@endif

 </div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 p-5 mt-5 d-flex justify-content-center ">
            <div class="col-12 col-md-4 mt-5">
                <div class="dropdown ps-5">
                    <button class="btn text-white main-bg-color dropdown-toggle" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
                        {{__('ui.annunciCategoria')}}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        @foreach($categories as $category)
                        <li>
                            <button class="dropdown-item" type="button">
                                <a href="{{route('filterByCategory', [$category->name, $category->id])}}">
                                    {{$category->name}}
                                </a>
                            </button>
                        </li>
                        @endforeach
                        <hr>
                        <li>
                            <a href="{{route('index')}}">
                                Tutti gli annunci
                            </a>
                        </li>
                    </ul>
               </div>
            </div>
            </div>
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
                        <a href="{{route('show',compact('announcement'))}}" class="text-white btn main-bg-color ">{{__('ui.dettaglio')}}</a>
                </div>
                <div class="card-footer text-muted">
                    {{$announcement->created_at->format('d/m/Y')}}
                </div>
            </div>
            @endforeach


       
            
            {{$announcements->links()}}
        </div>
    </div>
</x-layout>