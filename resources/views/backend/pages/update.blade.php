@extends('backend.layouts.layout')
@section('addpost')
<div class="container-fluid">

          <!-- Breadcrumbs-->
          
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
             Update Form</div>
            <div class="card-body">
              <form class="form-horizontal" method="post" action="{{url('/hot',$allpost->id)}}">
                {{ csrf_field() }}
                <field>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" value="{{$allpost->name}}">
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="inputAddress">address</label>
                  <input name="address" class="form-control" value="{{$allpost->address}}"></input>
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>

                <field>
              </form>
            </div>            
          </div>      

        </div>
@endsection