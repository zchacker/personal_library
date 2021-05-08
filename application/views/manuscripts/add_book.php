<h2>إضافة المخطوطة</h2>
<hr />

<!-- <span>الاكمال التلقائي</span>
<label class="switch">
  <input type="checkbox" id="autocompeleteRun" checked>
  <span class="slider round"></span>
</label> -->

<form action="" method="post" class="row g-3" onsubmit="return onSubmit()">

  <div class="col-md-12">
    <?php if (strlen($msg) > 0) {  ?>
      <div class="alert alert-success" role="alert"><?= $msg ?></div>
    <?php } ?>
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">رقم السجل</label>
    <input type="text" class="form-control" minlength="8" name="registery_number" value="<?= $random_number ?>" id="registery_number" placeholder="رقم السجل" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">رقم حفظه في المركز</label>
    <input type="text" class="form-control" name="save_number" id="save_number" placeholder="رقم حفظه في المركز" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الفن الأصلي</label>
    <input type="text" class="form-control" name="org_art" id="org_art" onkeyup="filterFunction()" placeholder="الفن الأصلي" autocomplete="off" />
    <div id="myDropdown" class="dropdown-content">
      <a href="javascript:void(0)" onclick="setValue('مصاحف شريفة')">مصاحف شريفة</a>
      <a href="javascript:void(0)" onclick="setValue('قراءات')">قراءات</a>
      <a href="javascript:void(0)" onclick="setValue('تجويد')">تجويد</a>
      <a href="javascript:void(0)" onclick="setValue('الرسم العثماني')">الرسم العثماني</a>
      <a href="javascript:void(0)" onclick="setValue('علم التفسير')">علم التفسير</a>
      <a href="javascript:void(0)" onclick="setValue('علوم القرآن')">علوم القرآن</a>
      <a href="javascript:void(0)" onclick="setValue('حديث')">حديث</a>
      <a href="javascript:void(0)" onclick="setValue('مصطلح الحديث')">مصطلح الحديث</a>
      <a href="javascript:void(0)" onclick="setValue('أدعية وأوراد')">أدعية وأوراد</a>
      <a href="javascript:void(0)" onclick="setValue('فقه حنفي')">فقه حنفي</a>
      <a href="javascript:void(0)" onclick="setValue('فقه مالكي')">فقه مالكي</a>
      <a href="javascript:void(0)" onclick="setValue('فقه شافعي')">فقه شافعي</a>
      <a href="javascript:void(0)" onclick="setValue('فقه حنبلي')">فقه حنبلي</a>
      <a href="javascript:void(0)" onclick="setValue('فقه عام')">فقه عام</a>
      <a href="javascript:void(0)" onclick="setValue('فقه ظاهري')">فقه ظاهري</a>         
      <a href="javascript:void(0)" onclick="setValue('فقه زيدي')">فقه زيدي</a>         
      <a href="javascript:void(0)" onclick="setValue('فقه جعفري')">فقه جعفري</a>         
      <a href="javascript:void(0)" onclick="setValue('قواعد فقهية حنفية')">قواعد فقهية حنفية</a>         
      <a href="javascript:void(0)" onclick="setValue('قواعد فقهية مالكية')">قواعد فقهية مالكية</a>         
      <a href="javascript:void(0)" onclick="setValue('قواعد فقهية شافعية')">قواعد فقهية شافعية</a>         
      <a href="javascript:void(0)" onclick="setValue('قواعد فقهية حنبلية')">قواعد فقهية حنبلية</a>         
      <a href="javascript:void(0)" onclick="setValue('قواعد فقهية عامة')">قواعد فقهية عامة</a>         
      <a href="javascript:void(0)" onclick="setValue('أصول فقه حنفية')">أصول فقه حنفية</a>         
      <a href="javascript:void(0)" onclick="setValue('أصول فقه شافعية')">أصول فقه شافعية</a>         
      <a href="javascript:void(0)" onclick="setValue('أصول فقه مالكية')">أصول فقه مالكية</a>         
      <a href="javascript:void(0)" onclick="setValue('أصول فقه حنبلية')">أصول فقه حنبلية</a>         
      <a href="javascript:void(0)" onclick="setValue('أصول فقه زيدية')">أصول فقه زيدية</a>         
      <a href="javascript:void(0)" onclick="setValue('أصول فقه جعفرية')">أصول فقه جعفرية</a>         
      <a href="javascript:void(0)" onclick="setValue('التوحيد وعلم الكلام')">التوحيد وعلم الكلام</a>         
      <a href="javascript:void(0)" onclick="setValue('الملل والنحل')">الملل والنحل</a>         
      <a href="javascript:void(0)" onclick="setValue('علم اللغة')">علم اللغة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الوضع والاشتقاق')">علم الوضع والاشتقاق</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الصرف')">علم الصرف</a>         
      <a href="javascript:void(0)" onclick="setValue('علم النحو')">علم النحو</a>         
      <a href="javascript:void(0)" onclick="setValue('الخط والإملاء')">الخط والإملاء</a>         
      <a href="javascript:void(0)" onclick="setValue('علم البلاغة')">علم البلاغة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم العروض والقافية')">علم العروض والقافية</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الأدب')">علم الأدب</a>         
      <a href="javascript:void(0)" onclick="setValue('علم التاريخ')">علم التاريخ</a>         
      <a href="javascript:void(0)" onclick="setValue('علم المنطق')">علم المنطق</a>         
      <a href="javascript:void(0)" onclick="setValue('آداب البحث والمناظرة')">آداب البحث والمناظرة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الفلسفة والحكمة')">علم الفلسفة والحكمة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الحساب')">علم الحساب</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الهندسة')">علم الهندسة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الجبر والمقابلة')">علم الجبر والمقابلة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الأنساب')">علم الأنساب</a>         
      <a href="javascript:void(0)" onclick="setValue('علم تقويم البلدان')">علم تقويم البلدان</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الفلك')">علم الفلك</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الهيئة')">علم الهيئة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الميقات والتقاويم')">علم الميقات والتقاويم</a>         
      <a href="javascript:void(0)" onclick="setValue('الكيمياء والطبيعة')">الكيمياء والطبيعة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الزراعة')">علم الزراعة</a>         
      <a href="javascript:void(0)" onclick="setValue('الفروسية والفنون الحربية')">الفروسية والفنون الحربية</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الطب')">علم الطب</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الصيدلة')">علم الصيدلة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم البيطرة')">علم البيطرة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم البيزرة')">علم البيزرة</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الصنائع والحرف')">علم الصنائع والحرف</a>         
      <a href="javascript:void(0)" onclick="setValue('علم الآداب والفضائل')">علم الآداب والفضائل</a>         
      <a href="javascript:void(0)" onclick="setValue('علم تأويل الرؤى')">علم تأويل الرؤى</a>         
      <a href="javascript:void(0)" onclick="setValue('معارف عامة')">معارف عامة</a>         
      <a href="javascript:void(0)" onclick="setValue('منمنمات وشاهنامات')">منمنمات وشاهنامات</a>         
      <a href="javascript:void(0)" onclick="setValue('التصوف')">التصوف</a>         
      <a href="javascript:void(0)" onclick="setValue('الموسيقى')">الموسيقى</a>         
      <a href="javascript:void(0)" onclick="setValue('أحكام النجوم')">أحكام النجوم</a>         
      <a href="javascript:void(0)" onclick="setValue('الحرف والرمل')">الحرف والرمل</a>         
      <a href="javascript:void(0)" onclick="setValue('الطلاسم والسحر')">الطلاسم والسحر</a>         
      <a href="javascript:void(0)" onclick="setValue('الفراسة والكف')">الفراسة والكف</a>         
               
      <!-- <a href="javascript:void(0)" onclick="setValue('about')">About</a>          -->
    </div>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الفن الفرعي</label>
    <input type="text" class="form-control" name="branch_art" id="branch_art" placeholder="الفن الفرعي" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">العنوان الأصلي</label>
    <input type="text" class="form-control" name="org_title" id="org_title"  autocomplete="off" placeholder="العنوان الأصلي" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">العنوان الفرعي</label>
    <input type="text" class="form-control" name="branch_title" id="branch_title" autocomplete="off" placeholder="العنوان الفرعي" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم المؤلف</label>
    <input type="text" class="form-control" name="auther_name" autocomplete="off" placeholder="اسم المؤلف" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">لقبه</label>
    <input type="text" class="form-control" name="auther_nickname" autocomplete="off" placeholder="لقبه" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ وفاته </label>
    <input type="number" class="form-control" name="auther_hijri_death" autocomplete="off" placeholder="تاريخ وفاته " />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن وفاته </label>
    <input type="number" class="form-control" maxlength="2" max="15" name="auther_hijri_death_century" id="auther_hijri_death_century" autocomplete="off" placeholder="قرن وفاته " />
  </div>
  <!-- <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ وفاته ميلاديا</label>
    <input type="number" class="form-control" name="auther_gregorian_death" autocomplete="off" placeholder="تاريخ وفاته ميلاديا"  />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن وفاته ميلاديا</label>
    <input type="number" class="form-control" maxlength="2" max="21" name="auther_gregorian_death_century" autocomplete="off" placeholder="قرن وفاته ميلاديا" />
  </div> -->
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">مصادر ترجمته</label>
    <input type="text" class="form-control" name="translate_sources" id="translate_sources" autocomplete="off" placeholder="مصادر ترجمته" />
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">مصادر العنوان</label>
    <input type="text" class="form-control" name="title_sources" id="title_sources" autocomplete="off" placeholder="مصادر ترجمته" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">بداية المخطوط</label>
    <input type="text" class="form-control" name="book_start" id="book_start" autocomplete="off" placeholder="بداية المخطوط" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">نهاية المخطوط</label>
    <input type="text" class="form-control" name="book_end" id="book_end" autocomplete="off" placeholder="نهاية المخطوط" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">عدد الأوراق</label>
    <input type="number" class="form-control" name="pages_number" id="pages_number" autocomplete="off" placeholder="عدد الأوراق" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اكتمال النسخة</label>
    <input type="text" class="form-control" name="compelete_version" id="compelete_version" autocomplete="off" placeholder="اكتمال النسخة" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ النسخ </label>
    <input type="number" class="form-control" name="version_date_hijri" id="version_date_hijri" autocomplete="off" placeholder="تاريخ النسخ " />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن النسخ </label>
    <input type="number" class="form-control" maxlength="2" max="15" name="version_date_century" id="version_date_century" autocomplete="off" placeholder="قرن النسخ " />
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">اسم الناسخ</label>
    <input type="text" class="form-control" name="copy_name" id="copy_name" autocomplete="off" placeholder="اسم الناسخ" />
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">مكان النسخ</label>
    <input type="text" class="form-control" name="copy_location" id="copy_location" autocomplete="off" placeholder="مكان النسخ" />
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">نوع الخط</label>
    <input type="text" class="form-control" name="font_type" id="font_type" autocomplete="off" placeholder="نوع الخط" />
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">ملحوظة</label>
    <input type="text" class="form-control" name="note" id="note" autocomplete="off" placeholder="ملحوظة" />
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">جهة حفظ الأصل</label>
    <input type="text" class="form-control" name="custodian_asset" id="custodian_asset" autocomplete="off" placeholder="جهة حفظ الأصل" />
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">رقم حفظه فيها</label>
    <input type="text" class="form-control" name="save_number_in_asset" id="save_number_in_asset" autocomplete="off" placeholder="رقم حفظه فيها" />
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">مصدر الإدخال</label>
    <input type="text" class="form-control" name="entry_source" id="entry_source" autocomplete="off" placeholder="مصدر الإدخال" />
  </div>
  <div class="col-md-12">
    <br>
    <input type="submit" class="btn btn-success" value="حفظ المخطوطة" />
  </div>

