<?php

  $dir = scandir('sounds');
  foreach($dir as $file) {
    if(($file!='..') && ($file!='.')) {
      $sounds[$file]['title'] = str_replace(array('_','.mp3'), array(' ',''), $file);
    }
  }
  

  include "tmpl/index.php";
