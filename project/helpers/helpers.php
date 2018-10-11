<?php
function display_errors($errors){
  $display='<ul class="bg-info">';
  foreach($errors as $error){
    $display.='<li class="text-danger">'.$error.'</li>';
  }
  $display .='</ul>';
  return $display;
} ?>
