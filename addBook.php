<?php



?>



<!DOCTYPE html>
<html >

<head>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap-rtl.css" rel="stylesheet">
<link href="assets/css/firas.css" rel="stylesheet">
</head>
<body >



<div class="container">

<form action="upload.php" method="post" enctype="multipart/form-data">

  

<div class="form-group">

  <label for="">  اختار صورة :</label>
  <input type="file" class="form-control-file" name="BookImage" id="BookImage">
</div>

<div class="form-group">

  <label for="BookName">اسم الكتاب </label>
  <input class="form-control form-control-lg" type="text" name="BookName"  placeholder="اسم الكتاب">
</div>


<div class="form-group">

  <label for="creater">اسم الكاتب </label>
  <input class="form-control form-control-lg" type="text" name="BookWriter" placeholder="اسم الكاتب">
</div>


<div class="form-group">
     <label for="creater">وصف الكتاب </label>
      <input type="text" class="form-control" id="usr" name="BookDescription" placeholder="وصف">

</div>


<div class="form-group">

  <label >التصنيف </label>

        <select  name="BookCategory">
          <option value="1" >فكاهية</option>
          <option value="2" >سياسية</option>
          <option value="3" >دينية</option>
          <option value="4">روايات</option>
          <option value="5">علوم</option>
          <option value="6">تعليمية</option>
        </select>
</div>

<div class="form-group">
  <label for="bookUpload">تحميل الكتاب </label>
  <input type="file" class="form-control-file"name="BookFile" id="BookFile">
</div>

<input type="submit" value="تحميل الكتاب" name="submit">

</form>
</div>

















</body>
</html>