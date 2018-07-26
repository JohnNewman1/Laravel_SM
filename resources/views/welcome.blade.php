@extends('layouts.master')

@section('title')
    Bromedia!
@endsection

@section('content')
    @include('includes.errors')
   <div class="row">
       <div class="col-md-6">
           <h3>Sign Up</h3>
           <form action="{{ route('signup') }}" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
               <div class="form-group">
                   <label for="password">Password:</label>
                   <input type="password" class="form-control" name="password" id="password">
               </div>
               <button type="submit" class="btn btn-primary ">Submit</button>
               <input type="hidden" name="_token" value="{{ Session::token() }}">
           </form>
       </div>
       <div class="col-md-6">
           <h3>Sign In</h3>
           <form action="{{ route('signin') }}" method="post">
               <div class="form-group">
                   <label for="email">Email:</label>
                   <input type="text" class="form-control" name="email" id="email" value="{{ Request::old('email') }}">
               </div>
               <div class="form-group">
                   <label for="password">Password:</label>
                   <input type="password" class="form-control" name="password" id="password">
               </div>
               <button type="submit" class="btn btn-primary ">Submit</button>
               <input type="hidden" name="_token" value="{{ Session::token() }}">
           </form>
       </div>
   </div>
@endsection