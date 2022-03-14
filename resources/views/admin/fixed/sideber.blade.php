<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Classy Cloth</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="tables.html"><i class="fa-solid fa-people-carry-box"></i> Sellers</a></li>
        <li class="active"><a href="{{route('category.list')}}"><i class="fa-brands fa-buffer"></i> Category</a></li>
      
      <li><a href="{{route('cloth.list')}}"><i class="fa-solid fa-shirt"></i> Cloths</a></li>

      <li><a href="typography.html"><i class="fa fa-font"></i> Orders</a></li>
      <li><a href="bootstrap-elements.html"><i class="fa-solid fa-magnifying-glass"></i>Order Details</a></li>
      <li><a href="bootstrap-grid.html"><i class="fa-solid fa-arrow-trend-up"></i> Stocks Information</a></li>
      <li><a href="blank-page.html"><i class="fa fa-file"></i> Sales</a></li>
      <li><a href="blank-page.html"><i class="fa fa-file"></i> Payments</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Selling Reports  <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Dropdown Item</a></li>
          <li><a href="#">Another Item</a></li>
          <li><a href="#">Third Item</a></li>
          <li><a href="#">Last Item</a></li>
        </ul>
      </li>
    </ul>