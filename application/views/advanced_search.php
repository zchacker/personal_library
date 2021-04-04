<div class="row">
    <div class="col col-12">
        <form action="<?= base_url(); ?>home/advanced_search_results" method="post">
            <h2>البحث المتقدم</h2>
            <hr/>
            
            <div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">ابحث الان</button>
                </div>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="or_search" value="or" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">البحث باستخدام ( أو )</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="or_search" value="and" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">البحث باستخدام ( و )</label>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">الموضوع</label>
                    <input type="text" name="subject" class="form-control" placeholder="الموضوع" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">عنوان الكتاب</label>
                    <input type="text" name="title" class="form-control" placeholder="اكتب عنوان الكتاب" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اسم المؤلف</label>
                    <input type="text" name="auther_name" class="form-control" placeholder="اكتب اسم المؤلف" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">لقب المؤلف</label>
                    <input type="text" name="nickname" class="form-control" placeholder="اكتب لقب المؤلف" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">عدد المجلدات</label>
                    <input type="text" name="folders" class="form-control" placeholder="اكتب عدد المجلدات" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">عدد الصفحات</label>
                    <input type="text" name="pages" class="form-control" placeholder="اكتب عدد الصفحات" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اسم الناشر</label>
                    <input type="text" name="publisher_name" class="form-control" placeholder="اكتب اسم الناشر" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">دولة الناشر</label>
                    <input type="text" name="publisher_country" class="form-control" placeholder="اكتب دولة الناشر" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">عنوان الناشر</label>
                    <input type="text" name="publisher_address" class="form-control" placeholder="اكتب عنوان الناشر" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">الطبعة</label>
                    <input type="text" name="edition" class="form-control" placeholder="اكتب الطبعة" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">ملاحظات</label>
                    <input type="text" name="notes" class="form-control" placeholder="اكتب ملاحظات" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اسم مدخل البيانات</label>
                    <input type="text" name="user_name" class="form-control" placeholder="اكتب عبارة البحث" />
                </div>
            </div>

            <!-- <div class="form-group">
                <div class="col-md-6">
                    <label for="">حقل البحث</label>
                    <select name="key" id="" class="form-control">
                        <option value="subject">الموضوع</option>
                        <option value="title">عنوان الكتاب</option>                        
                        <option value="auther_name" >اسم المؤلف</option>
                        <option value="nickname" >لقبه</option>
                        <option value="folders">عدد المجلدات</option>
                        <option value="pages">عدد الصفحات</option>
                        <option value="publisher_name">اسم الناشر</option>
                        <option value="publisher_country">دولة الناشر</option>
                        <option value="publisher_address">عنوان الناشر</option>
                        <option value="edition">الطبعة</option>
                        <option value="notes">ملحوظات</option>
                        <option value="user_name">اسم مدخل البيانات</option>                        
                    </select>
                </div>
            </div> -->

            <div class="form-group">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">تاريخ الطبعة</label>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">من</label>
                            <input type="text" class="form-control" name="edition_date1" id="edition_date1" autocomplete="off" placeholder="تاريخ الطبعة من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="edition_date2" id="edition_date2" autocomplete="off" placeholder="تاريخ الطبعة إلى" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">سنة الوفاه هجري</label>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">من</label>
                            <input type="text" class="form-control" name="hijri-date-input1" id="hijri-date-input1" autocomplete="off" placeholder="سنة الوفاه هجري من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="hijri-date-input2" id="hijri-date-input2" autocomplete="off" placeholder="سنة الوفاه هجري إلى" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">سنة الوفاه ميلادي</label>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">من</label>
                            <input type="text" class="form-control" name="gerogian-date-input1" id="gerogian-date-input1" autocomplete="off" placeholder="سنة الوفاه ميلادي من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="gerogian-date-input2" id="gerogian-date-input2" autocomplete="off" placeholder="سنة الوفاه ميلادي إلى" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">تاريخ ادخال الكتاب</label>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">من</label>
                            <input type="text" class="form-control" name="create_date1" id="create_date1" autocomplete="off" placeholder="تاريخ ادخال الكتاب من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="create_date2" id="create_date2" autocomplete="off" placeholder="تاريخ ادخال الكتاب إلى" />
                        </div>
                    </div>

                </div>
            </div>

            <hr/>

            <div class="form-group">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">ابحث الان</button>
                </div>
            </div>

            


        </form>
    </div>
</div>



<!-- http://hijri-datepicker.azurewebsites.net/doc -->
<script type="text/javascript">
    $(function() {
        //$("#hijri-date-input1").hijriDatePicker({ hijri:true });
        //$("#hijri-date-input2").hijriDatePicker({ hijri:true });

        //$("#gerogian-date-input1").hijriDatePicker({ hijri:false , format:'YYYY-MM-DD' });
        //$("#gerogian-date-input2").hijriDatePicker({ hijri:false , format:'YYYY-MM-DD' });


        $("#edition_date1").hijriDatePicker({
            hijri: false,
            format: 'YYYY-MM-DD'
        });
        $("#edition_date2").hijriDatePicker({
            hijri: false,
            format: 'YYYY-MM-DD'
        });

        $("#create_date1").hijriDatePicker({
            hijri: false,
            format: 'YYYY-MM-DD'
        });
        $("#create_date2").hijriDatePicker({
            hijri: false,
            format: 'YYYY-MM-DD'
        });
    });
</script>