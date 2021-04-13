<h2>بيانات الكتاب #<?=$book->id?></h2>
<hr/>

<div class="row g-3">

    <div class="col-md-6">
        <p><strong>رقم السجل: </strong> <?=$book->registery_number?></p>
    </div>
    <div class="col-md-6">
        <p><strong>رقم الحفظ: </strong> <?=$book->save_number?> </p>
    </div>
    <div class="col-md-6">
        <p><strong>الفن الأصلي: </strong> <?=$book->org_art?></p>
    </div>
    <div class="col-md-6">
        <p><strong>الفن الفرعي: </strong> <?=$book->branch_art?></p>
    </div>
    <div class="col-md-6">
        <p><strong>العنوان الأصلي: </strong> <?=$book->org_title?></p>
    </div>
    <div class="col-md-6">
        <p><strong>العنوان الفرعي: </strong> <?=$book->branch_title?></p>    
    </div>
    <div class="col-md-6">
        <p><strong>اسم المؤلف: </strong> <?=$book->auther_name?></p>
    </div>
    <div class="col-md-6">
        <p><strong>لقبه: </strong> <?=$book->auther_nickname?></p>
    </div>
    <div class="col-md-6">
        <p><strong>تاريخ وفاته هجريا: </strong> <?=$book->auther_hijri_death?></p>
    </div>
    <div class="col-md-6">
        <p><strong>قرن وفاته هجريا: </strong> <?=$book->auther_hijri_death_century?></p>
    </div>
    <div class="col-md-6">
        <p><strong>تاريخ وفاته ميلاديا: </strong> <?=$book->auther_gregorian_death?></p>
    </div>
    <div class="col-md-6">
        <p><strong>قرن وفاته ميلاديا: </strong> <?=$book->auther_gregorian_death_century?></p>
    </div>
    <div class="col-md-12">
        <p><strong>مصادر ترجمته: </strong> <?=$book->translate_sources?></p>
    </div>
    <div class="col-md-6">
        <p><strong>بداية المخطوط: </strong> <?=$book->book_start?></p>
    </div>
    <div class="col-md-6">
        <p><strong>نهاية المخطوط: </strong> <?=$book->book_end?></p>
    </div>
    <div class="col-md-6">
        <p><strong>عدد الأوراق: </strong> <?=$book->pages_number?></p>
    </div>
    <div class="col-md-6">
        <p><strong>اكتمال النسخة: </strong> <?=$book->compelete_version?></p>
    </div>
    <div class="col-md-6">
        <p><strong>تاريخ النسخ هجريا: </strong> <?=$book->version_date_hijri?></p>
    </div>
    <div class="col-md-6">
        <p><strong>قرن النسخ هجريا: </strong> <?=$book->version_date_century?></p>
    </div>
    <div class="col-md-6">
        <p><strong>اسم الناسخ: </strong> <?=$book->copy_name?></p>
    </div>
    <div class="col-md-6">
        <p><strong>مكان النسخ: </strong> <?=$book->copy_location?></p>
    </div>
    <div class="col-md-6">
        <p><strong>نوع الخط: </strong> <?=$book->font_type?></p>
    </div>
    <div class="col-md-12">
        <p><strong>ملحوظة: </strong> <?=$book->note?></p>
    </div>
    <div class="col-md-6">
        <p><strong>جهة حفظ الأصل: </strong> <?=$book->custodian_asset?></p>
    </div>
    <div class="col-md-6">
        <p><strong>اسم المدخل: </strong> <?=$book->entry_name?></p>
    </div>
    <div class="col-md-6">
        <p><strong>تاريخ الإدخال: </strong> <?=$book->entry_date?></p>
    </div>

</div>

<hr>
<div class="col-md-12">
    <a href="<?=base_url().'manuscripts/edit_book/'.$book->id?>" class="btn btn-warning">تعديل الكتاب</a>
    <a href="javascript:delete_book(<?=$book->id?>)" on class="btn btn-danger">حذف الكتاب</a>
</div>
<br>
<br>
<br>
<script>
    function delete_book(id){

        var action = window.confirm('هل أنت متأكد من الحذف؟');
        var url = "<?=base_url().'manuscripts/delete_book/'?>"+id;
        if(action){            
            window.location.replace(url);
        }
        
    }
</script>