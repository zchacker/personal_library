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
    <label for="inputEmail4" class="form-label">الموضوع</label>
    <input type="text" class="form-control" name="subject" placeholder="الموضوع" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">عنوان الكتاب</label>
    <input type="text" class="form-control" name="title" placeholder="عنوان الكتاب" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم المؤلف</label>
    <input type="text" class="form-control" name="auther_name" id="auther_name" placeholder="اسم المؤلف" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">لقبه</label>
    <input type="text" class="form-control" name="nickname" id="nickname" placeholder="لقبه" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">سنة الوفاه هجري</label>
    <input type="text" class="form-control" name="death_hijri" id="death_hijri" autocomplete="off" placeholder="سنة الوفاه هجري" id="hijri-date-input" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">سنة الوفاه ميلادي</label>
    <input type="text" class="form-control" name="death_gregorian" id="death_gregorian" autocomplete="off" placeholder="سنة الوفاه ميلادي" id="gerogian-date-input" />
  </div>
  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">عدد المجلدات</label>
    <input type="text" class="form-control" name="folders" autocomplete="off" placeholder="عدد المجلدات" />
  </div>
  <div class="col-md-3">
    <label for="inputEmail4" class="form-label">عدد الصفحات</label>
    <input type="text" class="form-control" name="pages" autocomplete="off" placeholder="عدد الصفحات" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم الناشر</label>
    <input type="text" class="form-control" name="publisher_name" autocomplete="off" placeholder="اسم الناشر" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">دولة الناشر</label>
    <input type="text" class="form-control" name="publisher_country" autocomplete="off" placeholder="دولة الناشر" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">عنوان الناشر</label>
    <input type="text" class="form-control" name="publisher_address" autocomplete="off" placeholder="عنوان الناشر" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الطبعة</label>
    <input type="text" class="form-control" name="edition" autocomplete="off" placeholder="الطبعة" />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ الطبعة</label>
    <input type="text" class="form-control" name="edition_date" id="edition_date" autocomplete="off" placeholder="تاريخ الطبعة" />
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">ملحوظات</label>
    <textarea name="notes" id="" class="form-control" cols="30" rows="10" autocomplete="off" placeholder="ملحوظات"></textarea>
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
      alert("Handler for .click() called: " + document.getElementById('autocompeleteRun').checked);
      
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



  });
</script>