

<h3>বড় হাত, ছোট হাত, উভয় হাত এর লেখা কনভাসন করার জন্য একটিং ফাংসন বানান</h3>

<?php
  function bothCase($text, $case){
    if($case=='u'){
      echo "<h1 style='text-transform:uppercase'>$text</h1>";
    }
    elseif($case=='l'){
      echo "<h1 style='text-transform:lowercase'>$text</h1>";
    }
    else{
      echo "Invalid";
    }
  }
bothCase('We Are PHP developer','l');
  ?>
