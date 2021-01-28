

<h3>এমন একটি ফাংসন তৈরি করুন যেটাতে আপনার জন্ম সাল দিলে সে আপনার বয়স বের করে দিবে</h3>



  <?php
    function age(int $birthyear){
      $age=date('Y')-$birthyear;
      echo "Your age is $age years now";
    }
    age(1990);

