@extends('layout.master')
@section('style')
@endsection
@section('content')

    <section class="content-header">
      <h1>
        User
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

     <section class="content">
      <div class="col-md-12">
        <!-- Custom Tabs (Pulled to the right) -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs ">
            <li class="active"><a href="#tab_1" data-toggle="tab">Active</a></li>
            
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                  <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->

                  <form action="#" method="POST" id="frm-user-edit">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="name" class="col-sm-3 control-label">Name: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="first_name" class="col-sm-3 control-label">First Name: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="first_name" id="first_name" value="{{$user->first_name}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="col-sm-3 control-label">Last Name: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="last_name" id="last_name" value="{{$user->last_name}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="locale" class="col-sm-3 control-label">Locale: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="locale" id="locale" value="{{$user->locale}}">
                          </div>
                        </div>
                        <div class="form-group"> 
                          <label for="email" class="col-sm-3 control-label">Email: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="phone_number" class="col-sm-3 control-label">Phone Number: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{$user->phone_number}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="address" class="col-sm-3 control-label">Address: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="address" id="address" value="{{$user->address}}">
                          </div>
                        </div> 
                        <div class="form-group">
                          <label for="birthdate" class="col-sm-3 control-label">Birth Date: </label>
                          <div class="col-sm-9">
                          <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{$user->birthdate}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="gender" class="col-sm-3 control-label">Gender: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="gender" id="gender" value="{{$user->gender}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="race" class="col-sm-3 control-label">Race: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="race" id="race" value="{{$user->race}}">
                          </div>
                        </div>
                        
                        
                    </div>

                  </div>
                    <input type="hidden" name="user_id" value="{{$user->user_id}}">
                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save Change</button>
                    </form>
                    </div>
                       
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.tab-pane -->
            
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
      </div>
      <!-- Main content -->
    </section>
@endsection

@section('script')
<script>
$('#frm-user-edit').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('updateUser')}}", data, function(response){
    console.log(response);
  });
});
</script>
@endsection