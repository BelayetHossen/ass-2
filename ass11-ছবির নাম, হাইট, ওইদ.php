

<h3>একটি ইমেজ আপলোডিং ফাংসন বানান যেথানে ছবির নাম, হাইট, ওইদ দিয়ে ছবিটাকে মেনেজ কার যাবে</h3>


  <?php
    function photo($pic,int $h,int $w,$name){
      echo "<img src='$pic' height='$h' width='$w' ><br>";
      echo "<h3>$name</h3>";
    }
  photo('photo.jpg',700,1000,'Belayet Hossen Biplob');
