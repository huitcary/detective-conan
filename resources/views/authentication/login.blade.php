@extends('components.base')

@section('content')


    {{-- not working yet --}}
    @if(session('message'))
      <div class="container col-md-6 offset-md-3 mt-5 alert alert-success text-center">{{ session('message') }}</div>
    @endif
    @if(session('error'))
      <div class="container col-md-6 offset-md-3 mt-5 alert alert-danger text-center">{{ session('error') }}</div>
    @endif
    {{-- not working snippet ends here --}}
 
<div id="login-box" class="container col-md-4 offset-md-4 card mt-7 p-3">

    
    <h1 id="login-header" class="text-center mt-3">SIGN IN</h1>
  
    <form action="{{'/'}}" method="POST">
    {{csrf_field()}}
  
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" value="jlo@yahoo.com" >
      @error('email')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" value="client">
      @error('password')
        <p class="text-danger">{{ $message }}</p>
        
      @enderror
    </div>
    <div class="d-flex mt-5 mb-3">
      <div class="flex-grow-1">
        <a id="register-link" href="{{ '/register' }}" class="href text-white">Don't have an account?</a>
      </div>
      <button id="login-btn" class="btn px-5 bg-primary" type="submit">Log In <i class="fa-solid fa-right-to-bracket"></i></button>
    </div>
    </form>
  </div>
  


<style>

    #login-box{
        /* border: #FF4C29 2px solid; */
        border-radius: 10px;
        background-color: grey;
        margin-top: 7em;
        color: white;
    }
    #login-btn{
      background-color: #FF4C29;
      /* color: #082032; */
      color: white;
    }
    #register-link{
      color: #FF4C29;
      /* text-decoration: none; */
      font-weight: bold;
    }
   
</style>

@endsection
