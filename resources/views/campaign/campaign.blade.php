@extends('layout.master')
@section('style')
@endsection
@section('content')

<section class="content-header">
      <h1>
        Campaign
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Campaign</li>
      </ol>
    </section>

      <div class="modal modal-info fade" id="add-campaign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Campaign</h4>

          </div>
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-campaign-create">
                  {!! csrf_field() !!}
                    <div class="row">

                        <div class="form-group">
                          <label for="campaign_image" class="col-sm-3 control-label">Image: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="campaign_image" id="campaign_image">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="description" class="col-sm-3 control-label">Description: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="description" id="description">
                          </div>
                        </div>

                       <div class="form-group">
                          <label for="campaign_date" class="col-sm-3 control-label">Campaign Date: </label>
                          <div class="col-sm-9">
                          <input type="date" class="form-control" name="campaign_date" id="campaign_date">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="organiser" class="col-sm-3 control-label">Organiser: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="organiser" id="organiser">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="location" class="col-sm-3 control-label">Location: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="location" id="location">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fund_amount" class="col-sm-3 control-label">Fund Amount: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="fund_amount" id="fund_amount">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="like" class="col-sm-3 control-label">Like: </label>
                          <div class="col-sm-9">
                          <input type="number" class="form-control" name="like" id="like">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="comment" class="col-sm-3 control-label">Comment: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="comment" id="comment">
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
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-campaign">Add Campaign</button></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-controls">

                      </div>
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" id="delivery-table">
                          <tbody>


                          <tr class="info bg-blue">
                            <th><input type="checkbox"></th>
                            <th class="mailbox-star"><a href="#">Campaign Id</a></th>
                            <th class="mailbox-star"><a href="#">Image</a></th>
                            <th class="mailbox-star"><a href="#">Description</a></th>
                            <th class="mailbox-star"><a href="#">Campaign Date</a></th>
                            <th class="mailbox-name"><a href="#">Organiser</a></th>
                            <th class="mailbox-subject"><a href="#">Location</a></th>
                            <th class="mailbox-star"><a href="#">Fund Amount</a></th>
                            <th class="mailbox-star"><a href="#">Like</a></th>
                            <th class="mailbox-star"><a href="#">Comment</a></th>
                            <th class="mailbox-name"><a href="#">Operation</a></th>
                          </tr>
                         
                          @foreach($campaign as $campaign)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">{{$campaign->campaign_id}}</a></td>
                            <td class="mailbox-star"><a href="#">{{$campaign->campaign_image}}</a></td>
                            <td class="mailbox-name"><a href="#">{{$campaign->description}}</a></td>
                            <td class="mailbox-name"><a href="#">{{$campaign->campaign_date}}</a></td>
                            <td class="mailbox-time"><a href="#">{{$campaign->organiser}}</a></td>
                            <td class="mailbox-date"><a href="#">{{$campaign->location}}</a></td>
                            <td class="mailbox-date"><a href="#">{{$campaign->fund_amount}}</a></td>
                            <td class="mailbox-date"><a href="#">{{$campaign->like}}</a></td>
                            <td class="mailbox-date"><a href="#">{{$campaign->comment}}</a></td>
                            <td class="mailbox-name"><div class="btn-group"><a class="button btn btn-default btn-sm" href="{{route('editCampaign', ['campaign_id'=> $campaign->campaign_id])}}"><i class="fa fa-gear"></i>Edit</a></td>
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

$('#frm-campaign-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('createCampaign')}}", data, function(response){
    console.log(response);
     $("[data-dismiss = modal]").trigger({type: "click"});
    
  });
});

</script>
@endsection