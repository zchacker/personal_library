<h2>المطبوعات</h2>
<br/>
<div class="row">
    <a href="<?=base_url()?>home/add_book" class="btn btn-success">أضف جديد</a>
</div>


<?php 

    // print_r($this->db->last_query());    

?>

<br/>
<div class="row">
    <div class="col col-12">
        <form action="<?=base_url();?>home/search" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" name="query" class="form-control" value="<?=@$query?>" placeholder="اكتب عبارة البحث" />
                </div>
                <div class="col">
                    <select name="key" id="" class="form-control">
                        <option value="subject" <?php if(@$key == 'subject') echo 'selected';?> >الموضوع</option>
                        <option value="title" <?php if(@$key == 'title') echo 'selected';?>>عنوان الكتاب</option>                        
                        <option value="auther_name" <?php if(@$key == 'auther_name') echo 'selected';?>>اسم المؤلف</option>
                        <option value="nickname" <?php if(@$key == 'nickname') echo 'selected';?>>لقبه</option>
                        <option value="folders" <?php if(@$key == 'folders') echo 'selected';?>>عدد المجلدات</option>
                        <option value="pages" <?php if(@$key == 'pages') echo 'selected';?>>عدد الصفحات</option>
                        <option value="publisher_name" <?php if(@$key == 'publisher_name') echo 'selected';?>>اسم الناشر</option>
                        <option value="publisher_country" <?php if(@$key == 'publisher_country') echo 'selected';?>>دولة الناشر</option>
                        <option value="publisher_address" <?php if(@$key == 'publisher_address') echo 'selected';?>>عنوان الناشر</option>
                        <option value="edition" <?php if(@$key == 'edition') echo 'selected';?>>الطبعة</option>
                        <option value="notes" <?php if(@$key == 'notes') echo 'selected';?>>ملحوظات</option>
                        <option value="user_name" <?php if(@$key == 'user_name') echo 'selected';?>>اسم مدخل البيانات</option>                        
                    </select>
                </div>                
                <div class="col">
                    <button type="submit" class="btn btn-primary">بحث</button>
                    <a href="<?=base_url()?>home/advanced_search">بحث متقدم</a>
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
                <th scope="col">الرقم</th>
                <th scope="col">عنوان الكتاب</th>
                <th scope="col">اسم المؤلف</th>
                <th scope="col">لقبه</th>  
                <th scope="col">عدد المجلدات</th>
                <th scope="col">عدد الصفحات</th>
                <th scope="col">اسم الناشر</th>
                <th scope="col">دولة الناشر</th>               
                <th scope="col">الحركة</th>                
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($books as $key => $value) {            
        ?>
            <tr>
                <th scope="col"><?=$value->id?></th>
                <td scope="col"><?=$value->subject?></td>
                <td scope="col"><?=$value->auther_name?></td>
                <td scope="col"><?=$value->nickname?></td>
                <td scope="col"><?=$value->folders?></td>
                <td scope="col"><?=$value->pages?></td>
                <td scope="col"><?=$value->publisher_name?></td>
                <td scope="col"><?=$value->publisher_country?></td>                
                <td scope="col">
                    <a href="<?=base_url().'home/edit_book/'.$value->id?>" class="text-dark">تعديل</a>
                    -
                    <a href="<?=base_url().'home/view_book/'.$value->id?>" class="text-success">عرض</a>
                </td>                
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
