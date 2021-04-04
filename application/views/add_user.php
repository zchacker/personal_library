<h2>إضافة جديد</h2>
<hr/>

<form action="" method="post" class="row g-3">

  <div class="col-md-12">
    <?php  if(strlen($msg) > 0) {  ?>
        <div class="alert alert-success" role="alert"><?=$msg?></div>
    <?php } ?>
  </div>
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم مدخل البيانات</label>
    <input type="text" class="form-control" name="name" placeholder="اسم مدخل البيانات" required />
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">اسم المستخدم</label>
    <input type="text" class="form-control" name="username" placeholder="اسم المستخدم" required/>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">الصلاحية</label>
    <select name="role" id=""  class="form-control" required>
        <option value="مدير">مدير</option>
        <option value="مستخدم">مستخدم</option>
    </select>    
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">كلمة المرور</label>
    <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required/>
  </div>
  
  <div class="col-md-12">
    <br>
    <input type="submit" class="btn btn-success" value="أضف" />
  </div>

</form>

<br>
<br>
<hr>

