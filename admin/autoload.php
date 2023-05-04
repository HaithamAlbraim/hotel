<?php
spl_autoload_register(function($className){

  require("classes/$className.class.php");

});