</form>

<br>
<br>
<hr>

<!-- http://hijri-datepicker.azurewebsites.net/doc -->
<script type="text/javascript">
  $(function() {

    var org_art_clicked = false;

    //$("#hijri-date-input").hijriDatePicker({ hijri:true });
    //$("#gerogian-date-input").hijriDatePicker({ hijri:false , format:'YYYY-MM-DD' });

    $('#org_art').click(function() {      
      document.getElementById("myDropdown").classList.add('show');      
      return;
    });

    $('body').click(function() {
      //alert(org_art_clicked);
      if(org_art_clicked == true){
        document.getElementById("myDropdown").classList.remove('show');
        org_art_clicked = false;
      }    
    });

    $("#org_art").focusout(function() {     
      org_art_clicked = true; 
      //document.getElementById("myDropdown").classList.toggle('show');
    });


    /*$("#edition_date").hijriDatePicker({
      hijri: false,
      format: 'YYYY-MM-DD'
    });

    $('#autocompeleteRun').click(function() {
  
      $.ajax({
        url: "<?= base_url() ?>home/get_auther",
        type: 'post',
        dataType: "json",
        data: {
          query: request.term
        },
        success: function(data) {
          console.log(data);
          response(data);
        }
      });

    });

    // Single Select
    $("#nickname").autocomplete({
      source: function(request, response) {
        if (document.getElementById('autocompeleteRun').checked) {
          // Fetch data
          $.ajax({
            url: "<?= base_url() ?>home/get_auther",
            type: 'post',
            dataType: "json",
            data: {
              query: request.term
            },
            success: function(data) {
              console.log(data);
              response(data);
            }
          });
        }
      },
      select: function(event, ui) {
        // Set selection
        $('#auther_name').val(ui.item.auther_name); // display the selected text
        $('#nickname').val(ui.item.nickname); // display the selected text
        $('#death_hijri').val(ui.item.death_hijri); // display the selected text
        $('#death_gregorian').val(ui.item.death_gregorian); // save selected id to input
        return false;
      },
      focus: function(event, ui) {
        // $('#auther_name').val(ui.item.auther_name); // display the selected text
        // $('#nickname').val(ui.item.nickname); // display the selected text
        // $('#death_hijri').val(ui.item.death_hijri); // display the selected text
        // $('#death_gregorian').val(ui.item.death_gregorian); // save selected id to input
        return false;
      },
      autoFocus: false
    });


    $("#title").autocomplete({      
      source: function(request, response) {        
        if (document.getElementById('autocompeleteRun').checked) {
          // Fetch data
          $.ajax({
            url: "<?= base_url() ?>home/get_booktitle",
            type: 'post',
            dataType: "json",
            data: {
              query: request.term
            },
            success: function(data) {
              console.log(data);
              response(data);
            }
          });
        }
      },
      select: function(event, ui) {
        // Set selection
        $('#subject').val(ui.item.subject); // display the selected text
        $('#title').val(ui.item.value); // display the selected text
        $('#auther_name').val(ui.item.auther_name); // display the selected text
        $('#nickname').val(ui.item.nickname); // display the selected text
        $('#death_hijri').val(ui.item.death_hijri); // display the selected text
        $('#death_gregorian').val(ui.item.death_gregorian); // save selected id to input
        return false;
      },
      focus: function(event, ui) {
        // $('#auther_name').val(ui.item.auther_name); // display the selected text
        // $('#nickname').val(ui.item.nickname); // display the selected text
        // $('#death_hijri').val(ui.item.death_hijri); // display the selected text
        // $('#death_gregorian').val(ui.item.death_gregorian); // save selected id to input
        return false;
      },
      autoFocus: false
    });*/


  });

  function onSubmit() {

    var auther_hijri_death_century = document.getElementById('auther_hijri_death_century');
    auther_hijri_death_century.oninvalid = function(event) {
      event.target.setCustomValidity('الرجاء ان لا يتجاوز الرقم 15');
      return false;
    }

    /*var auther_gregorian_death_century = document.getElementById('auther_gregorian_death_century');
    auther_gregorian_death_century.oninvalid = function(event) {
        event.target.setCustomValidity('الرجاء ان لا يتجاوز الرقم 21');
        return false;
    }*/

    var version_date_century = document.getElementById('version_date_century');
    version_date_century.oninvalid = function(event) {
      event.target.setCustomValidity('الرجاء ان لا يتجاوز الرقم 15');
      return false;
    }

    return true;

  }


  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("org_art");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }

  function setValue(value){
    //alert(value);
    //document.getElementById("myDropdown").classList.toggle('show');
    document.getElementById("org_art").value = value;
  }

</script>