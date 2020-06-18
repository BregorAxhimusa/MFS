  <?php
  if(isset($_GET['route'])){
    if(
      $_GET['route'] == "404front"      ||
      $_GET['route'] == "home"
    ){
  // Header frronti
      include("includes/frontheader.php");
      include("modules/".$_GET['route'].".php");
      include("includes/frontfooter.php");
  // Footer
    }
    else{
      include("modules/404.php");
    }
  }
  else{

    include("includes/frontheader.php");
  // include("modules/homepage.php");
    include("includes/frontfooter.php");
  }
  ?>