
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <meta name="description" content="t">
 <meta name="keywords" content="t">
 <title>Australian Heliponents</title>
 
 <!-- =============== VENDOR STYLES ===============-->
 <link rel="shortcut icon" href="{{asset('public/backend/img/logo.jpg')}}">
 <!-- FONT AWESOME-->
 <link rel="stylesheet" href="{{asset('backend/css/fontawesome/css/font-awesome.min.css')}}">
 <!-- SIMPLE LINE ICONS-->
 <link rel="stylesheet" href="{{asset('backend/css/simple-line-icons/css/simple-line-icons.css')}}">
 <!-- select2 -->
 <link rel="stylesheet" href="{{asset('backend/css/select2.css')}}">
 <!-- select2 -->
 <link rel="stylesheet" href="{{asset('backend/css/select2-bootstrap.css')}}">
 <!-- DATATABLES-->
 <link rel="stylesheet" href="{{asset('backend/js/datatables-colvis/css/dataTables.colVis.css')}}">
 <link rel="stylesheet" href="{{asset('backend/js/datatables/media/css/dataTables.bootstrap.css')}}">
 <link rel="stylesheet" href="{{asset('backend/css/index.css')}}">
 <!-- datepicker -->
 <link rel="stylesheet" href="{{asset('backend/css/bootstrap-datetimepicker.min.css')}}" >
 <!-- =============== BOOTSTRAP STYLES ===============-->
 <link rel="stylesheet" href="{{asset('backend/css/bootstrap.css')}}" id="bscss">
 <!-- =============== APP STYLES ===============-->
 <link rel="stylesheet" href="{{asset('backend/css/app.css')}}" id="maincss">
 <!-- =============== custom ===============-->
 <link rel="stylesheet" href="{{asset('backend/css/theme-a.css')}}" id="maincss">

</head>

<body class="aside-collapsed">
 <div class="wrapper">
  <!-- top navbar-->
  <header class="topnavbar-wrapper">
   <!-- START Top Navbar-->
   <nav role="navigation" class="navbar topnavbar">
    <!-- START navbar header-->
    <div class="navbar-header">
     <a href="#/" class="navbar-brand">
      <div class="brand-logo">
       <img src="{{asset('backend/img/logo.jpg')}}" alt="App Logo" class="logo">
     </div>
   </a>
 </div>
 <!-- END navbar header-->
 <!-- START Nav wrapper-->
 <div class="nav-wrapper">
   <!-- START Left navbar-->
   <ul class="nav navbar-nav">
    <li>
     <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
     <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs togglemeu">
      <em class="icon-options-vertical"></em>
    </a>
    <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
    <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle togglemeu">
      <em class="icon-options-vertical"></em>
    </a>
  </li>
  <!-- START User avatar toggle-->
  <li>
    <h3 class="all-head">View Job</h3>  
  </li>
  <!-- END User avatar toggle-->
  <!-- START lock screen-->

  <!-- END lock screen-->
</ul>
<!-- END Left navbar-->
<!-- START Right Navbar-->
<ul class="nav navbar-nav navbar-right">
  <li>
   <a href="settings.php" >
    <em class="fa fa-cog"></em>
  </a>
</li>

<li>
 <a href="#" data-toggle="modal" data-target="#myModal">
  <em class="fa fa-sign-out"></em>
</a>
</li>
<!-- END Offsidebar menu-->
</ul>
<!-- END Right Navbar-->
</div>

</nav>
<!-- END Top Navbar-->
</header>
<!-- sidebar-->
<!-- header -->
<!-- sidebar-->
<aside class="aside">
 <!-- START Sidebar (left)-->
 <div class="aside-inner">
  <nav data-sidebar-anyclick-close="" class="sidebar">
   <!-- START sidebar nav-->
   <ul class="nav">
    <!-- START user info-->
    <li class="has-user-block">
     <div class="user-box-menu">
      <div class="item user-block">
       <!-- User picture-->
       <div class="user-block-picture">
        <div class="user-block-status">
         <!-- <img src="img/avatar5.png" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle"> -->
         <!-- <div class="circle circle-success circle-lg"></div> -->
       </div>
     </div>
     <!-- Name and Job-->
     <div class="user-block-info">
      <span class="user-block-name">Hello, Admin</span>
      <span class="user-block-role">Manager</span>
    </div>
  </div>
