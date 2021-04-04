<h2>تعديل الكتاب</h2>
<hr/>


<form action="" method="post" class="row g-3">

  <div class="col-md-12">
    <?php  if(strlen($msg) > 0) {  ?>
        <div class="alert alert-success" role="alert"><?=$msg?></div>
    <?php } ?>
  </div>
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الموضوع</label>
    <input type="text" class="form-control" name="subject" placeholder="الموضوع" value="<?=$book->subject?>"  required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">عنوان الكتاب</label>
    <input type="text" class="form-control" name="title" placeholder="عنوان الكتاب" value="<?=$book->title?>"  required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم المؤلف</label>
    <input type="text" class="form-control" name="auther_name" placeholder="اسم المؤلف" value="<?=$book->auther_name?>"  required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">لقبه</label>
    <input type="text" class="form-control" name="nickname" placeholder="لقبه" value="<?=$book->nickname?>"  required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">سنة الوفاه هجري</label>
    <input type="text" class="form-control" name="death_hijri" autocomplete="off" placeholder="سنة الوفاه هجري" id="hijri-date-input" value="<?=$book->death_hijri?>"  required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">سنة الوفاه ميلادي</label>
    <input type="text" class="form-control" name="death_gregorian" autocomplete="off" placeholder="سنة الوفاه ميلادي" id="gerogian-date-input" value="<?=$book->death_gregorian?>"  required/>
  </div>  
  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">عدد المجلدات</label>
    <input type="text" class="form-control" name="folders" autocomplete="off" placeholder="عدد المجلدات"  value="<?=$book->folders?>"  required/>
  </div>
  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">عدد الصفحات</label>
    <input type="text" class="form-control" name="pages" autocomplete="off" placeholder="عدد الصفحات"  value="<?=$book->pages?>"  required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم الناشر</label>
    <input type="text" class="form-control" name="publisher_name" autocomplete="off" placeholder="اسم الناشر" value="<?=$book->publisher_name?>"  required />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">دولة الناشر</label>
    <input type="text" class="form-control" name="publisher_country" autocomplete="off" placeholder="دولة الناشر"  value="<?=$book->publisher_country?>"  required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">عنوان الناشر</label>
    <input type="text" class="form-control" name="publisher_address" autocomplete="off" placeholder="عنوان الناشر" value="<?=$book->publisher_address?>"  required />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الطبعة</label>
    <input type="text" class="form-control" name="edition" autocomplete="off" placeholder="الطبعة"  value="<?=$book->edition?>"  required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ الطبعة</label>
    <input type="text" class="form-control" name="edition_date" id="edition_date" autocomplete="off" placeholder="تاريخ الطبعة" value="<?=$book->edition_date?>"  required />    
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">ملحوظات</label>
    <textarea name="notes" id="" class="form-control" cols="30" rows="10" autocomplete="off" placeholder="ملحوظات" required><?=$book->notes?></textarea>    
  </div>  
  <div class="col-md-12">
    <br>
    <input type="hidden" class="form-control" name="id"  value="<?=$book->id?>"  required />
    <input type="submit" class="btn btn-success" value="حفظ" />
  </div>

</form>

<br>
<br>
<hr>


<!-- http://hijri-datepicker.azurewebsites.net/doc -->
<script type="text/javascript">
    $(function () {
        //$("#hijri-date-input").hijriDatePicker({ hijri:true });
        //$("#gerogian-date-input").hijriDatePicker({ hijri:false , format:'YYYY-MM-DD' });
        $("#edition_date").hijriDatePicker({  hijri:false , format:'YYYY-MM-DD' });
    });
</script>