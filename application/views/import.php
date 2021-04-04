<h2>استيراد البيانات</h2>


<form action="" method="post" class="row g-3" enctype="multipart/form-data">

    <div class="col-md-12">
        <?php  if(strlen($msg) > 0) {  ?>
            <?=$msg?>
        <?php } ?>
    </div>

    <div class="col-md-12">
        <label for="inputEmail4" class="form-label">ملف اكسيل</label>
        <input type="file" class="form-control" name="uploadFile" placeholder="اختر ملف" accept=".csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />
    </div>

    <div class="col-md-12">
        <br>
        <input type="submit" name="submit" class="btn btn-success" value="استورد" />
    </div>

</form>