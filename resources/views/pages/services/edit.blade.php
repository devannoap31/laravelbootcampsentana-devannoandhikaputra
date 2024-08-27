@extends('layoutvano.master')

@section('title')
CreateServices
@endsection

@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-6 offset-md-3">
         <h1>This is a Services</h1>
         <a href="/services" class="btn btn-warning mb-3">Back</a>
         <form action="/services/{{ $services->id }}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
               <label for="name" class="form-label">Name</label>
               <input type="text" class="form-control" id="name" value="{{ $services->name }}" name="name">
            </div>

            <div class="mb-3"></div>
               <label for="price" class="form-label">Price</label>
               <input type="text" class="form-control" id="price" value="{{ $services->price }}" name="price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
   </div>
</div>
@endsection