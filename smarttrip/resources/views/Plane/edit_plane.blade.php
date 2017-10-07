<!DOCTYPE html>
<html>
  <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="Create page with Bootstrap">
    <meta name="description" content="Create page with Bootstrap">
    <meta name="keywords" content="Create page with Bootstrap">
    <title>Smart Trip</title>
    <!-- Le styles -->
    <!-- <link href="css/bootstrap-combined.min.css" rel="stylesheet"> -->
    <link href="../BootstrapPageGenerator-master/css/toolbox.css" rel="stylesheet">
    <link href="../BootstrapPageGenerator-master/css/editor.css" rel="stylesheet">
    <link href="../BootstrapPageGenerator-master/css/docs.min.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->

    
    <style>
        .container-fluid{
            *zoom:1;margin-left: 0px;
            margin-top: 10px;
            padding: 30px 15px 15px;
            border: 1px solid #DDDDDD;
            border-radius: 4px;
            position: relative;
            word-wrap: break-word;
        }
        body.devpreview {
            margin-top: 60px;
            margin-left:5px !important;
        }
         span.fa-6{
          font-size: 20em;
      }
      span.fa-5{
          font-size: 12em;
      }
      span.fa-4{
          font-size: 7em;
      }
      span.fa-3{
          font-size: 4em;
      }
      span.fa-2{
          font-size: 2em;
      }
  </style>
  </head>
  <body style="cursor: auto;" class="edit toolbox-reset">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-header" style="margin-right: 100px;">
        <a class="navbar-brand emphasized3" href="#">
          Smart Trip
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
        <ul class="nav navbar-nav">
          <li>
            <div class="btn-group" style="margin-right: 20px;">
              <button onclick="resizeCanvas('lg')" class="btn btn-default navbar-btn"><i class="fa fa-desktop"></i> </button>
              <button onclick="resizeCanvas('md')" class="btn btn-default navbar-btn"><i class="fa fa-laptop"></i> </button>
              <button onclick="resizeCanvas('sm')" class="btn btn-default navbar-btn"><i class="fa fa-tablet"></i> </button>
              <button onclick="resizeCanvas('xs')" class="btn btn-default navbar-btn"><i class="fa fa-mobile-phone"></i> </button>
            </div>
          </li>
          <li>
            <div class="btn-group" data-toggle="buttons-radio">
              <button id="edit" class="btn btn-default navbar-btn">
                <i class="fa fa-edit"></i> Edit
              </button>
              <button type="button" class="btn btn-default navbar-btn" id="devpreview">
                <i class="fa icon-eye-close" style="color: #333;"></i> Developer
              </button>
              <button type="button" class="btn btn-default navbar-btn" id="sourcepreview" >
                <i class="fa icon-eye-open" style="color: #333;"></i> Preview
              </button>
            </div>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <div class="btn-group">
              <button class="btn btn-default navbar-btn" href="#clear" id="clear" color="#333;">
                <i class="fa icon-trash" style="color: #333;"></i>Clear
              </button>
              <button type="button" class="btn btn-primary navbar-btn" data-target="#downloadModal" rel="/build/downloadModal" role="button" data-toggle="modal">
                <i class="fa icon-chevron-down" ></i>Download
              </button>
            </div>
          </li>
        </ul>
      </div>
    </nav>


    <div class="container-fluid">
      <div class="changeDimension">
        <div class="row-fluid">
          <div class="">
            <span></span>
            <div class="sidebar-nav">
              <ul class="nav nav-list accordion-group">
                <li class="nav-header">
                  <i class="icon-plus icon-white"></i>Near Hotels
                  <div class="pull-right popover-info">
                    <i class="icon-question-sign "></i>
                    <div class="popover fade right">
                      <div class="arrow"></div>
                      <h3 class="popover-title">Help</h3>
                      <div class="popover-content">DRAG & DROP THE ELEMENTS INSIDE THE COLUMNS WHERE YOU WANT TO INSERT IT. AND FROM THERE, YOU CAN CONFIGURE THE STYLE OF THAT ELEMENT. IF YOU NEED MORE INFO PLEASE VISIT <a target="_blank" href="http://twitter.github.io/bootstrap/base-css.html">Near Hotels.</a></div>
                    </div>
                  </div>
                </li>
                <li style="display: none;" class="boxes" id="elmBase">
                  @foreach($h as $key => $data)
                  @foreach($data as $part)
                  <div class="box box-element ui-draggable">
                    <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span>
                    <span class="configuration">
                      <button type="button" class="btn btn-mini" data-target="#editorModal" role="button" data-toggle="modal">Editor</button>
                      <span class="btn-group">
                        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Align <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li class="active"><a href="#" rel="">Default</a></li>
                          <li class=""><a href="#" rel="text-left">Left</a></li>
                          <li class=""><a href="#" rel="text-center">Center</a></li>
                          <li class=""><a href="#" rel="text-right">Right</a></li>
                        </ul>
                      </span>
                      <span class="btn-group">
                        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Emphasis <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li class="active"><a href="#" rel="">Default</a></li>
                          <li class=""><a href="#" rel="emphasized">Emphasized</a></li>
                          <li class=""><a href="#" rel="emphasized2">Emphasized 2</a></li>
                          <li class=""><a href="#" rel="emphasized3">Emphasized 3</a></li>
                          <li class=""><a href="#" rel="emphasized4">Emphasized 4</a></li>
                          <li class=""><a href="#" rel="emphasized-orange">Emphasized orange</a></li>
                        </ul>
                      </span>
                    </span>
                    
                    <div class="preview"><?php print_r($part->name);?></div>
                    <div class="view">
                      <h3 contenteditable="true">
                        Hotel Name: <a href="{{ $part->url }}"><?php print_r($part->name);?></a><br>
                        Rating: <?php print_r($part->rating);?>/10</h3>
                        Stars: <?php print_r($part->stars);?>/5<br>
                        
                    </div>
                  </div>
                  @endforeach
                  @endforeach
                </li>


              </ul>            

              
            </div>
          </div>
          <!--/span-->

          <?php $tripdata = json_decode($tripdata);?>
          @foreach($tripdata as $key => $data)
          @if($key!="hotels")
          <div class="demo ui-sortable" style="min-height: 304px; ">
            <div class="lyrow">
              <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>remove</a>
              <span class="drag label"><i class="icon-move"></i>drag</span>
              <div class="preview">9 3</div>
              <div class="view">
                <div class="row-fluid clearfix">
                  <h2>Days: {{ $key }}</h2>
                  <div class="span12 column ui-sortable">
                    <div class="box box-element ui-draggable" style="display: block; ">
                      <a href="#close" class="remove label label-important"><i class="icon-remove icon-white"></i>Remove</a> <span class="drag label"><i class="icon-move"></i>Drag</span> <span class="configuration"><button type="button" class="btn btn-mini" data-target="#editorModal" role="button" data-toggle="modal">Editor</button> <a class="btn btn-mini" href="#" rel="well">Well</a> </span>
                      <div class="preview">Jumbotron</div>
                      @foreach($data as $temp)
                      <div class="view">
                        <div class="hero-unit" contenteditable="true">
                          <h3>From : <?php print_r($temp->from); ?> - To: <?php print_r($temp->to); ?></h3>
                          @if($temp->type=="place")
                              
                                @foreach($arr as $k=>$data)
                                      
                                      @foreach($data as $t)
                                          @if($temp->id == $t->id)
                                              
                                            <p>Visit: <a href="{{ $t->url }}"><?php print_r($t->name);?></a></p>
                                            <p>
                                              Rating: {{ $t->rating }}/5
                                            </p>
                                            <p>
                                                Tags : {{ $t->tags }}
                                            </p>
                                          @endif
                                      @endforeach
                                @endforeach
                              
                          @else
                              <p><?php print_r($temp->type);?></p>
                          @endif
                          
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endforeach
          <!-- end demo -->
          <!--/span-->
          <div id="download-layout">
            <div class="container-fluid"></div>
          </div>
        </div>
        <!--/row-->
      </div>
      <!--/.fluid-container-->
      <div class="modal hide fade" role="dialog" id="editorModal">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Save your Layout</h3>
        </div>
        <div class="modal-body">
          <p>
            <textarea id="contenteditor"></textarea>
          </p>
        </div>
        <div class="modal-footer"> <a id="savecontent" class="btn btn-primary" data-dismiss="modal">Save</a> <a class="btn" data-dismiss="modal">Cancel</a> </div>
      </div>
      <div class="modal hide fade" role="dialog" id="downloadModal">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Save</h3>
        </div>
        <div class="modal-body">
          <p>Choose how to save your layout</p>
          <div class="btn-group">
            <button type="button" id="fluidPage" class="active btn btn-info"><i class="icon-fullscreen icon-white"></i> Fluid Page</button>
            <button type="button" class="btn btn-info" id="fixedPage"><i class="icon-screenshot icon-white"></i> Fixed page</button>
          </div>
          <br>
          <br>
          <p>
            <textarea></textarea>
          </p>
        </div>
        <div class="modal-footer"> <a class="btn btn-primary navbar-btn" data-dismiss="modal" onclick="javascript:saveHtml();">Save</a> </div>
      </div>
    </div>
  
  <script type="text/javascript" src="../BootstrapPageGenerator-master/js/jquery-2.0.0.min.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="../BootstrapPageGenerator-master/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../BootstrapPageGenerator-master/js/jquery-ui.js"></script>
    <script type="text/javascript" src="../BootstrapPageGenerator-master/js/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="../BootstrapPageGenerator-master/js/jquery.htmlClean.js"></script>
    <script type="text/javascript" src="../BootstrapPageGenerator-master/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../BootstrapPageGenerator-master/ckeditor/config.js"></script>
    <script type="text/javascript" src="../BootstrapPageGenerator-master/js/scripts.js"></script>
    <script type="text/javascript" src="../BootstrapPageGenerator-master/js/FileSaver.js"></script>
    <script type="text/javascript" src="../BootstrapPageGenerator-master/js/blob.js"></script>
    <script src="../BootstrapPageGenerator-master/js/docs.min.js"></script>
    <script>
      function resizeCanvas(size)
      {

      var containerID = document.getElementsByClassName("changeDimension");
      var containerDownload = document.getElementById("download-layout").getElementsByClassName("container-fluid")[0];
      var row = document.getElementsByClassName("demo ui-sortable");
      var container1 = document.getElementsByClassName("container1");
      if (size == "md")
      {
      $(containerID).width('id', "MD");
      $(row).attr('id', "MD");
      $(container1).attr('id', "MD");
      $(containerDownload).attr('id', "MD");
      }
      if (size == "lg")
      {
      $(containerID).attr('id', "LG");
      $(row).attr('id', "LG");
      $(container1).attr('id', "LG");
      $(containerDownload).attr('id', "LG");
      }
      if (size == "sm")
      {
      $(containerID).attr('id', "SM");
      $(row).attr('id', "SM");
      $(container1).attr('id', "SM");
      $(containerDownload).attr('id', "SM");
      }
      if (size == "xs")
      {
      $(containerID).attr('id', "XS");
      $(row).attr('id', "XS");
      $(container1).attr('id', "XS");
      $(containerDownload).attr('id', "XS");

      }


      }
    </script>
  </body>
</html>
