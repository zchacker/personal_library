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
    <input type="text" class="form-control" name="registery_number" value="<?=$random_number?>" id="registery_number" placeholder="رقم السجل" required />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">رقم الحفظ</label>
    <input type="text" class="form-control" name="save_number" id="save_number" placeholder="رقم الحفظ" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الفن الأصلي</label>
    <input type="text" class="form-control" name="org_art" id="org_art" placeholder="الفن الأصلي" required />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الفن الفرعي</label>
    <input type="text" class="form-control" name="branch_art" id="branch_art" placeholder="الفن الفرعي" required />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">العنوان الأصلي</label>
    <input type="text" class="form-control" name="org_title" id="org_title" autocomplete="off" placeholder="العنوان الأصلي" required />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">العنوان الفرعي</label>
    <input type="text" class="form-control" name="branch_title" id="branch_title" autocomplete="off" placeholder="العنوان الفرعي" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم المؤلف</label>
    <input type="text" class="form-control" name="auther_name" autocomplete="off" placeholder="اسم المؤلف" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">لقبه</label>
    <input type="text" class="form-control" name="auther_nickname" autocomplete="off" placeholder="لقبه" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ وفاته هجريا</label>
    <input type="number" class="form-control" name="auther_hijri_death" autocomplete="off" placeholder="تاريخ وفاته هجريا" required />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن وفاته هجريا</label>
    <input type="number" class="form-control" maxlength="2" max="15" name="auther_hijri_death_century" id="auther_hijri_death_century" autocomplete="off" placeholder="قرن وفاته هجريا" required /> 
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ وفاته ميلاديا</label>
    <input type="number" class="form-control" name="auther_gregorian_death" autocomplete="off" placeholder="تاريخ وفاته ميلاديا" required />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن وفاته ميلاديا</label>
    <input type="number" class="form-control" maxlength="2" max="21" name="auther_gregorian_death_century" autocomplete="off" placeholder="قرن وفاته ميلاديا" required/>
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">مصادر ترجمته</label>
    <input type="text" class="form-control" name="translate_sources" id="translate_sources" autocomplete="off" placeholder="مصادر ترجمته" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">بداية المخطوط</label>
    <input type="text" class="form-control" name="book_start" id="book_start" autocomplete="off" placeholder="بداية المخطوط" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">نهاية المخطوط</label>
    <input type="text" class="form-control" name="book_end" id="book_end" autocomplete="off" placeholder="نهاية المخطوط" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">عدد الأوراق</label>
    <input type="number" class="form-control" name="pages_number" id="pages_number" autocomplete="off" placeholder="عدد الأوراق" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اكتمال النسخة</label>
    <input type="text" class="form-control" name="compelete_version" id="compelete_version" autocomplete="off" placeholder="اكتمال النسخة" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ النسخ هجريا</label>
    <input type="number" class="form-control" name="version_date_hijri" id="version_date_hijri" autocomplete="off" placeholder="تاريخ النسخ هجريا" required />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن النسخ هجريا</label>
    <input type="number" class="form-control" maxlength="2" max="15" name="version_date_century" id="version_date_century" autocomplete="off" placeholder="قرن النسخ هجريا" required />
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">اسم الناسخ</label>
    <input type="text" class="form-control" name="copy_name" id="copy_name" autocomplete="off" placeholder="اسم الناسخ" required/>
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">مكان النسخ</label>
    <input type="text" class="form-control" name="copy_location" id="copy_location" autocomplete="off" placeholder="مكان النسخ" required/>
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">نوع الخط</label>
    <input type="text" class="form-control" name="font_type" id="font_type" autocomplete="off" placeholder="نوع الخط" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ملحوظة</label>
    <input type="text" class="form-control" name="note" id="note" autocomplete="off" placeholder="ملحوظة" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">جهة حفظ الأصل</label>
    <input type="text" class="form-control" name="custodian_asset" id="custodian_asset" autocomplete="off" placeholder="جهة حفظ الأصل" required/>
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

    //$("#hijri-date-input").hijriDatePicker({ hijri:true });
    //$("#gerogian-date-input").hijriDatePicker({ hijri:false , format:'YYYY-MM-DD' });

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

  function onSubmit(){

    var auther_hijri_death_century = document.getElementById('auther_hijri_death_century');
    auther_hijri_death_century.oninvalid = function(event) {
        event.target.setCustomValidity('الرجاء ان لا يتجاوز الرقم 15');
        return false;
    }

    var auther_gregorian_death_century = document.getElementById('auther_gregorian_death_century');
    auther_gregorian_death_century.oninvalid = function(event) {
        event.target.setCustomValidity('الرجاء ان لا يتجاوز الرقم 21');
        return false;
    }
    
    var version_date_century = document.getElementById('version_date_century');
    version_date_century.oninvalid = function(event) {
        event.target.setCustomValidity('الرجاء ان لا يتجاوز الرقم 15');
        return false;
    }    

    return true;
    
  }
</script>