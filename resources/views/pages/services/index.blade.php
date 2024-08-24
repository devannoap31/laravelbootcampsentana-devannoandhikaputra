@extends('layoutvano.master')
@section('title', 'Services')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3">
            <h1>This is a Services</h1>
            <a href="/services/create" class="btn btn-primary mb-3">Create</a>
            <table class="table table-bordered table-striped table-hover">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Name</th>
                     <th>Price</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td>Laravel</td>
                     <td>Rp. 100.000</td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>Vue</td>
                     <td>Rp. 50.000</td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>React</td>
                     <td>Rp. 75.000</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
