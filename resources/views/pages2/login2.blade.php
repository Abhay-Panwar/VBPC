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
}
</style>
@endpush
@section('NICE')

@if(session()->has('success'))
    <p>
        {{ session()->get('success') }}
    </p>
@endif
@if(session()->has('error'))
    <p>
        {{ session()->get('error') }}
    </p>
@endif

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

   <div class="sign-contain">
   <form action="{{route('login3')}}" method="post">
   @csrf
   <div class="form-group">
    <label for="User1">Username</label>
    <input type="text" class="form-control" id="user" name="user" value="" aria-describedby="userHelp" placeholder="Enter Username">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
@endsection
