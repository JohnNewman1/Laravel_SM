@extends('layouts.master')

@section('content')
    @include('includes.errors')
    <section class="row new-post">
        <div class="col-md-6 offset-md-3">
            <header>
                <h3>What do you have to say?</h3>
            </header>
            <form action="{{ route('post.create') }}" method="post">
                <div class="form-group">
                    <textarea name="body" id="new-post" class="form-control" rows="5">

                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 offset-md-3">
            <header><h3>What Others say....</h3></header>
            <article class="post">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda, beatae commodi ea ex hic in
                laudantium libero magnam modi omnis possimus ratione repellat repellendus soluta suscipit ullam! Aperiam, laborum!</p>
            <div class="info">Posted by John</div>
            <div class="interaction">
                <a href="#">Like</a> |
                <a href="#">Dislike</a> |
                <a href="#">Edit</a> |
                <a href="#">Delete</a>
            </div>
            </article
        </div>
    </section>
@endsection