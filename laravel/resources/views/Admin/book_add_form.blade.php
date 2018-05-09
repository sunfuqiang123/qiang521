<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dream</title>
	<!-- Bootstrap Styles-->
    <link href="{{URL::asset('/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <!-- <link href="{{URL::asset('/css/font-awesome.css')}}" rel="stylesheet" /> -->
        <!-- Custom Styles-->
    <link href="{{URL::asset('/css/custom-styles.css')}}" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Dream</a>
            </div>

           <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        logo
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
           <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index"><i class="fa fa-dashboard"></i> 首页</a>
                    </li>
                    <li>
                        <a href="book_manage"><i class="fa fa-qrcode"></i> 书籍管理</a>
                    </li>
                    
                    <li>
                        <a href="book_record"><i class="fa fa-table"></i>借书记录</a>

                    </li>
                   <li>
                        <a href="#"><i class="fa fa-sitemap"></i>管理员管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                                    <li>
                                        <a href="user_add">添加前台管理员</a>
                                    </li>
                                    <li>
                                        <a href="user_operate">操作前台管理员</a>
                                    </li>
                                

                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="book_add_form"><i class="fa fa-edit"></i> 书籍添加 </a>
                    </li>
                    <li>
                        <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Forms Page <small>Best form elements.</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <center></center>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>书名：</label>
                                            <input class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>作者：</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>图书图片：</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>图书简介</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>图书分类：</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">添加图书</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
						</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{URL::asset('/js/jquery-1.10.2.js')}}"></script>
      <!-- Bootstrap Js -->
    <script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Js -->
    <script src="{{URL::asset('/js/jquery.metisMenu.js')}}"></script>
      <!-- Custom Js -->
    <script src="{{URL::asset('/js/custom-scripts.js')}}"></script>
    
   
</body>
</html>
