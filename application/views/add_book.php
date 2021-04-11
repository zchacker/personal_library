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
    <!-- <input type="text" class="form-control" name="subject" placeholder="الموضوع" /> -->
    <select name="subject" id="subject" class="form-control">
      <option value="حديث">حديث</option>
      <option value="عقيدة">عقيدة</option>
      <option value="ادب">ادب</option>
      <option value="علوم">علوم</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">عنوان الكتاب</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="عنوان الكتاب" />
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
    <!-- <input type="text" class="form-control" name="publisher_country" autocomplete="off" placeholder="دولة الناشر" /> -->
    <select name="country" class="form-control">
      <option value="" disabled selected>إختر</option>
      <option value="أفغانستان">أفغانستان</option>
      <option value="ألبانيا">ألبانيا</option>
      <option value="الجزائر">الجزائر</option>
      <option value="أندورا">أندورا</option>
      <option value="أنغولا">أنغولا</option>
      <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
      <option value="الأرجنتين">الأرجنتين</option>
      <option value="أرمينيا">أرمينيا</option>
      <option value="أستراليا">أستراليا</option>
      <option value="النمسا">النمسا</option>
      <option value="أذربيجان">أذربيجان</option>
      <option value="البهاما">البهاما</option>
      <option value="البحرين">البحرين</option>
      <option value="بنغلاديش">بنغلاديش</option>
      <option value="باربادوس">باربادوس</option>
      <option value="بيلاروسيا">بيلاروسيا</option>
      <option value="بلجيكا">بلجيكا</option>
      <option value="بليز">بليز</option>
      <option value="بنين">بنين</option>
      <option value="بوتان">بوتان</option>
      <option value="بوليفيا">بوليفيا</option>
      <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
      <option value="بوتسوانا">بوتسوانا</option>
      <option value="البرازيل">البرازيل</option>
      <option value="بروناي">بروناي</option>
      <option value="بلغاريا">بلغاريا</option>
      <option value="بوركينا فاسو ">بوركينا فاسو </option>
      <option value="بوروندي">بوروندي</option>
      <option value="كمبوديا">كمبوديا</option>
      <option value="الكاميرون">الكاميرون</option>
      <option value="كندا">كندا</option>
      <option value="الرأس الأخضر">الرأس الأخضر</option>
      <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
      <option value="تشاد">تشاد</option>
      <option value="تشيلي">تشيلي</option>
      <option value="الصين">الصين</option>
      <option value="كولومبيا">كولومبيا</option>
      <option value="جزر القمر">جزر القمر</option>
      <option value="كوستاريكا">كوستاريكا</option>
      <option value="ساحل العاج">ساحل العاج</option>
      <option value="كرواتيا">كرواتيا</option>
      <option value="كوبا">كوبا</option>
      <option value="قبرص">قبرص</option>
      <option value="التشيك">التشيك</option>
      <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
      <option value="الدنمارك">الدنمارك</option>
      <option value="جيبوتي">جيبوتي</option>
      <option value="دومينيكا">دومينيكا</option>
      <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
      <option value="تيمور الشرقية ">تيمور الشرقية </option>
      <option value="الإكوادور">الإكوادور</option>
      <option value="مصر">مصر</option>
      <option value="السلفادور">السلفادور</option>
      <option value="غينيا الاستوائية">غينيا الاستوائية</option>
      <option value="إريتريا">إريتريا</option>
      <option value="إستونيا">إستونيا</option>
      <option value="إثيوبيا">إثيوبيا</option>
      <option value="فيجي">فيجي</option>
      <option value="فنلندا">فنلندا</option>
      <option value="فرنسا">فرنسا</option>
      <option value="الغابون">الغابون</option>
      <option value="غامبيا">غامبيا</option>
      <option value="جورجيا">جورجيا</option>
      <option value="ألمانيا">ألمانيا</option>
      <option value="غانا">غانا</option>
      <option value="اليونان">اليونان</option>
      <option value="جرينادا">جرينادا</option>
      <option value="غواتيمالا">غواتيمالا</option>
      <option value="غينيا">غينيا</option>
      <option value="غينيا بيساو">غينيا بيساو</option>
      <option value="غويانا">غويانا</option>
      <option value="هايتي">هايتي</option>
      <option value="هندوراس">هندوراس</option>
      <option value="المجر">المجر</option>
      <option value="آيسلندا">آيسلندا</option>
      <option value="الهند">الهند</option>
      <option value="إندونيسيا">إندونيسيا</option>
      <option value="إيران">إيران</option>
      <option value="العراق">العراق</option>
      <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
      <option value="فلسطين">فلسطين</option>
      <option value="إيطاليا">إيطاليا</option>
      <option value="جامايكا">جامايكا</option>
      <option value="اليابان">اليابان</option>
      <option value="الأردن">الأردن</option>
      <option value="كازاخستان">كازاخستان</option>
      <option value="كينيا">كينيا</option>
      <option value="كيريباتي">كيريباتي</option>
      <option value="الكويت">الكويت</option>
      <option value="قرغيزستان">قرغيزستان</option>
      <option value="لاوس">لاوس</option>
      <option value="لاوس">لاوس</option>
      <option value="لاتفيا">لاتفيا</option>
      <option value="لبنان">لبنان</option>
      <option value="ليسوتو">ليسوتو</option>
      <option value="ليبيريا">ليبيريا</option>
      <option value="ليبيا">ليبيا</option>
      <option value="ليختنشتاين">ليختنشتاين</option>
      <option value="ليتوانيا">ليتوانيا</option>
      <option value="لوكسمبورغ">لوكسمبورغ</option>
      <option value="مدغشقر">مدغشقر</option>
      <option value="مالاوي">مالاوي</option>
      <option value="ماليزيا">ماليزيا</option>
      <option value="جزر المالديف">جزر المالديف</option>
      <option value="مالي">مالي</option>
      <option value="مالطا">مالطا</option>
      <option value="جزر مارشال">جزر مارشال</option>
      <option value="موريتانيا">موريتانيا</option>
      <option value="موريشيوس">موريشيوس</option>
      <option value="المكسيك">المكسيك</option>
      <option value="مايكرونيزيا">مايكرونيزيا</option>
      <option value="مولدوفا">مولدوفا</option>
      <option value="موناكو">موناكو</option>
      <option value="منغوليا">منغوليا</option>
      <option value="الجبل الأسود">الجبل الأسود</option>
      <option value="المغرب">المغرب</option>
      <option value="موزمبيق">موزمبيق</option>
      <option value="بورما">بورما</option>
      <option value="ناميبيا">ناميبيا</option>
      <option value="ناورو">ناورو</option>
      <option value="نيبال">نيبال</option>
      <option value="هولندا">هولندا</option>
      <option value="نيوزيلندا">نيوزيلندا</option>
      <option value="نيكاراجوا">نيكاراجوا</option>
      <option value="النيجر">النيجر</option>
      <option value="نيجيريا">نيجيريا</option>
      <option value="كوريا الشمالية ">كوريا الشمالية </option>
      <option value="النرويج">النرويج</option>
      <option value="سلطنة عمان">سلطنة عمان</option>
      <option value="باكستان">باكستان</option>
      <option value="بالاو">بالاو</option>
      <option value="بنما">بنما</option>
      <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
      <option value="باراغواي">باراغواي</option>
      <option value="بيرو">بيرو</option>
      <option value="الفلبين">الفلبين</option>
      <option value="بولندا">بولندا</option>
      <option value="البرتغال">البرتغال</option>
      <option value="قطر">قطر</option>
      <option value="جمهورية الكونغو">جمهورية الكونغو</option>
      <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
      <option value="رومانيا">رومانيا</option>
      <option value="روسيا">روسيا</option>
      <option value="رواندا">رواندا</option>
      <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
      <option value="سانت لوسيا">سانت لوسيا</option>
      <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
      <option value="ساموا">ساموا</option>
      <option value="سان مارينو">سان مارينو</option>
      <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
      <option value="المملكة العربية السعودية">المملكة العربية السعودية</option>
      <option value="السنغال">السنغال</option>
      <option value="صربيا">صربيا</option>
      <option value="سيشيل">سيشيل</option>
      <option value="سيراليون">سيراليون</option>
      <option value="سنغافورة">سنغافورة</option>
      <option value="سلوفاكيا">سلوفاكيا</option>
      <option value="سلوفينيا">سلوفينيا</option>
      <option value="جزر سليمان">جزر سليمان</option>
      <option value="الصومال">الصومال</option>
      <option value="جنوب أفريقيا">جنوب أفريقيا</option>
      <option value="كوريا الجنوبية">كوريا الجنوبية</option>
      <option value="جنوب السودان">جنوب السودان</option>
      <option value="إسبانيا">إسبانيا</option>
      <option value="سريلانكا">سريلانكا</option>
      <option value="السودان">السودان</option>
      <option value="سورينام">سورينام</option>
      <option value="سوازيلاند">سوازيلاند</option>
      <option value="السويد">السويد</option>
      <option value="سويسرا">سويسرا</option>
      <option value="سوريا">سوريا</option>
      <option value="طاجيكستان">طاجيكستان</option>
      <option value="تنزانيا">تنزانيا</option>
      <option value="تايلاند">تايلاند</option>
      <option value="توغو">توغو</option>
      <option value="تونجا">تونجا</option>
      <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
      <option value="تونس">تونس</option>
      <option value="تركيا">تركيا</option>
      <option value="تركمانستان">تركمانستان</option>
      <option value="توفالو">توفالو</option>
      <option value="أوغندا">أوغندا</option>
      <option value="أوكرانيا">أوكرانيا</option>
      <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
      <option value="المملكة المتحدة">المملكة المتحدة</option>
      <option value="الولايات المتحدة">الولايات المتحدة</option>
      <option value="أوروغواي">أوروغواي</option>
      <option value="أوزبكستان">أوزبكستان</option>
      <option value="فانواتو">فانواتو</option>
      <option value="فنزويلا">فنزويلا</option>
      <option value="فيتنام">فيتنام</option>
      <option value="اليمن">اليمن</option>
      <option value="زامبيا">زامبيا</option>
      <option value="زيمبابوي">زيمبابوي</option>
    </select>
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