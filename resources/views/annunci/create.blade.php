<x-layout>

@if ($errors->any())           
<div class="alert alert-danger">               
  <ul>                   
    @foreach ($errors->all() as $error)                       
    <li>{{ $error }}</li>                   
    @endforeach               
  </ul>           
</div>       
@endif

<div class="container-fluid pt-3 pb-5">
        <div class="d-flex justify-content-center">
          <form method="POST" action='{{route("store")}}' class="my-form-card rounded ">
          @csrf
            <h1 class="text-center">
            {{__('ui.inserisciAnnuncio')}}
            </h1>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">{{__('ui.inserisciTitolo')}}</label>
              <input value="{{old('title')}}" type="text" class="form-control"aria-describedby="emailHelp" name="title">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">{{__('ui.inserisciPrezzo')}}</label>
              <input value="{{old('price')}}" type="text" class="form-control" aria-describedby="emailHelp" name="price">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">{{__('ui.descrizione')}}</label>
              <textarea type="text" class="form-control" aria-describedby="emailHelp" name="description">{{old('description')}}
              </textarea>
            </div>
            <div class="mb-4">
                <label class="form-label"  for='categories'>{{__('ui.categoria')}}</label>
                <select class='form-control' name="category" id="categories">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">
                        {{$category->name}}
                        </option>
                        @endforeach
                </select>
            </div>
            <div class="mb-4">
                <input value="{{$uniqueSecret}}" type="hidden" class="form-control" name='uniqueSecret'>
                <div class='form-group row'>
                  <label for="images"></label>
                  <div class='dropzone' id='drophere'></div>
                </div>
            </div>
            <button type="submit" class="btn text-white main-bg-color text-dark">{{__('ui.inserisci')}}</button>      
          </form>
      </div>
</div>



</x-layout>