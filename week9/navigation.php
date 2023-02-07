<?php
   function active($current_page){
      $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
      $url = end($url_array);  
      if($current_page == $url){
         echo 'active'; //class name in css 
      } 
   }
?>

<div class="navbar"><ul>
   <li><a href="index.php" class="<?php active('index.php'); ?>">Home</a></li>
   <li><a href="lessons.php" class="<?php active('lessons.php'); ?>">W3Schools Lessons</a></li>
   <li><a href="resources.php" class="<?php active('resources.php'); ?>">Resources</a></li>
   <li><a href="validation_complete.php" class="<?php active('validation_complete.php'); ?>">Forms</a></li>
   <li><a href="guests.php" class="<?php active('guests.php'); ?>">Guests</a></li>
</ul></div>