</div>
</li>
<li class=" ">
 <a href="{{url('/')}}" title="Job">
  <em class="fa fa-briefcase"></em>
  <span>Jobs</span>
</a>
</li>
</ul>

<!-- END sidebar nav-->
</nav>
</div>
<!-- END Sidebar (left)-->
</aside>

@yield('content')

<!-- Page footer-->
<footer class="footer">
 <span>&copy; <span id="demoyear"></span> - Australian heliponents powered by ishtechnologie</span>
</footer>
</div>

<script type="text/javascript">
        $(document).ready(function () {
           $('#category').change(function () {
             var id = $(this).val();

             $('#subCategory').find('option').not(':first').remove();

             $.ajax({
                url:'category/'+id,
                type:'get',
                dataType:'json',
                success:function (response) {
                    var len = 0;
                    if (response.data != null) {
                        len = response.data.length;
                    }

                    if (len>0) {
                        for (var i = 0; i<len; i++) {
                             var id = response.data[i].id;
                             var name = response.data[i].name;

                             var option = ; 

                             $("#subCategory").append(option);
                        }
                    }
                }
             })
           });
        });
    </script>


<!-- =============== VENDOR SCRIPTS ===============-->
<!-- JQUERY-->
<script src="{{asset('backend/js/jquery.js')}}"></script>
<!-- BOOTSTRAP-->
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<!-- STORAGE API-->
<script src="{{asset('backend/js/jquery.storageapi.js')}}"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->

<!-- select2 -->
<script src="{{asset('backend/js/select2.js')}}"></script>
<!-- WYSIWYG-->
<script src="{{asset('backend/js/bootstrap-wysiwyg.js')}}"></script>
<script src="{{asset('backend/js/jquery.hotkeys.js')}}"></script>
<!-- MOMENT JS-->
<script src="{{asset('backend/js/moment-with-locales.min.js')}}"></script>
<!-- DATETIMEPICKER-->
<script type="text/javascript" src="{{asset('backend/js/bootstrap-datetimepicker.min.js')}}">
</script>
<script src="{{asset('backend/')}}js/bootstrap-filestyle.js" type="text/javascript" ></script>
<!-- Demo-->
<script src="{{asset('backend/')}}js/demo/demo-forms.js"></script>

<!-- DATATABLES-->
<script src="{{asset('backend/js/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/js/datatables-colvis/js/dataTables.colVis.js')}}"></script>
<script src="{{asset('backend/js/datatables/media/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('backend/js/datatables-buttons/js/dataTables.buttons.js')}}"></script>
<script src="{{asset('backend/js/datatables-buttons/js/buttons.bootstrap.js')}}"></script>
<script src="{{asset('backend/js/datatables-buttons/js/buttons.colVis.js')}}"></script>
<script src="{{asset('backend/js/datatables-buttons/js/buttons.flash.js')}}"></script>
<script src="{{asset('backend/js/datatables-buttons/js/buttons.html5.js')}}"></script>
<script src="{{asset('backend/js/datatables-buttons/js/buttons.print.js')}}"></script>
<script src="{{asset('backend/js/datatables-responsive/js/dataTables.responsive.js')}}"></script>
<script src="{{asset('backend/js/datatables-responsive/js/responsive.bootstrap.j')}}s"></script>
<script src="{{asset('backend/js/demo/demo-datatable.js')}}"></script>

<!-- =============== APP SCRIPTS ===============-->
<script src="{{asset('backend/js/app.js')}}"></script>
<script src="{{asset('backend/js/signature_pad.js')}}"></script>
<!-- <script src="js/demo.js"></script> -->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content" style="border-top: solid #0f7393 5px;">
      <div class="modal-body">
        <h3>Are you sure?</h3>
      </div>
      <div class="modal-footer">
        <a href="index.php" class="btn btn-success">Yes</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>


</body>
</html>