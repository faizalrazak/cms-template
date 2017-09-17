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

      <div class="modal modal-info fade" id="add-news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" >Add News</h4>

          </div>
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-news-create">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="article_date" class="col-sm-3 control-label">Article date:</label>
                          <div class="col-sm-9">
                          <input type="date" class="form-control" name="article_date" id="article_date">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="article_title" class="col-sm-3 control-label">Title:</label>
                          <div class="col-sm-9">
                          <input type="" class="form-control" name="article_title" id="article_title">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="source" class="col-sm-3 control-label">Source:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="source" id="source">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="comment" class="col-sm-3 control-label">comment:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="comment" id="comment">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="like" class="col-sm-3 control-label">Like:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="like" id="like">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="header_image" class="col-sm-3 control-label">Header Image:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="header_image" id="header_image">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inline_image" class="col-sm-3 control-label">Inline Image:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="inline_image" id="inline_image">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="author" class="col-sm-3 control-label">Author:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="author" id="author">
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
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add-news">Add Service</button></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-controls">

                      </div>
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info bg-blue">
                            <th><input type="checkbox"></th>
                            <th class="mailbox-star"><a href="#">Article Id</a></th>
                            <th class="mailbox-star"><a href="#">Article Date</a></th>
                            <th class="mailbox-star"><a href="#">Title</a></th>
                            <th class="mailbox-star"><a href="#">Source</a></th>
                            <th class="mailbox-star"><a href="#">Comment</a></th>
                            <th class="mailbox-star"><a href="#">Like</a></th>
                            <th class="mailbox-star"><a href="#">Header Image</a></th>
                            <th class="mailbox-star"><a href="#">Inline Image</a></th>
                            <th class="mailbox-name"><a href="#">Author</a></th>
                            <th class="mailbox-name"><a href="#">Operation</a></th>
                          </tr>
                         
                          @foreach($news as $news)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">{{$news->article_id}}</a></td>
                            <td class="mailbox-star"><a href="#">{{$news->article_date}}</a></td>
                            <td class="mailbox-star"><a href="#">{{$news->article_title}}</a></td>
                            <td class="mailbox-star"><a href="#">{{$news->source}}</a></td>
                            <td class="mailbox-star"><a href="#">{{$news->comment}}</a></td>
                            <td class="mailbox-star"><a href="#">{{$news->like}}</a></td>
                            <td class="mailbox-star"><a href="#">{{$news->header_image}}</a></td>
                            <td class="mailbox-star"><a href="#">{{$news->inline_image}}</a></td>
                            <td class="mailbox-star"><a href="#">{{$news->author}}</a></td>
                            <td class="mailbox-name"><div class="btn-group"><a class="button btn btn-default btn-sm" href="{{route('editNews', ['article_id'=> $news->article_id])}}"><i class="fa fa-gear"></i>Edit</a></td>
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

$('#frm-news-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('createNews')}}", data, function(response){
    console.log(response);
    $("[data-dismiss = modal]").trigger({type: "click"});

</script>
@endsection