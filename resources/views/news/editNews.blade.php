@extends('layout.master')
@section('style')
@endsection
@section('content')

    <section class="content-header">
      <h1>
        News
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">News</li>
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
                  <form action="#" method="POST" id="frm-news-edit">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="article_date" class="col-sm-3 control-label">Article date:</label>
                          <div class="col-sm-9">
                          <input type="date" class="form-control" name="article_date" id="article_date" value="{{$news->article_date}}">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="article_title" class="col-sm-3 control-label">Title:</label>
                          <div class="col-sm-9">
                          <input type="" class="form-control" name="article_title" id="article_title" value="{{$news->article_title}}">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="source" class="col-sm-3 control-label">Source:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="source" id="source" value="{{$news->source}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="comment" class="col-sm-3 control-label">comment:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="comment" id="comment" value="{{$news->comment}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="like" class="col-sm-3 control-label">Like:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="like" id="like" value="{{$news->like}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="header_image" class="col-sm-3 control-label">Header Image:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="header_image" id="header_image" value="{{$news->header_image}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inline_image" class="col-sm-3 control-label">Inline Image:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="inline_image" id="inline_image" value="{{$news->inline_image}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="author" class="col-sm-3 control-label">Author:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="author" id="author" value="{{$news->author}}">
                          </div>
                        </div>
                    </div>

                  </div>
                  </div>
                    <input type="hidden" name="article_id" value="{{$news->article_id}}">
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
$('#frm-news-edit').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('updateNews')}}", data, function(response){
    console.log(response);
  });
});
</script>
@endsection