<x-layout>

    <h1 class="pt-5 my-5 text-center">Login</h1>

<div class="pt-3 container my-5 min-vh-100">
    <div class="row justify-content-center">
        <div class='col-8'>
<form  method='POST' action="{{route('login')}}">
    @csrf
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form1Example1" class="form-control" name='email' />
    <label class="form-label" for="form1Example1">Indirizzo Mail</label>
  </div>
  
  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form1Example2" class="form-control" name='password' />
    <label class="form-label" for="form1Example2">Password</label>
  </div>
  
  <!-- Submit button -->
  <button type="submit" class="btn main-bg-color text-white btn-block">Accedi</button>
</form>
        </div>
    </div>
</div>
</x-layout>