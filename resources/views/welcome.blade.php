@extends('layouts.master')

@section('title')
    Bromedia!
@endsection

@section('content')
   <div class="row">
       <div class="col-md-6">
           <h3>Sign Up</h3>
           <form action="#" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
               <div class="form-group">
                   <label for="password">Password:</label>
                   <input type="password" class="form-control" name="email" id="password">
               </div>
               <button type="submit" class="btn btn-primary ">Submit</button>
           </form>
       </div>
       <div class="col-md-6">
           <h3>Sign In</h3>
           <form action="#" method="post">
               <div class="form-group">
                   <label for="email">Email:</label>
                   <input type="text" class="form-control" name="email" id="email">
               </div>
               <div class="form-group">
                   <label for="password">Password:</label>
                   <input type="password" class="form-control" name="email" id="password">
               </div>
               <button type="submit" class="btn btn-primary ">Submit</button>
           </form>
       </div>
   </div>
@endsection