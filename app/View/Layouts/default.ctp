
<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title><?php echo $title_for_layout; ?></title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content=""> 
    <meta name="author" content=""> 
 
    <!-- Le styles --> 
    <style type="text/css"> 
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style> 
    <?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
 
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --> 
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--> 
 
  </head> 
 
  <body> 
 
    <div class="navbar navbar-fixed-top"> 
      <div class="navbar-inner"> 
        <div class="container-fluid"> 
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
          </a> 
          <a class="brand" href="#">MyReps</a> 
          <div class="btn-group pull-right"> 
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> 
              <i class="icon-user"></i> Username
              <span class="caret"></span> 
            </a> 
            <ul class="dropdown-menu"> 
              <li><a href="#">Profile</a></li> 
              <li class="divider"></li> 
              <li><a href="#">Sign Out</a></li> 
            </ul> 
          </div> 
          <div class="nav-collapse"> 
            <ul class="nav"> 
              <li class="active"><a href="#">Home</a></li> 
              <li><a href="#about">About</a></li> 
              <li><a href="#contact">Contact</a></li> 
            </ul> 
          </div><!--/.nav-collapse --> 
        </div> 
      </div> 
    </div> 
 
    <div class="container-fluid"> 
      <div class="row-fluid"> 
        <div class="span3"> 
          <div class="well sidebar-nav"> 
            <ul class="nav nav-list"> 
              <li class="nav-header">Sidebar</li> 
              <li class="active"><a href="#">Link</a></li> 
              <li><a href="#">Link</a></li> 
              <li><a href="#">Link</a></li> 
              <li><a href="#">Link</a></li> 
              <li class="nav-header">Sidebar</li> 
              <li><a href="#">Link</a></li> 
              <li><a href="#">Link</a></li> 
              <li><a href="#">Link</a></li> 
              <li><a href="#">Link</a></li> 
              <li><a href="#">Link</a></li> 
              <li><a href="#">Link</a></li> 
              <li class="nav-header">Sidebar</li> 
              <li><a href="#">Link</a></li> 
              <li><a href="#">Link</a></li> 
              <li><a href="#">Link</a></li> 
            </ul> 
          </div><!--/.well --> 
        </div><!--/span--> 
        <div class="span9"> 
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
          
      </div><!--/row--> 
 
      <hr> 
 
      <footer> 
        <p>&copy; Company 2012</p> 
      </footer> 
 
    </div><!--/.fluid-container--> 
 
    <!-- Le javascript
    ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <?php
    echo $this->Html->script('jquery');
    echo $this->Html->script('bootstrap-transition');
    echo $this->Html->script('bootstrap-alert');
    echo $this->Html->script('bootstrap-modal');
    echo $this->Html->script('bootstrap-dropdown');
    echo $this->Html->script('bootstrap-scrollspy');
    echo $this->Html->script('bootstrap-tab');
    echo $this->Html->script('bootstrap-tooltip.js');
    echo $this->Html->script('bootstrap-popover');
    echo $this->Html->script('bootstrap-button');
    echo $this->Html->script('bootstrap-collapse');
    echo $this->Html->script('bootstrap-carousel');
    echo $this->Html->script('bootstrap-typeahead');
    
    ?>
 
  </body> 
</html> 
