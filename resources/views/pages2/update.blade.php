@extends('layouts.default')
@push('style')
<style>
.sign-contain{
  width: 35%;
  height: 400ph;
  margin: auto;
  justify-content: center;
  align-items: center;
  border: 2px green solid;
  border-radius: 5%;
}
</style>
@endpush

@section('NICE')
<div class="sign-contain">
  @if(session()->has('success'))
   <p>
       {{ session()->get('success') }}
   </p>
  @endif
  
  @if ($errors->any())
   <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
   </ul>
  @endif
  <form action="{{ route('update') }}" method="post">
   @csrf  
   <input type="hidden" name="id" value="{{$signup->id}}">
  <div class="form-group">
    <label for="Email1">Email address</label>
    <input type="email" name="email" class="form-control" value="{{ $signup->email }}" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="User1">Username</label>
    <input type="text" name="user" class="form-control" value="{{ $signup->user }}" id="user" aria-describedby="userHelp" placeholder="Enter Username">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <button class="btn btn-primary" >Update</button>
</form>
   </div>
   @endsection