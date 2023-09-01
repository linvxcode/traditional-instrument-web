<!-- <link rel="stylesheet" href="style.css"> -->

@extends('layouts.main')
@section('all')

<div class="mb-20"></div>
<div class="">
<title> {{ $title }} </title>



@if (session()->has('succes'))
<div class="alert alert-success shadow-lg w-[50%] mx-auto">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>{{session('succes')}}</span>
  </div>
</div>
@endif

@if (session()->has('error'))
<div class="alert alert-error shadow-lg w-[50%] mx-auto">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <span>{{session('error')}}</span>
  </div> 
</div>
@endif

<div class="hero mt-5">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl ">
      <div class="card-body">

        <form action="/login" method="post">
          @csrf
        <div class="form-control">
          <label class="label">
            <span class="label-text text-base-100">Email</span>
          </label>
          <input type="email" value="{{old('email')}}" name="email" id="email" placeholder="name@example.com" class="input input-bordered" @error('email')
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
            <span class="label-text text-base-100">Password</span>
          </label>
          <input type="password" name="password" id="password" placeholder="password" class="input input-bordered" @error('password')is-invalid
              
          @enderror required/>
          @error('password')
          <span style="color:red;" class="flex text-red-800 items-center font-medium tracking-wide text-xs mt-1 ml-1">
            {{$message}}
          </span>   
          @enderror

          <label class="label">
            <a href="/register" class="label-text-alt link link-hover text-base-100">Register</a>
          </label>
        </div>
        <div class="form-control mt-6">
          <button type="submit" class="btn btn-primary">Login</button>
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






