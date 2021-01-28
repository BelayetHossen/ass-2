<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Assignment 8</title>
  <!--একটা হেডিং এ বাংলায় লাল, সবুজ, নিল, হলুদ, বেগুনি, কাল এই রং গুলা দিয়ে হেডিং এর কালার টা চেঞ্জ করে এমন করে একটা ফাংসন বানান-->


</head>
<body>
  <?php
    function heading($header='We Are PHP developer',$color=''){
      if($color=='লাল'){
      echo "<h1 style= 'color: red; text-align:center;' >$header</h1>";
    }
    elseif($color=='সবুজ'){
      echo "<h1 style='color:green; text-align:center;'>$header</h1>";
    }
    elseif($color=='নিল'){
      echo "<h1 style='color:blue; text-align:center;'>$header</h1>";
    }
    elseif($color=='বেগুনি'){
      echo "<h1 style='color:purple; text-align:center;'>$header</h1>";
    }
    elseif($color=='কাল'){
      echo "<h1 style='color:black; text-align:center;'>$header</h1>";
    }
    else{
      echo "Invalid input";
    }
  }
    heading('We are Laravel developer','লাল');
  ?>
