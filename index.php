<form method="POST" enctype="multipart/form-data">

  <body>
      <h1>حساب معدل الباكالوريا</h1>

       <input type="number" name="jh" required/> : الإمتحان الجهوي
<br>
<br>
      <input type="number" name="d1" required/> : معدل الدورة الأولى
<br>
<br>
      <input type="number" name="d2" required/> : معدل الدورة الثانية
<br>
<br>
       <input type="number" name="m1" required/> : الفيزياء
<br>
<br>
      <input type="number" name="m2" required/> : علوم الحياة والأرض
<br>
<br>
       <input type="number" name="m3" required/> : الرياضيات
<br>
<br>
      <input type="number" name="m4" required/> : الفلسفة
<br>
<br>
       <input type="number" name="m5" required/> : اللغة الإنجليزية
<br>
<br>
      <button type="submit" name="calcul">حساب المعدل</button>
  
</form>





<?php

if(isset($_POST['calcul'])){
  
  $jh = $_POST["jh"];
  $d1 = $_POST["d1"];
  $d2 = $_POST["d2"];
  $m1 = $_POST["m1"];
  $m2 = $_POST["m2"];
  $m3 = $_POST["m3"];
  $m4 = $_POST["m4"];
  $m5 = $_POST["m5"];

  $m1_x = $m1*5;
  $m2_x = $m2*7;
  $m3_x = $m3*7;
  $m4_x = $m4*4;
  $m5_x = $m5*2;

  $watani = ($m1_x+$m2_x+$m3_x+$m4_x+$m5_x)/25;

  $moradaba = ($d1+$d2)/2;


  echo ((($jh+$moradaba)/2)+$watani)/2;



}



?>



