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
        <li class="active">Campaign</li>
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
                  <form action="#" method="POST" id="frm-campaign-edit">
                  {!! csrf_field() !!}
                    <div class="row">

                        <div class="form-group">
                          <label for="campaign_image" class="col-sm-3 control-label">Image: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="campaign_image" id="campaign_image" value="{{$campaign->campaign_image}}">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="description" class="col-sm-3 control-label">Description: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="description" id="description" value="{{$campaign->description}}">
                          </div>
                        </div>

                       <div class="form-group">
                          <label for="campaign_date" class="col-sm-3 control-label">Campaign Date: </label>
                          <div class="col-sm-9">
                          <input type="date" class="form-control" name="campaign_date" id="campaign_date" value="{{$campaign->campaign_date}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="organiser" class="col-sm-3 control-label">Organiser: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="organiser" id="organiser" value="{{$campaign->organiser}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="location" class="col-sm-3 control-label">Location: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="location" id="location" value="{{$campaign->location}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fund_amount" class="col-sm-3 control-label">Fund Amount: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="fund_amount" id="fund_amount" value="{{$campaign->fund_amount}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="like" class="col-sm-3 control-label">Like: </label>
                          <div class="col-sm-9">
                          <input type="number" class="form-control" name="like" id="like" value="{{$campaign->like}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="comment" class="col-sm-3 control-label">Comment: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="comment" id="comment" value="{{$campaign->comment}}">
                          </div>
                        </div>
                        
                    </div>

                  </div>

                  </div>
                    <input type="hidden" name="campaign_id" value="{{$campaign->campaign_id}}">
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
$('#frm-campaign-edit').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('updateCampaign')}}", data, function(response){
    console.log(response);
  });
});
</script>
@endsection