

<h3>এমন একটি ফাংসন বানান যাকে কি না একটা বয়স দিলে একজন কি বৃদ্ধ, যুবক, কিশো, ছেলে , বাচ্ছা রিটান করবে</h3>

  <?php

    function age($age){
      if($age <= 8){
        echo "$age year's old is range in <span style='color: darkblue; font-size: 20px;' >বাচ্ছা</span>";
      }
      elseif($age >8 && $age<= 17){
          echo "$age year's old is range in <span style='color: #FC412F; font-size: 20px;' >কিশোর/কিশোরী</span>";
      }
      elseif($age >17 && $age<= 42){
          echo "$age year's old is range in <span style='color: #FF318C; font-size: 20px;' >যুবক/যুবতী</span>";
      }
      elseif($age > 42 && $age <=65){
          echo "$age year's old is range in <span style='color: #4189FC; font-size: 20px;' >বৃদ্ধ/বৃদ্ধা</span>";

      }elseif($age >= 66){
          echo "$age year's old is range in <span style='color: #DC4E41; font-size: 20px;' >অনেক বৃদ্ধ/বৃদ্ধা</span>";
      }
      else{
        echo "নম্বর ঠিক হয় নি";
      }
    }

    age(24);
  ?>