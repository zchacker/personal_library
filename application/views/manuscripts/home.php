<h2>المخطوطات</h2>
<br/>
<div class="row">
    <a href="<?=base_url()?>manuscripts/add_book" class="btn btn-success">أضف جديد</a>
</div>


<?php 

    // print_r($this->db->last_query());    

?>

<br/>
<div class="row">
    <div class="col col-12">
        <form action="<?=base_url();?>manuscripts/search" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" name="query" class="form-control" value="<?=@$query?>" placeholder="اكتب عبارة البحث" />
                </div>
                <div class="col">
                    <select name="key" id="" class="form-control">
                        <option value="registery_number" <?php if(@$key == 'registery_number') echo 'selected';?> >رقم السجل</option>
                        <option value="save_number" <?php if(@$key == 'save_number') echo 'selected';?>>رقم الحفظ</option>                        
                        <option value="org_art" <?php if(@$key == 'org_art') echo 'selected';?>>الفن الأصلي</option>
                        <option value="branch_art" <?php if(@$key == 'branch_art') echo 'selected';?>>الفن الفرعي</option>
                        <option value="org_title" <?php if(@$key == 'org_title') echo 'selected';?>>العنوان الأصلي</option>
                        <option value="branch_title" <?php if(@$key == 'branch_title') echo 'selected';?>>العنوان الفرعي</option>
                        <option value="auther_name" <?php if(@$key == 'auther_name') echo 'selected';?>>اسم المؤلف</option>
                        <option value="auther_nickname" <?php if(@$key == 'auther_nickname') echo 'selected';?>>لقبه</option>
                        <option value="auther_hijri_death" <?php if(@$key == 'auther_hijri_death') echo 'selected';?>>تاريخ وفاته هجريا</option>
                        <option value="auther_hijri_death_century" <?php if(@$key == 'auther_hijri_death_century') echo 'selected';?>>قرن وفاته هجريا</option>
                        <option value="auther_gregorian_death" <?php if(@$key == 'auther_gregorian_death') echo 'selected';?>>تاريخ وفاته ميلاديا</option>
                        <option value="auther_gregorian_death_century" <?php if(@$key == 'auther_gregorian_death_century') echo 'selected';?>>قرن وفاته ميلاديا</option>
                        <option value="translate_sources" <?php if(@$key == 'translate_sources') echo 'selected';?>>مصادر ترجمته</option>
                        <option value="book_start" <?php if(@$key == 'book_start') echo 'selected';?>>بداية المخطوط</option>
                        <option value="book_end" <?php if(@$key == 'book_end') echo 'selected';?>>نهاية المخطوط</option>
                        <option value="pages_number" <?php if(@$key == 'pages_number') echo 'selected';?>>عدد الأوراق</option>
                        <option value="compelete_version" <?php if(@$key == 'compelete_version') echo 'selected';?>>اكتمال النسخة</option>
                        <option value="version_date_hijri" <?php if(@$key == 'version_date_hijri') echo 'selected';?>>تاريخ النسخ هجريا</option>
                        <option value="version_date_gregorian" <?php if(@$key == 'version_date_gregorian') echo 'selected';?>>قرن النسخ هجريا</option>
                        <option value="copy_name" <?php if(@$key == 'copy_name') echo 'selected';?>>اسم الناسخ</option>
                        <option value="copy_location" <?php if(@$key == 'copy_location') echo 'selected';?>>مكان النسخ</option>
                        <option value="font_type" <?php if(@$key == 'font_type') echo 'selected';?>>نوع الخط</option>
                        <option value="note" <?php if(@$key == 'note') echo 'selected';?>>ملحوظة</option>
                        <option value="custodian_asset" <?php if(@$key == 'custodian_asset') echo 'selected';?>>جهة حفظ الأصل</option>
                        <option value="entry_name" <?php if(@$key == 'entry_name') echo 'selected';?>>اسم المدخل</option>
                        <option value="entry_date" <?php if(@$key == 'entry_date') echo 'selected';?>>تاريخ الإدخال</option>                       
                    </select>
                </div>                
                <div class="col">
                    <button type="submit" class="btn btn-primary">بحث</button>
                    <a href="<?=base_url()?>manuscripts/advanced_search">بحث متقدم</a>
                </div>              
            </div>
        </form>
    </div>
</div>
<br>
<div class="row">
    <div class="col col-12">
        <?php echo $this->pagination->create_links();?>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm align-middle">
        <thead>
            <tr>
                <th scope="col">رقم السجل</th>
                <th scope="col">رقم الحفظ</th>
                <th scope="col">العنوان الأصلي</th>
                <th scope="col">العنوان الفرعي</th>
                <th scope="col">اسم المؤلف</th>
                <th scope="col">لقبه</th>  
                <th scope="col">عدد الأوراق</th>
                <th scope="col">الفن الأصلي</th>               
                <th scope="col">الحركة</th>                
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($books as $key => $value) {            
        ?>
            <tr>
                <th scope="col"><?=$value->registery_number?></th>
                <td scope="col"><?=$value->save_number?></td>
                <td scope="col"><?=$value->org_title?></td>
                <td scope="col"><?=$value->branch_title?></td>
                <td scope="col"><?=$value->auther_name?></td>
                <td scope="col"><?=$value->auther_nickname?></td>
                <td scope="col"><?=$value->pages_number?></td>
                <td scope="col"><?=$value->org_art?></td>                
                <td scope="col">
                    <a href="<?=base_url().'manuscripts/edit_book/'.$value->id?>" class="text-dark">تعديل</a>
                    -
                    <a href="<?=base_url().'manuscripts/view_book/'.$value->id?>" class="text-success">عرض</a>
                </td>                
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
