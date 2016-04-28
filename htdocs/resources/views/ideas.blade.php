<!DOCTYPE html>
<html>
    <head>
        <title>IBM Digital Innovation Lab - Ideas</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <style>
        .subtitle {margin-bottom:0; margin-top: 0;}
        .title {margin-bottom:0; }
        body {
          font-family: Lato;
        }
        .small_div {
            height: 60px;
            overflow:hidden;
        }
        .big_div {
            height: auto;
        }
        .profile_margin {
          margin-top: 15%;
        }
        .no_profile_margin {
            margin-top: 0;
        }
        .vert_center {
            display: flex;
            align-items: center;
        }
        .header{
          background-color: #708FAB;
          padding-top:15px;
          padding-bottom:15px;
          margin-bottom: 20px;
        }
        .menu{
          position: absolute;
          top: 0;
          right: 0;
        }
        ul.nav a:hover { background-color: #708FAB !important; }

        @media only screen and (max-width : 992px) {
            .profile{
              margin-bottom: 15px;
            }
        }
        .img-responsive{width:100%;}
        </style>
    </head>
    <body>

      @if (Session::has('message'))
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{{ Session::get('message') }}
      </div>
      @endif

      <div class="container">
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id ="email-title">Submit Idea</h4>
              </div>
              <div class="modal-body">
                  {!! Form::open(array('action' => array('MainController@sendEmail'), 'method' => 'post', 'class' => 'form-horizontal','id' => 'submit-idea','role' => 'form')) !!}
                  <div class = "form-group">
                    <div class = "col-sm-12">
                      {!! Form::text('name', null, array('class' => 'form-control', 'id' => 'name', 'placeholder' => "Name", 'required')) !!}
                    </div>
                  </div>
                  <div class ="form-group">
                    <div class = "col-sm-12">
                      {!! Form::text('email', null, array('class' => 'form-control', 'id' => 'email', 'placeholder' => "Email", 'required')) !!}
                    </div>
                  </div>
                  <div class ="form-group">
                    <div class = "col-sm-12">
                      {!! Form::textarea('subject', null, array('class' => 'form-control', 'id' => 'detail','rows' => '4', 'placeholder' => "Subject", 'required')) !!}
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                {!! Form::submit('Submit', array('class' => 'btn btn-success')) !!}
                {!! Form::close() !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>


        <!-- Content -->
        <div class="row ">
          <div class="col-md-12 header">
              <img src="/img/ibm.png" class="img-responsive" style="width:5%" alt="IBM_logo" >
              <h2 style="margin:0;color:#FFFFFF">Digital Inn<img src="/img/watson_white.png" class="img-responsive" style="width:30px;display:inline-block" alt="IBM_logo" >vati<img src="/img/watson_white.png" class="img-responsive" style="width:30px;display:inline-block" alt="IBM_logo" >n Lab</h2>
              <h5 style="margin:0; color:#DDDEE0">Innovations that matter</h5>
              <div class="menu">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                          <a href="/" style="color:#DDDEE0">Projects</a>
                        </li>
                        <li>
                          <a href="/people" style="color:#DDDEE0">People</a>
                        </li>
                        <li>
                          <a href="/ideas" style="color:#DDDEE0">Ideas</a>
                        </li>
                    </ul>
                </div>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->

          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <h3 class="subtitle">Ideas</h3>
          </div>
          <div class="col-md-6"></div>
          <div class="col-md-2 text-center"><button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal" style="width:150px;text-align:left"><span class="glyphicon glyphicon-plus"></span> Submit Idea</button></div>

        </div>

        <hr>

        <div class="row item">
          <div class="col-md-4">
            <img src="/img/imageholder.png" class="img-responsive" alt="img" style="height:200px">
          </div>
            <div class="col-md-6">
            <h4 class="title">Idea Name</h4>

            <br>
            <div class="wrapper">
              <p>Brief Description </p>
            </div>

          </div>
          <div class="col-md-2 text-center">
            <p>Mr x, x@ca.ibm.com </p>
          </div>
        </div>

        <hr>

        <div class="row item">
          <div class="col-md-4">
            <img src="/img/imageholder.png" class="img-responsive" alt="img" style="height:200px">
          </div>
            <div class="col-md-6">
            <h4 class="title">Idea Name</h4>

            <br>
            <div class="wrapper">
              <p>Brief Description </p>
            </div>

          </div>
          <div class="col-md-2 text-center">
            <p>Mr x, x@ca.ibm.com </p>
          </div>
        </div>



      </div>
    </body>

    <script>
    $(document).ready(function(){

        // $( '.item' ).each(function( index ) {
        //     $(this).children("div").setAllToMaxHeight();
        //     // $('.item > div').setAllToMaxHeight();
        // });

    });
    </script>
</html>