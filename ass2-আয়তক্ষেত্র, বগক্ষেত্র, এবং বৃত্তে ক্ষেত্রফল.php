
<h3>এমন একটি ফাংসন বানান যেটা দিয়ে আয়তক্ষেত্র, বগক্ষেত্র, এবং বৃত্তে ক্ষেত্রফল বের করা যাবে</h3>
<p>আয়তক্ষেত্রের ক্ষেত্রফল=প্রস্থ×উচ্চতা</p>
<p>বর্গক্ষেত্রের ক্ষেত্রফল=(দীর্ঘ)²</p>
<p>বৃত্তের ক্ষেত্রফল= 3.1416 * r²</p>
<hr>

  <?php
    function area($qst='', $height=0, $width=0, $radius=0){
      if($qst=='rectangle'){
        $area=$width*$height;
        echo "আয়তক্ষেত্রের ক্ষেত্রফল = $area বর্গ কিলোমিটার";
      }
      elseif($qst=='square'){
        $area=$height*$height;
        echo "বর্গক্ষেত্রের ক্ষেত্রফল = $area বর্গ কিলোমিটার";
      }
      elseif($qst=='circle'){
        $area=3.1416*$radius*$radius;
        echo "বৃত্তের ক্ষেত্রফল = $area কিলোমিটার";
      }
      else{
        echo "নম্বর সঠিক নয়";
      }
    }
    area('square',100,80, 0);
  ?>
