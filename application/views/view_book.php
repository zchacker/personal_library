<h2>بيانات الكتاب #<?=$book->id?></h2>
<hr/>

<div class="row g-3">

    <div class="col-md-6">
        <p><strong>الموضوع: </strong> <?=$book->subject?></p>
    </div>
    <div class="col-md-6">
        <p><strong>عنوان الكتاب: </strong> <?=$book->title?> </p>
    </div>
    <div class="col-md-6">
        <p><strong>اسم المؤلف: </strong> <?=$book->auther_name?></p>
    </div>
    <div class="col-md-6">
        <p><strong>لقبه: </strong> <?=$book->nickname?></p>
    </div>
    <div class="col-md-6">
        <p><strong>سنة الوفاه هجري: </strong> <?=$book->death_hijri?></p>
    </div>
    <div class="col-md-6">
        <p><strong>سنة الوفاه ميلادي: </strong> <?=$book->death_gregorian?></p>    
    </div>
    <div class="col-md-6">
        <p><strong>عدد المجلدات: </strong> <?=$book->folders?></p>
    </div>
    <div class="col-md-6">
        <p><strong>عدد الصفحات: </strong> <?=$book->pages?></p>
    </div>
    <div class="col-md-6">
        <p><strong>اسم الناشر: </strong> <?=$book->publisher_name?></p>
    </div>
    <div class="col-md-6">
        <p><strong>دولة الناشر: </strong> <?=$book->publisher_country?></p>
    </div>
    <div class="col-md-6">
        <p><strong>عنوان الناشر: </strong> <?=$book->publisher_address?></p>
    </div>
    <div class="col-md-6">
        <p><strong>الطبعة: </strong> <?=$book->edition?></p>
    </div>
    <div class="col-md-6">
        <p><strong>تاريخ الطبعة: </strong> <?=$book->edition_date?></p>
    </div>
    <div class="col-md-6">
        <p><strong>اسم المدخل: </strong> <?=$book->user_name?></p>
    </div>
    <div class="col-md-6">
        <p><strong>تاريخ الاضافة: </strong> <?=$book->create_date?></p>
    </div>
    <div class="col-md-12">
        <p><strong>ملحوظات: </strong> <?=$book->notes?></p>
    </div>

</div>

<hr>
<div class="col-md-12">
    <a href="<?=base_url().'home/edit_book/'.$book->id?>" class="btn btn-warning">تعديل الكتاب</a>
    <a href="javascript:delete_book(<?=$book->id?>)" on class="btn btn-danger">حذف الكتاب</a>
</div>

<script>
    function delete_book(id){

        var action = window.confirm('هل أنت متأكد من الحذف؟');
        var url = "<?=base_url().'home/delete_book/'?>"+id;
        if(action){            
            window.location.replace(url);
        }
        
    }
</script>