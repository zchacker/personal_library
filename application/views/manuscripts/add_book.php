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
               
      <!-- <a href="javascript:void(0)" onclick="setValue('about')">About</a> -->
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
    <input type="number" class="form-control" maxlength="2" max="15" name="auther_hijri_death_century" id="auther_hijri_death_century" onkeyup="auther_hijri_death_centuryFilterFunction()" autocomplete="off" placeholder="قرن وفاته " />
    <div id="myDropdown5" class="dropdown-content">
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('01')">01</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('02')">02</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('03')">03</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('04')">04</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('05')">05</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('06')">06</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('07')">07</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('08')">08</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('09')">09</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('10')">10</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('11')">11</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('12')">12</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('13')">13</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('14')">14</a>
      <a href="javascript:void(0)" onclick="auther_hijri_death_centurySetValue('15')">15</a>
    </div>
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
    <input type="text" class="form-control" name="compelete_version" id="compelete_version" onkeyup="compelete_versionFilterFunction()" autocomplete="off" placeholder="اكتمال النسخة" />
    <div id="myDropdown2" class="dropdown-content">
      <a href="javascript:void(0)" onclick="compelete_versionSetValue('تامة')">تامة</a>
      <a href="javascript:void(0)" onclick="compelete_versionSetValue('تامة بالتلفيق')">تامة بالتلفيق</a>
      <a href="javascript:void(0)" onclick="compelete_versionSetValue('ناقصة')">ناقصة</a>
      <a href="javascript:void(0)" onclick="compelete_versionSetValue('ناقصة مع تلفيق')">ناقصة مع تلفيق</a>
      
      <!-- <a href="javascript:void(0)" onclick="compelete_versionSetValue('about')">About</a> -->
    </div>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">تاريخ النسخ </label>
    <input type="number" class="form-control" name="version_date_hijri" id="version_date_hijri" autocomplete="off" placeholder="تاريخ النسخ " />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">قرن النسخ </label>
    <input type="number" class="form-control" maxlength="2" max="15" name="version_date_century" id="version_date_century" onkeyup="version_date_centuryFilterFunction()" autocomplete="off" placeholder="قرن النسخ " />
    <div id="myDropdown6" class="dropdown-content">
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('01')">01</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('02')">02</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('03')">03</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('04')">04</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('05')">05</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('06')">06</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('07')">07</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('08')">08</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('09')">09</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('10')">10</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('11')">11</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('12')">12</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('13')">13</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('14')">14</a>
      <a href="javascript:void(0)" onclick="version_date_centurySetValue('15')">15</a>
    </div>
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
    <input type="text" class="form-control" name="font_type" id="font_type"  onkeyup="font_typeFilterFunction()" autocomplete="off" placeholder="نوع الخط" />
    <div id="myDropdown3" class="dropdown-content">
      <a href="javascript:void(0)" onclick="font_typeSetValue('نسخ')">نسخ</a>
      <a href="javascript:void(0)" onclick="font_typeSetValue('نسخ رئاسي')">نسخ رئاسي</a>
      <a href="javascript:void(0)" onclick="font_typeSetValue('نسخ معتاد')">نسخ معتاد</a>
      <a href="javascript:void(0)" onclick="font_typeSetValue('ثلث')">ثلث</a>
      <a href="javascript:void(0)" onclick="font_typeSetValue('تعليق')">تعليق</a>
      <a href="javascript:void(0)" onclick="font_typeSetValue('نستعليق')">نستعليق</a>
      <a href="javascript:void(0)" onclick="font_typeSetValue('أندلسي')">أندلسي</a>
      <a href="javascript:void(0)" onclick="font_typeSetValue('مغربي')">مغربي</a>
      <a href="javascript:void(0)" onclick="font_typeSetValue('رقعة')">رقعة</a>
    </div>
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">ملحوظة</label>
    <input type="text" class="form-control" name="note" id="note" autocomplete="off" placeholder="ملحوظة" />
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">جهة حفظ الأصل</label>
    <input type="text" class="form-control" name="custodian_asset"  onkeyup="custodian_assetFilterFunction()" id="custodian_asset" autocomplete="off" placeholder="جهة حفظ الأصل" />    
    <div id="myDropdown4" class="dropdown-content">
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('الجامعة الإسلامية بالمدينة المنورة')">الجامعة الإسلامية بالمدينة المنورة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة إصطنبول بإصطنبول')">جامعة إصطنبول بإصطنبول</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة أم القرى بمكة المكرمة')">جامعة أم القرى بمكة المكرمة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة الإمام محمد بن سعود الإسلامية بالرياض')">جامعة الإمام محمد بن سعود الإسلامية بالرياض</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('الجامعة الأمريكية ببيروت')">الجامعة الأمريكية ببيروت</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة برنستون بنيوجيرسي')">جامعة برنستون بنيوجيرسي</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة البصرة بالبصرة')">جامعة البصرة بالبصرة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة بغداد ببغداد')">جامعة بغداد ببغداد</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة توبنجن بتوبنجن')">جامعة توبنجن بتوبنجن</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة صلاح الدين بإربيل')">جامعة صلاح الدين بإربيل</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة كامبريدج بكامبريدج')">جامعة كامبريدج بكامبريدج</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة ليبزج بليبزج')">جامعة ليبزج بليبزج</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة متشجان بمتشجان')">جامعة متشجان بمتشجان</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('جامعة الملك سعود بالرياض')">جامعة الملك سعود بالرياض</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('الجمعية الآسيوية بكلكتا')">الجمعية الآسيوية بكلكتا</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('خزانة ابن زيدان بمكناس')">خزانة ابن زيدان بمكناس</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('خزانة ابن يوسف العمومية بمراكش')">خزانة ابن يوسف العمومية بمراكش</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('خزانة الجامع الكبير بطنجة')">خزانة الجامع الكبير بطنجة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('خزانة الجامع الكبير بمكناس')">خزانة الجامع الكبير بمكناس</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('الخزانة الحسنية (الملكية) بالرباط')">الخزانة الحسنية (الملكية) بالرباط</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('الخزانة العامة بالرباط')">الخزانة العامة بالرباط</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('الخزانة العامة للمخطوطات بتطوان')">الخزانة العامة للمخطوطات بتطوان</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('الخزانة العلمية الصبيحية بسلا')">الخزانة العلمية الصبيحية بسلا</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('خزانة القرويين بفاس')">خزانة القرويين بفاس</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('دار صدام للمخطوطات ببغداد')">دار صدام للمخطوطات ببغداد</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('دار الكتب بالزقازيق')">دار الكتب بالزقازيق</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('دار الكتب البلدية بطنطا')">دار الكتب البلدية بطنطا</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('دار الكتب العامة بالمنصورة')">دار الكتب العامة بالمنصورة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('دار الكتب المصرية بالقاهرة')">دار الكتب المصرية بالقاهرة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('دار الكتب الناصرية بتمكروت')">دار الكتب الناصرية بتمكروت</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('دار الكتب الوطنية بالجزائر')">دار الكتب الوطنية بالجزائر</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('دار الكتب الوطنية بتونس')">دار الكتب الوطنية بتونس</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('دارة الملك عبد العزيز بالرياض')">دارة الملك عبد العزيز بالرياض</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المتحف البريطاني بلندن')">المتحف البريطاني بلندن</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('متحف طوبقابي سراي بإصطنبول')">متحف طوبقابي سراي بإصطنبول</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المجمع العلمي العراقي ببغداد')">المجمع العلمي العراقي ببغداد</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مجمع اللغة العربية بدمشق')">مجمع اللغة العربية بدمشق</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مركز البحث العلمي وإحياء التراث الإسلامي بمكة المكرمة')">مركز البحث العلمي وإحياء التراث الإسلامي بمكة المكرمة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مركز المخطوطات والتراث والوثائق بالكويت')">مركز المخطوطات والتراث والوثائق بالكويت</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مركز الملك فيصل للبحوث والدراسات الإسلامية بالرياض')">مركز الملك فيصل للبحوث والدراسات الإسلامية بالرياض</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('معهد الدراسات الشرقية بسان بطرسبرج')">معهد الدراسات الشرقية بسان بطرسبرج</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('معهد المخطوطات العربية بالقاهرة')">معهد المخطوطات العربية بالقاهرة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الأحقاف بتريم')">مكتبة الأحقاف بتريم</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المكتبة الأزهرية بالقاهرة')">المكتبة الأزهرية بالقاهرة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الأسد الوطنية بدمشق')">مكتبة الأسد الوطنية بدمشق</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الأسكوريال بمدريد')">مكتبة الأسكوريال بمدريد</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الإمام الحكيم العامة بالنجف')">مكتبة الإمام الحكيم العامة بالنجف</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الإمام الصادق بإصفهان')">مكتبة الإمام الصادق بإصفهان</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الأمبروزيانا بميلان بإيطاليا')">مكتبة الأمبروزيانا بميلان بإيطاليا</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الأوقاف العامة بالموصل')">مكتبة الأوقاف العامة بالموصل</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الأوقاف المركزية ببغداد')">مكتبة الأوقاف المركزية ببغداد</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الأوقاف بالسيدة زينب بالقاهرة')">مكتبة الأوقاف بالسيدة زينب بالقاهرة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الأوقاف بحلب')">مكتبة الأوقاف بحلب</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة آية الله مرعشي النجفي بقم')">مكتبة آية الله مرعشي النجفي بقم</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة بايزيد العامة بإصطنبول')">مكتبة بايزيد العامة بإصطنبول</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المكتبة البريطانية بلندن')">المكتبة البريطانية بلندن</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المكتبة البلدية بالإسكندرية')">المكتبة البلدية بالإسكندرية</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة البلدية بإصطنبول')">مكتبة البلدية بإصطنبول</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة البودليان بأكسفورد')">مكتبة البودليان بأكسفورد</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة تشستربتي بدبلن بإيرلندا')">مكتبة تشستربتي بدبلن بإيرلندا</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الجامع الكبير الشرقية ، مكتبة الأوقاف بصنعاء')">مكتبة الجامع الكبير الشرقية ، مكتبة الأوقاف بصنعاء</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الجامع الكبير الغربية بصنعاء')">مكتبة الجامع الكبير الغربية بصنعاء</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الحرم الشريف بمكة المكرمة')">مكتبة الحرم الشريف بمكة المكرمة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الحرم النبوي بالمدينة المنورة')">مكتبة الحرم النبوي بالمدينة المنورة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المكتبة الخالدية بالقدس')">المكتبة الخالدية بالقدس</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة خدابخش الشرقية العامة ببتنا')">مكتبة خدابخش الشرقية العامة ببتنا</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة داماد إبراهيم باشا بنوشهر')">مكتبة داماد إبراهيم باشا بنوشهر</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المكتبة الدوقية بجوته')">المكتبة الدوقية بجوته</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الدولة ببرلين')">مكتبة الدولة ببرلين</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة رشيد أفندي بقيصري')">مكتبة رشيد أفندي بقيصري</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة رفاعة الطهطاوي بسوهاج')">مكتبة رفاعة الطهطاوي بسوهاج</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المكتبة السليمانية بإصطنبول')">المكتبة السليمانية بإصطنبول</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المكتبة السليمية العامة بإدرنه')">المكتبة السليمية العامة بإدرنه</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المكتبة الظاهرية بدمشق')">المكتبة الظاهرية بدمشق</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المكتبة العامة لمجلس مدينة دمنهور بأسيوط')">المكتبة العامة لمجلس مدينة دمنهور بأسيوط</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة عبد الله بن عباس بالطائف')">مكتبة عبد الله بن عباس بالطائف</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة عبد الله كنون بطنجة')">مكتبة عبد الله كنون بطنجة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة العتبة الرضوية المقدسة بمشهد')">مكتبة العتبة الرضوية المقدسة بمشهد</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة العتبة المقدسة بقم')">مكتبة العتبة المقدسة بقم</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الفاتح بإصطنبول')">مكتبة الفاتح بإصطنبول</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الفاتيكان بالفاتيكان')">مكتبة الفاتيكان بالفاتيكان</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الكونجرس بواشنطن')">مكتبة الكونجرس بواشنطن</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة مجلس الشورى الإسلامي بطهران')">مكتبة مجلس الشورى الإسلامي بطهران</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة المدرسة الفيضية بقم')">مكتبة المدرسة الفيضية بقم</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة مكة المكرمة')">مكتبة مكة المكرمة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الملك عبد العزيز العامة بالرياض')">مكتبة الملك عبد العزيز العامة بالرياض</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الملك عبد العزيز بالمدينة المنورة')">مكتبة الملك عبد العزيز بالمدينة المنورة</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة الملك فهد الوطنية بالرياض')">مكتبة الملك فهد الوطنية بالرياض</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة ملك الوطنية بطهران')">مكتبة ملك الوطنية بطهران</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة وحيد باشا العامة بكوتاهيه')">مكتبة وحيد باشا العامة بكوتاهيه</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('المكتبة الوطنية بباريس')">المكتبة الوطنية بباريس</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('مكتبة يوسف آغا بقونيه')">مكتبة يوسف آغا بقونيه</a>
      <a href="javascript:void(0)" onclick="custodian_assetSetValue('وزارة الأوقاف والشؤون الإسلامية بالكويت')">وزارة الأوقاف والشؤون الإسلامية بالكويت</a>
      
      <!-- <a href="javascript:void(0)" onclick="custodian_assetSetValue('15')">15</a> -->
    </div>
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
    var compelete_version_clicked = false;
    var font_type_clicked = false;
    var custodian_asset_clicked = false;
    var auther_hijri_death_century_clicked = false;
    var version_date_century_clicked = false;

    //$("#hijri-date-input").hijriDatePicker({ hijri:true });
    //$("#gerogian-date-input").hijriDatePicker({ hijri:false , format:'YYYY-MM-DD' });

    $('#org_art').click(function() {      
      document.getElementById("myDropdown").classList.add('show');      
      return;
    });

    $('#compelete_version').click(function() {      
      document.getElementById("myDropdown2").classList.add('show');      
      return;
    });

    $('#font_type').click(function() {      
      document.getElementById("myDropdown3").classList.add('show');      
      return;
    });

    $('#custodian_asset').click(function() {      
      document.getElementById("myDropdown4").classList.add('show');      
      return;
    });

    $('#auther_hijri_death_century').click(function() {      
      document.getElementById("myDropdown5").classList.add('show');      
      return;
    });

    $('#version_date_century').click(function() {      
      document.getElementById("myDropdown6").classList.add('show');      
      return;
    });

    $('body').click(function() {  

      if(org_art_clicked == true){
        document.getElementById("myDropdown").classList.remove('show');
        org_art_clicked = false;
      } 
      
      if(compelete_version_clicked == true){
        document.getElementById("myDropdown2").classList.remove('show');
        compelete_version_clicked = false;
      } 

      if(font_type_clicked == true){
        document.getElementById("myDropdown3").classList.remove('show');
        font_type_clicked = false;
      } 

      if(custodian_asset_clicked == true){
        document.getElementById("myDropdown4").classList.remove('show');
        custodian_asset_clicked = false;
      } 

      if(auther_hijri_death_century_clicked == true){
        document.getElementById("myDropdown5").classList.remove('show');
        auther_hijri_death_century_clicked = false;
      } 

      if(version_date_century_clicked == true){
        document.getElementById("myDropdown6").classList.remove('show');
        version_date_century_clicked = false;
      } 


    });

    $("#org_art").focusout(function() {     
      org_art_clicked = true;       
    });

    $("#compelete_version").focusout(function() {     
      compelete_version_clicked = true;       
    });

    $("#font_type").focusout(function() {     
      font_type_clicked = true;       
    });

    $("#custodian_asset").focusout(function() {     
      custodian_asset_clicked = true;       
    });

    $("#auther_hijri_death_century").focusout(function() {     
      auther_hijri_death_century_clicked = true;       
    });

    $("#version_date_century").focusout(function() {     
      version_date_century_clicked = true;       
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


  // this for org_art input
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

  function compelete_versionFilterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("compelete_version");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown2");
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

  function font_typeFilterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("font_type");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown3");
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

  function auther_hijri_death_centuryFilterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("auther_hijri_death_century");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown5");
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

  function version_date_centuryFilterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("version_date_century");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown6");
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
    document.getElementById("org_art").value = value;
  }

  function compelete_versionSetValue(value){
    document.getElementById("compelete_version").value = value;
  }

  function font_typeSetValue(value){
    document.getElementById("font_type").value = value;
  }

  function custodian_asset_centurySetValue(value){
    document.getElementById("custodian_asset_century").value = value;
  }

  function auther_hijri_death_centurySetValue(value){
    document.getElementById("auther_hijri_death_century").value = value;
  }

  function custodian_assetSetValue(value){
    document.getElementById("custodian_asset").value = value;
  }

  
  
  
  

  // this is refrence
  // https://www.w3schools.com/howto/howto_js_filter_dropdown.asp
  // https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_js_dropdown_filter

</script>