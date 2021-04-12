<h2>إضافة جديد</h2>
<hr />

<span>الاكمال التلقائي</span>
<label class="switch">
  <input type="checkbox" id="autocompeleteRun" checked>
  <span class="slider round"></span>
</label>

<form action="" method="post" class="row g-3">

  <div class="col-md-12">
    <?php if (strlen($msg) > 0) {  ?>
      <div class="alert alert-success" role="alert"><?= $msg ?></div>
    <?php } ?>
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">رقم السجل</label>    
    <input type="text" class="form-control" name="registery_number" id="registery_number" placeholder="رقم السجل" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">رقم الحفظ</label>
    <input type="text" class="form-control" name="save_number" id="save_number" placeholder="رقم الحفظ" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الفن الأصلي</label>
    <input type="text" class="form-control" name="org_art" id="org_art" placeholder="الفن الأصلي" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الفن الفرعي</label>
    <input type="text" class="form-control" name="branch_art" id="branch_art" placeholder="الفن الفرعي" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">العنوان الأصلي</label>
    <input type="text" class="form-control" name="org_title" id="org_title" autocomplete="off" placeholder="العنوان الأصلي"  />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">العنوان الفرعي</label>
    <input type="text" class="form-control" name="branch_title" id="branch_title" autocomplete="off" placeholder="العنوان الفرعي" />
  </div>
  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">اسم المؤلف</label>
    <input type="text" class="form-control" name="auther_name" autocomplete="off" placeholder="اسم المؤلف" />
  </div>
  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">لقبه</label>
    <input type="text" class="form-control" name="auther_nickname" autocomplete="off" placeholder="لقبه" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ وفاته هجريا</label>
    <input type="text" class="form-control" name="auther_hijri_death" autocomplete="off" placeholder="تاريخ وفاته هجريا" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن وفاته هجريا</label>
    <input type="text" class="form-control" name="auther_hijri_death_century" autocomplete="off" placeholder="قرن وفاته هجريا" /> 
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ وفاته ميلاديا</label>
    <input type="text" class="form-control" name="auther_gregorian_death" autocomplete="off" placeholder="تاريخ وفاته ميلاديا" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن وفاته ميلاديا</label>
    <input type="text" class="form-control" name="auther_gregorian_death_century" autocomplete="off" placeholder="قرن وفاته ميلاديا" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">مصادر ترجمته</label>
    <input type="text" class="form-control" name="translate_sources" id="translate_sources" autocomplete="off" placeholder="مصادر ترجمته" />
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
    <input type="text" class="form-control" name="pages_number" id="pages_number" autocomplete="off" placeholder="عدد الأوراق" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اكتمال النسخة</label>
    <input type="text" class="form-control" name="compelete_version" id="compelete_version" autocomplete="off" placeholder="اكتمال النسخة" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ النسخ هجريا</label>
    <input type="text" class="form-control" name="version_date_hijri" id="version_date_hijri" autocomplete="off" placeholder="تاريخ النسخ هجريا" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن النسخ هجريا</label>
    <input type="text" class="form-control" name="version_date_century" id="version_date_century" autocomplete="off" placeholder="قرن النسخ هجريا" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم الناسخ</label>
    <input type="text" class="form-control" name="copy_name" id="copy_name" autocomplete="off" placeholder="اسم الناسخ" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">مكان النسخ</label>
    <input type="text" class="form-control" name="copy_location" id="copy_location" autocomplete="off" placeholder="مكان النسخ" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">نوع الخط</label>
    <input type="text" class="form-control" name="font_type" id="font_type" autocomplete="off" placeholder="نوع الخط" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ملحوظة</label>
    <input type="text" class="form-control" name="note" id="note" autocomplete="off" placeholder="ملحوظة" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">جهة حفظ الأصل</label>
    <input type="text" class="form-control" name="custodian_asset" id="custodian_asset" autocomplete="off" placeholder="جهة حفظ الأصل" />
  </div>  
  <div class="col-md-12">
    <br>
    <input type="submit" class="btn btn-success" value="أضف" />
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

    $("#edition_date").hijriDatePicker({
      hijri: false,
      format: 'YYYY-MM-DD'
    });

    $('#autocompeleteRun').click(function() {

      //alert("Handler for .click() called: " + document.getElementById('autocompeleteRun').checked);

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
    });


  });
</script>