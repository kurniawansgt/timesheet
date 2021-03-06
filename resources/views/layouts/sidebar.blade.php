<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
<?php
    use App\Http\Controllers\RoleGroupDetailController;
    use Illuminate\Support\Facades\URL;
?>
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      @if(Session::get('picture')!='-')
      <img src="<?php echo url('/');?>/public/adminlte/dist/img/profile/<?php echo isset($_SESSION['picture'])?$_SESSION['picture']:"";?>" class="user-image" alt="User Image">
      @else
      <img src="{{url('public/adminlte/dist/profile-icon.png')}}" class="user-image" alt="User Image">
      @endif
    </div>
    <div class="pull-left info">
      <p>{{ env('APP_NAME') }}</p>
    </div>
  </div>

  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">

    <!--<li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> <span>DASHBOARD</span></a></li>-->        
    <?php        
        
        if(isset($_SESSION['login_status'])){
        //foreach(Session::get('parent_menu') as $mUtama)
        //{
    ?>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-address-book"></i> <span>MASTER</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          <?php
                /*foreach(Session::get('role_submenu') as $subMenu)
                {
                    if($mUtama->modul_category == $subMenu->modul_category)
                    {
                        $roleAccess = RoleGroupDetailController::get_access_crud($subMenu->modul_alias);*/
          ?>
          <!--<li><a href="<?php //echo url('/').$subMenu->route_link;?>"><i class="fa fa-circle-o"></i><?php //echo $subMenu->modul_alias;?></a></li>-->
          <li><a href="{{ url('/').'/master/company' }}"><i class="fa fa-building"></i>Company Info</a></li>
          <li><a href="{{ url('/').'/master/client' }}"><i class="fa fa-chain"></i>Client Info</a></li>
          <?php
                    /*}
                }*/
          ?>
      </ul>
    <?php
        //}
        } else {
    ?>
    <script>
        alert("Sesi Login Anda Habis...!!!");
        window.location = "{{url('/logout')}}";
    </script>
    <?php
        }
    ?>
</section>
<!-- /.sidebar -->
</aside>