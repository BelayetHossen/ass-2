


<h3>গ্রেড এবং জিপিএ বের করার জন্য একটি ফাংসন তৈরি করুন</h3>

  <?php
  function result($marks){
      $gpa= "";
      $grade= "";
      if ($marks < 33 && $marks >= 0){
          $gpa = "0.0";
          $grade = "F";
      }elseif ($marks >= 33 && $marks <= 39 ){
          $gpa = "1.00";
          $grade = "D";
      }elseif ($marks >= 40 && $marks <= 49 ){
          $gpa = "2.00";
          $grade = "C";
      }elseif ($marks >= 50 && $marks <= 59 ){
          $gpa = "3.00";
          $grade = "B";
      }elseif ($marks >= 60 && $marks <= 69 ){
          $gpa = "3.50";
          $grade = "A-";
      }elseif ($marks >= 70 && $marks <= 79 ){
          $gpa = "4.00";
          $grade = "A";
      }elseif ($marks >= 80 && $marks <= 100 ){
          $gpa = "5.00";
          $grade = "A+";
      }else{
          echo "Invalid Marks";
      }
      echo "Marks = $marks <br> Your GPA is = $gpa and Grade Point is = $grade ";
  }

  result(78);

  ?>



