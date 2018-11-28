@extends('backend.layouts.layout')
@section('addpost')
<div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Description</li>
          </ol>

          <div class="alert-success"> {{-- Alert Success After Adding Category --}}
            <?php
              $message = Session::get('message');
              if ($message)
                echo $message;
                Session::put('message',null)
            ?>        
          </div><!-- /alert-success -->

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Form</div>
            <div class="card-body">
              <form class="form-horizontal" method="post" action="{{url('save-post')}}">
                {{ csrf_field() }}
                <field>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name Here">
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="inputAddress">address</label>
                  <textarea name="address" class="form-control" cols="30" rows="10"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Add</button>

                <field>
              </form>
            </div>            
          </div>      

        </div>
@endsection