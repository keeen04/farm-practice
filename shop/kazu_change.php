<?php
     session_start();
     session_regenerate_id(true);

     require_once('C:\xampp\htdocs\common\common.php');

     $post=sanitize($_POST);

     $max=$post['max'];
     for($i=0; $i<$max; $i++)
     {
        $kazu[]=$post['kazu'.$i];
     }

     $_SESSION['kazu']=$kazu;

     header('Location: shop_cartlook.php');
     exit();
     ?>