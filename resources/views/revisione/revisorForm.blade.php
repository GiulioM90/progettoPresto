<x-layout>


    
      <div class="container-fluid my-5">
        <div class="d-flex justify-content-center">
          <form method="POST" action='{{route("sentRevisorForm")}}' class="my-form-card rounded ">
          @csrf
            <h1 class="text-center">
            {{__('ui.diventaRevisore')}}
            </h1>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">{{__('ui.indirizzoMail')}}</label>
              <input type="email" class="form-control"aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">{{__('ui.nome')}}</label>
              <input type="text" class="form-control"aria-describedby="emailHelp" name="name">
            </div>
            <div class="mb-3">
              <p> {{__('ui.motivazioni')}}</p>
              <textarea name="message" id="" cols="50" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-warning text-dark">{{__('ui.invia')}}</button>
            
                            
                    
          </form>
      </div>
  
  
  
  </div>
  
  </x-layout>