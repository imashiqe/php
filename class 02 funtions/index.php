<?php
  $num1 ='hello creativ';
  $num2 =5;

  echo $num1 . + $num2;

  echo '</br>';

 $num1 ='hello';
 $num2 ='world';

 echo 'define', '</br>';

 define('num1', 'hello');


 echo num1;

 echo '</br>';
 echo '</br>';
//  define

echo '//text lenth//' , '</br>';

$txt = "তিনদিনের জ্বরে মনে হচ্ছে বুড়ো হয়ে গেছি। অ্যান্টিবায়োটিককেও বুড়ো আঙুল দেখিয়ে শরীরে আসন করে নিয়েছে ভাতিজা। বারবার ছুটি গল্পের ফটিকের কথা মনে পড়ছে...... না না ফটিকের মতই মায়ের কথা মনে পড়ছে। মা তো পাশের রুমেই আছে কিন্তু ৬ ইঞ্চি দেয়াল যে ৬০০০ মাইলের দূরত্ব হয়ে গেছে।
সুস্থতার জন্য দোয়াপ্রার্থী।";

echo strlen($txt);

echo '</br>';

echo '//word lenth//' , '</br>';

$txt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, blanditiis.।';

echo str_word_count($txt);

 
echo '</br>';

echo ' //replace// ','</br>';
$txt = 'Hello 10k World';

echo str_replace('10k',15000 , $txt);

echo '</br>', '//revers//', '</br>';

$txt = 'you are mine';

echo strrev($txt);

echo '</br>';

echo '//explode//';
echo '</br>';

$txt = 'you are mine';

echo "<pre>";

print_r (explode(' ', $txt));


echo '</br>';

echo '//password//';
echo '</br>';

$txt=123;
 
echo md5($txt);
echo '</br>';
echo ' <h3>crypt</h3>';
echo '</br>';

$txt=123;
echo '</br>';
echo crypt($txt, '$5kcvdgsdddg');
echo '</br>';
echo '//passwordhash//';
echo '</br>';
echo '</br>';
$txt=123;


echo password_hash($txt,PASSWORD_DEFAULT);

echo '</br>' , '<h3> end Image</h3>';

$txt = 'h.e.l.l.o.png';

$txt = explode ('.' , $txt);

echo end($txt);

echo '</br>' , '<h3>uppercase</h3>';

$txt ='hello fahim';

echo strtoupper($txt);

echo '</br>' , '<h3>lowercase</h3>';

$txt ='hello fahim';

echo strtolower($txt);

echo '</br>' , '<h3>cappitalize</h3>';

$txt ='hello fahim';

echo ucwords($txt);

echo '</br>' , '<h3>linebreak</h3>';


$txt ='How to Capitalize Each Word of a String in PHP. In this article, we go over how to capitalize each (and every) word in a string using the ucwords () function. The ucwords () function capitalizes the first letter of all the words in a string. So, if we have the string "wild at heart", after passing it through the ucwords () function, the string would then change to "Wild at Heart".How to Capitalize Each Word of a String in PHP. In this article, we go over how to capitalize each (and every) word in a string using the ucwords () function. The ucwords () function capitalizes the first letter of all the words in a string. So, if we have the string "wild at heart", after passing it through the ucwords () function, the string would then change to "Wild at Heart".';

echo nl2br($txt);















?> 

