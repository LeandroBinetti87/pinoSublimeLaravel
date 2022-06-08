@extends('layouts.app')

@section('title','Register')

@section('content')
<div>
  <h1>Register</h1>

  <form method="post" action="{{route('register.store')}}">
    @csrf

    <input type="text" placeholder="Name" id="name" name="name">
    @error('name')        
      <p>* {{ $message }}</p>
    @enderror

    <input type="email" placeholder="Email" id="email" name="email">

    @error('email')        
      <p>* {{ $message }}</p>
    @enderror

    <input type="password" placeholder="Password" id="password" name="password">

    @error('password')        
      <p class="">* {{ $message }}</p>
    @enderror

    <input type="password" placeholder="Password confirmation" id="password_confirmation" name="password_confirmation">

    <button type="submit">Send</button>
  </form>
</div>
@endsection