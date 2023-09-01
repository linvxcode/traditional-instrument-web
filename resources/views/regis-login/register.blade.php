<!-- <link rel="stylesheet" href="style.css"> -->

@extends('layouts.main')
@section('all')

<div class="mb-20"></div>
<div class="">
<title> {{ $title }} </title>

<div class="hero mt-5">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl ">
      <div class="card-body">

        <form action="/register" method="post">
          @csrf

        <div class="form-control">
          <label class="label">
            <span class="label-text text-base-100">Email</span>
          </label>
          <input type="email" value="{{ old('email') }}" name="email" id="email" placeholder="name@exaple.com" class="input input-bordered" @error('email')
              is-invalid
          @enderror required/>
        </div>
        @error('email')
        <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
          {{$message}}
        </span>
            
        @enderror

        <div class="form-control">
          <label class="label">
            <span class="label-text text-base-100">Username</span>
          </label>
          <input type="text" name="username" value="{{ old('username') }}" id="username" placeholder="username" class="input input-bordered"required @error('username')is-invalid
              
          @enderror/>
        </div>
        @error('username')
        <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
          {{$message}}
        </span>   
        @enderror

        <div class="form-control">
          <label class="label">
            <span class="label-text text-base-100">Name</span>
          </label>
          <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="name" class="input input-bordered" @error('name')is-invalid
              
          @enderror required/>
        </div>
        @error('name')
        <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
          {{$message}}
        </span>
        @enderror

        <div class="form-control">
          <label class="label">
            <span class="label-text text-base-100">Password</span>
          </label>
          <input type="password"  name="password" id="password" placeholder="password" class="input input-bordered" @error('password')is-invalid
              
          @enderror required/>
          @error('password')
          <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
            {{$message}}
          </span>
          @enderror
  
          <label class="label">
            <a href="login" class="label-text-alt link link-hover text-base-100">login</a>
          </label>
        </div>
        <div class="form-control mt-6">
          <button id="submit" type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>


{{-- <div class="fr flex justify-center justify-items-center" id="login-page">
<div class="login-box">
  <h2 class="text-2xl">LOGIN</h2>

  <form>
    <div class="user-box">
      <input type="" name="email" required="">
      <label>Email</label>
    </div>

    <div class="user-box ">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>

    <a href="home" class="buttnclik">
      Login
    </a>
  </form>
  <a id="register-link" class="cursor-pointer">Don't have an account? Register here.</a>
</div>
</div>

<div class="fr hidden justify-center justify-items-center" id="register-page">
<div class="login-box">
  <h2 class="text-2xl">REGISTER</h2>

  <form>
    <div class="user-box">
      <input type="" name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="" name="" id="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box ">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <a  class="button-register " id="bton">
      Submit
    </a>

  </form>
  <a id="login-link" class="flex cursor-pointer justify-center justify-items-center">Already have an account? Login here.</a>
</div>
</div> --}}

</div>




<script>
// JavaScript to handle the slide transition
// const loginLink = document.getElementById('login-link');
// const registerLink = document.getElementById('register-link');
// const btonLink = document.getElementById('bton');
// const loginPage = document.getElementById('login-page');
// const registerPage = document.getElementById('register-page');


// registerLink.addEventListener('click', () => {
//   loginPage.style.display = 'none';
//   registerPage.style.display = 'flex';
//   btonLink.style.justifyContent = "center";
//   btonLink.style.display = "flex";
// });

// loginLink.addEventListener('click', () => {
//   registerPage.style.display = 'none';
//   loginPage.style.display = 'flex';
//   loginPage.style.justifyContent = "center";
//   registerPage.style.justifyContent = "center";

// });

</script>
{{-- 
<script>
  // Get a reference to the form element
  var form = document.querySelector('form');

  // Attach a submit event to the form
  form.addEventListener('submit', function(event) {
    // Get the values of the username and password fields
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Validate the username and password
    if (username === '' || password === '') {
      alert('Please enter a valid username and password');
      event.preventDefault();
    } else {
      // Create the user account
      // Code to create the user account goes here

      // Redirect the user to the login page
      window.location.href = 'login.html';
    }
  });
</script> --}}


@endsection






