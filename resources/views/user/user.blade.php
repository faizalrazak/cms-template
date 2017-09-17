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

    <!-- Modal -->
    <div class="modal modal-info fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" >Add User</h4>

          </div>
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->

                  <form action="#" method="POST" id="frm-user-create">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="name" class="col-sm-3 control-label">Name: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" id="name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="first_name" class="col-sm-3 control-label">First Name: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="first_name" id="first_name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="col-sm-3 control-label">Last Name: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="last_name" id="last_name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="locale" class="col-sm-3 control-label">Locale: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="locale" id="locale">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="email" class="col-sm-3 control-label">Email: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="email" id="email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="phone_number" class="col-sm-3 control-label">Phone Number: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="phone_number" id="phone_number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="address" class="col-sm-3 control-label">Address: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="address" id="address">
                          </div>
                        </div> 
                        <div class="form-group">
                          <label for="birthdate" class="col-sm-3 control-label">Birth Date: </label>
                          <div class="col-sm-9">
                          <input type="date" class="form-control" name="birthdate" id="birthdate">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="gender" class="col-sm-3 control-label">Gender: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="gender" id="gender">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="race" class="col-sm-3 control-label">Race: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="race" id="race">
                          </div>
                        </div>
                        
                        
                    </div>

                  </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>

     <section class="content">
      <div class="col-md-12">
        <!-- Custom Tabs (Pulled to the right) -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs ">
            <li class="active"><a href="#tab_1" data-toggle="tab">Active</a></li>
            <li class="pull-right"> 
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-user">Add User</button></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-controls">

                      </div>
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" id="customer-table">
                          <tbody>
                          <tr class="info bg-blue">
                            <th><input type="checkbox"></th>
                            <th class="mailbox-star"><a href="#">Id</a></th>
                            <th class="mailbox-name"><a href="#">Name</a></th>
                            <th class="mailbox-name"><a href="#">First Name</a></th>
                            <th class="mailbox-name"><a href="#">Last Name</a></th>
                            <th class="mailbox-name"><a href="#">Locale</a></th>
                            <th class="mailbox-name"><a href="#">Email</a></th>
                            <th class="mailbox-name"><a href="#">Phone Number</a></th>
                            <th class="mailbox-name"><a href="#">Address</a></th>
                            <th class="mailbox-date"><a href="#">Birth Date</a></th>
                            <th class="mailbox-name"><a href="#">Gender</a></th>
                            <th class="mailbox-name"><a href="#">Race</a></th>
                            <th class="mailbox-name"><a href="#">Operation</a></th>
                          </tr>
                         
                         
                         @foreach($user as $user)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">{{$user->user_id}}</a></td>
                            <td class="mailbox-name"><a href="#">{{$user->name}}</a></td>
                            <td class="mailbox-name"><a href="#">{{$user->first_name}}</a></td>
                            <td class="mailbox-name"><a href="#">{{$user->last_name}}</a></td>
                            <td class="mailbox-date"><a href="#">{{$user->locale}}</a></td>
                            <td class="mailbox-star"><a href="#">{{$user->email}}</a></td>
                            <td class="mailbox-name"><a href="#">{{$user->phone_number}}</a></td>
                            <td class="mailbox-name"><a href="#">{{$user->address}}</a></td>
                            <td class="mailbox-name"><a href="#">{{$user->birthdate}}</a></td>
                            <td class="mailbox-date"><a href="#">{{$user->gender}}</a></td>
                            <td class="mailbox-name"><a href="#">{{$user->race}}</a></td>
                            <td class="mailbox-name"><div class="btn-group"><a class="button btn btn-default btn-sm" href="{{route('editUser', ['user_id'=> $user->user_id])}}"><i class="fa fa-gear"></i>Edit</a></td>
                          </tr>
                         @endforeach
                          </tbody>

                        </table>
                        <!-- /.table -->
                      </div>
                      <!-- /.mail-box-messages -->
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

$('#frm-user-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('createUser')}}", data, function(response){
    console.log(response);
     $("[data-dismiss = modal]").trigger({type: "click"});
  });
});

</script>
@endsection