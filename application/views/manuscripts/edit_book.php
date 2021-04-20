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
    <input type="text" class="form-control" name="registery_number" value="<?=$book->registery_number?>" id="registery_number" placeholder="رقم السجل"  />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">رقم حفظه في المركز</label>
    <input type="text" class="form-control" name="save_number" id="save_number" value="<?=$book->save_number?>" placeholder="رقم الحفظ" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الفن الأصلي</label>
    <input type="text" class="form-control" name="org_art" id="org_art" value="<?=$book->org_art?>" placeholder="الفن الأصلي"  />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الفن الفرعي</label>
    <input type="text" class="form-control" name="branch_art" id="branch_art" value="<?=$book->branch_art?>" placeholder="الفن الفرعي"  />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">العنوان الأصلي</label>
    <input type="text" class="form-control" name="org_title" id="org_title" value="<?=$book->org_title?>" autocomplete="off" placeholder="العنوان الأصلي"  />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">العنوان الفرعي</label>
    <input type="text" class="form-control" name="branch_title" id="branch_title" value="<?=$book->branch_title?>" autocomplete="off" placeholder="العنوان الفرعي" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم المؤلف</label>
    <input type="text" class="form-control" name="auther_name" value="<?=$book->auther_name?>" autocomplete="off" placeholder="اسم المؤلف" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">لقبه</label>
    <input type="text" class="form-control" name="auther_nickname" value="<?=$book->auther_nickname?>" autocomplete="off" placeholder="لقبه" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ وفاته </label>
    <input type="number" class="form-control" name="auther_hijri_death" value="<?=$book->auther_hijri_death?>" autocomplete="off" placeholder="تاريخ وفاته "  />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن وفاته </label>
    <input type="number" class="form-control" maxlength="2" max="15" value="<?=$book->auther_hijri_death_century?>" name="auther_hijri_death_century" id="auther_hijri_death_century" autocomplete="off" placeholder="قرن وفاته "  /> 
  </div>
  <!-- <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ وفاته ميلاديا</label>
    <input type="number" class="form-control" name="auther_gregorian_death" value="<?=$book->auther_gregorian_death?>" autocomplete="off" placeholder="تاريخ وفاته ميلاديا"  />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن وفاته ميلاديا</label>
    <input type="number" class="form-control" maxlength="2" max="21" value="<?=$book->auther_gregorian_death_century?>" name="auther_gregorian_death_century" autocomplete="off" placeholder="قرن وفاته ميلاديا" />
  </div> -->
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">مصادر ترجمته</label>
    <input type="text" class="form-control" name="translate_sources" id="translate_sources" value="<?=$book->translate_sources?>" autocomplete="off" placeholder="مصادر ترجمته" />
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">مصادر العنوان</label>
    <input type="text" class="form-control" name="title_sources" id="title_sources" value="<?=$book->title_sources?>" autocomplete="off" placeholder="مصادر ترجمته" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">بداية المخطوط</label>
    <input type="text" class="form-control" name="book_start" id="book_start" value="<?=$book->book_start?>" autocomplete="off" placeholder="بداية المخطوط" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">نهاية المخطوط</label>
    <input type="text" class="form-control" name="book_end" id="book_end" value="<?=$book->book_end?>" autocomplete="off" placeholder="نهاية المخطوط" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">عدد الأوراق</label>
    <input type="number" class="form-control" name="pages_number" id="pages_number" value="<?=$book->pages_number?>" autocomplete="off" placeholder="عدد الأوراق" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اكتمال النسخة</label>
    <input type="text" class="form-control" name="compelete_version" id="compelete_version" value="<?=$book->compelete_version?>" autocomplete="off" placeholder="اكتمال النسخة" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ النسخ </label>
    <input type="number" class="form-control" name="version_date_hijri" id="version_date_hijri" value="<?=$book->version_date_hijri?>" autocomplete="off" placeholder="تاريخ النسخ "  />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن النسخ </label>
    <input type="number" class="form-control" maxlength="2" max="15" value="<?=$book->version_date_century?>" name="version_date_century" id="version_date_century" autocomplete="off" placeholder="قرن النسخ "  />
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">اسم الناسخ</label>
    <input type="text" class="form-control" name="copy_name" id="copy_name" value="<?=$book->copy_name?>" autocomplete="off" placeholder="اسم الناسخ" />
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">مكان النسخ</label>
    <input type="text" class="form-control" name="copy_location" id="copy_location" value="<?=$book->copy_location?>" autocomplete="off" placeholder="مكان النسخ" />
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">نوع الخط</label>
    <input type="text" class="form-control" name="font_type" id="font_type" value="<?=$book->font_type?>" autocomplete="off" placeholder="نوع الخط" />
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">ملحوظة</label>
    <input type="text" class="form-control" name="note" id="note" value="<?=$book->note?>" autocomplete="off" placeholder="ملحوظة" />
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">جهة حفظ الأصل</label>
    <input type="text" class="form-control" name="custodian_asset" id="custodian_asset" value="<?=$book->custodian_asset?>" autocomplete="off" placeholder="جهة حفظ الأصل" />
  </div>  
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">رقم حفظه فيها</label>
    <input type="text" class="form-control" name="save_number_in_asset" id="save_number_in_asset" value="<?=$book->save_number_in_asset?>" autocomplete="off" placeholder="رقم حفظه فيها" />
  </div>     
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">مصدر الإدخال</label>
    <input type="text" class="form-control" name="entry_source" id="entry_source" value="<?=$book->entry_source?>" autocomplete="off" placeholder="مصدر الإدخال" />
  </div> 
  <div class="col-md-12">
    <br>
    <input type="hidden" class="form-control" name="id"  value="<?=$book->id?>"  required />
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