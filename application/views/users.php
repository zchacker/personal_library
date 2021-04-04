<br/>
<div class="row">
    <a href="<?=base_url()?>home/add_user" class="btn btn-success">أضف جديد</a>
</div>
<br>
<br>
<div class="table-responsive">
    <table class="table table-striped table-sm align-middle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">اسم المدخل</th>
                <th scope="col">اسم المستخدم</th>
                <th scope="col">صلاحياته</th>                               
                <th scope="col">الحركة</th>                
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($users as $key => $value) {            
        ?>
            <tr>
                <th scope="col"><?=$value->id?></th>
                <td scope="col"><?=$value->name?></td>
                <td scope="col"><?=$value->username	?></td>
                <td scope="col"><?=$value->role?></td>                             
                <td scope="col">
                    <a href="<?=base_url().'home/edit_user/'.$value->id?>" class="text-success">تعديل</a>                    
                    <?php if(strcmp($this->session->userdata('username') , $value->username) != 0) {?>
                    -                    
                    <a href="javascript:delete_book(<?=$value->id?>)" class="text-danger">حذف</a>
                    <?php }?>
                </td>                
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<script>
    function delete_book(id){

        var action = window.confirm('هل أنت متأكد من الحذف؟');
        var url = "<?=base_url().'home/delete_user/'?>"+id;
        if(action){            
            window.location.replace(url);
        }
        
    }
</script>
