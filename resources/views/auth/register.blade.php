<x-layout>

    @if ($errors->any())           
        <div class="alert alert-danger my-5 mx-5">               
            <ul>                   
                @foreach ($errors->all() as $error)                       
                <li>{{ $error }}</li>                   
                @endforeach               
            </ul>           
        </div>       
    @endif

    <h1 class="my-5 text-center pt-5">Registrati</h1>
    
<div class="container my-5 min-vh-100">
    <div class="row justify-content-center">
        <div class='col-8'>
<form  method='POST' action="{{route('register')}}">
    @csrf
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form1Example1" class="form-control" name='email' />
    <label class="form-label" for="form1Example1">Indirizzo Mail</label>
  </div>
  <!-- name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form1Example1" class="form-control" name='name' />
    <label class="form-label" for="form1Example1">Nome utente</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form1Example2" class="form-control" name='password'/>
    <label class="form-label" for="form1Example2">Password</label>
  </div>
  <!-- Password confirm -->
  <div class="form-outline mb-4">
    <input type="password" id="form1Example2" class="form-control" name='password_confirmation'/>
    <label class="form-label" for="form1Example2">Password</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn main-bg-color text-white btn-block">Registrati</button>
</form>
        </div>
    </div>
</div>
</x-layout>