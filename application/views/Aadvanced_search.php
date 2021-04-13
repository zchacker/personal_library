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
                <input type="radio" id="customRadioInline1" name="or_search" checked value="or" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">البحث باستخدام ( أو )</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="or_search" value="and" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">البحث باستخدام ( و )</label>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">رقم السجل</label>
                    <input type="text" name="subject" class="form-control" placeholder="رقم السجل" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">رقم الحفظ</label>
                    <input type="text" name="title" class="form-control" placeholder="رقم الحفظ" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">الفن الأصلي</label>
                    <input type="text" name="auther_name" class="form-control" placeholder="الفن الأصلي" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">الفن الفرعي</label>
                    <input type="text" name="nickname" class="form-control" placeholder=" الفن الفرعي" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">العنوان الأصلي</label>
                    <input type="text" name="folders" class="form-control" placeholder=" العنوان الأصلي" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">العنوان الفرعي</label>
                    <input type="text" name="pages" class="form-control" placeholder=" العنوان الفرعي" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اسم المؤلف</label>
                    <input type="text" name="publisher_name" class="form-control" placeholder=" اسم المؤلف" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">لقبه</label>
                    <input type="text" name="publisher_country" class="form-control" placeholder=" لقبه" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">مصادر ترجمته</label>
                    <input type="text" name="publisher_address" class="form-control" placeholder=" مصادر ترجمته" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">بداية المخطوط</label>
                    <input type="text" name="edition" class="form-control" placeholder=" بداية المخطوط" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">نهاية المخطوط</label>
                    <input type="text" name="notes" class="form-control" placeholder=" نهاية المخطوط" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">عدد الأوراق</label>
                    <input type="text" name="notes" class="form-control" placeholder=" عدد الأوراق" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اكتمال النسخة</label>
                    <input type="text" name="notes" class="form-control" placeholder=" اكتمال النسخة" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">تاريخ النسخ هجريا</label>
                    <input type="text" name="notes" class="form-control" placeholder=" تاريخ النسخ هجريا" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">قرن النسخ هجريا</label>
                    <input type="text" name="notes" class="form-control" placeholder=" قرن النسخ هجريا" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اسم الناسخ</label>
                    <input type="text" name="notes" class="form-control" placeholder=" اسم الناسخ" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">مكان النسخ</label>
                    <input type="text" name="notes" class="form-control" placeholder=" مكان النسخ" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">نوع الخط</label>
                    <input type="text" name="notes" class="form-control" placeholder=" نوع الخط" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">ملحوظة</label>
                    <input type="text" name="notes" class="form-control" placeholder=" ملحوظة" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">جهة حفظ الأصل</label>
                    <input type="text" name="notes" class="form-control" placeholder=" جهة حفظ الأصل" />
                </div>
            </div>            

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اسم مدخل البيانات</label>
                    <input type="text" name="user_name" class="form-control" placeholder=" عبارة البحث" />
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
                    <label for="inputEmail4" class="form-label">تاريخ وفات المؤلف هجريا</label>

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
                    <label for="inputEmail4" class="form-label">قرن الوفاة هجرياً</label>

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
                    <label for="inputEmail4" class="form-label">تاريخ وفات المؤلف ميلاديا</label>

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
                    <label for="inputEmail4" class="form-label">قرن الوفاة ميلاديا</label>

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
                    <label for="inputEmail4" class="form-label">تاريخ النسخ هجرياً</label>

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