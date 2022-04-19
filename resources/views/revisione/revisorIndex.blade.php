<x-layout>
<div class='min-vh-100'>
@if($announcement)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{__('ui.annuncio')}} #{{$announcement->id}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <h3>{{__('ui.utente')}}</h3>
                            </div>
                            <div class="col-md-10">
                                # {{$announcement->user->id}},
                                {{$announcement->user->name}},
                                {{$announcement->user->email}},
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h3>{{__('ui.titolo')}}</h3>
                            </div>
                            <div class="col-md-10">
                                {{$announcement->title}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h3>{{__('ui.descrizione')}}</h3>
                            </div>
                            <div class="col-md-10">
                                {{$announcement->description}}
                            </div>
                        </div> 
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <h3>{{__('ui.immagini')}}</h3>
                            </div>
                            <div class="col-md-10">
                            @foreach($announcement->images as $image)
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <img
                                        src="{{$image->getUrl(300, 150)}}" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        Id immagine: {{$image->id}}
                                        <br>
                                        Adult: {{$image->adult}}
                                        <br>
                                        Violence: {{$image->violence}}
                                        <br>
                                        Racy: {{$image->racy}}
                                        <br>
                                        Spoof: {{$image->spoof}}
                                        <br>
                                        Medical: {{$image->medical}}
                                        <br>
                                        <b>Labels:</b><br>              
                                        <ul>
                                        @if($image->labels)
                                        @foreach($image->labels as $label)
                                            <li>{{$label}}</li>
                                        @endforeach
                                        @endif
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-md-6 d-flex justify-content-center">
            <form action="{{route('reject', $announcement->id)}}" method='POST'>
                @csrf
                <button type='submit' class="btn btn-danger">{{__('ui.rifiuta')}}</button>
            </form>
        </div>
        <div class="col-md-6 d-flex justify-content-center text-right">
            <form action="{{route('accept', $announcement->id)}}" method='POST'>
                @csrf
                <button type='submit' class="btn btn-success">{{__('ui.accetta')}}</button>
            </form>
        </div>
    </div>
@else
<div class="container">
    <div class="row min-vh-100 align-items-center pb-5 justify-content-center">
        <div class="col-md-6 d-flex flex-column align-items-center pb-5">
            <h3 class='text-center my-5'>{{__('ui.revisioneFinita')}}</h3>
            <a class='btn text-white main-bg-color my-3 ' href="{{route('welcome')}}">{{__('ui.tornaHome')}}</a>
        </div>
    </div>
</div>
@endif
</div>
</x-layout>