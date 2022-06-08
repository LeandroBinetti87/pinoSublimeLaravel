@extends('layouts.app')

@section('title','Login')

@section('content')
<div>
  <h1>Login</h1>
  <form class="mt-4" method="POST" action="{{route('login.store')}}">
    @csrf

    <input type="email" placeholder="Email" id="email" name="email">

    <input type="password" placeholder="Password" id="password" name="password">

    @error('message')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <button type="submit">Send</button>
  </form>
</div>
@endsection