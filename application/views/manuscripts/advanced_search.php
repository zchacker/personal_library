<div class="row">
    <div class="col col-12">
        <form action="<?= base_url(); ?>manuscripts/advanced_search_results" method="post">
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
                    <input type="text" name="registery_number" class="form-control" placeholder="رقم السجل" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">رقم الحفظ</label>
                    <input type="text" name="save_number" class="form-control" placeholder="رقم الحفظ" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">الفن الأصلي</label>
                    <input type="text" name="org_art" class="form-control" placeholder="الفن الأصلي" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">الفن الفرعي</label>
                    <input type="text" name="branch_art" class="form-control" placeholder=" الفن الفرعي" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">العنوان الأصلي</label>
                    <input type="text" name="org_title" class="form-control" placeholder=" العنوان الأصلي" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">العنوان الفرعي</label>
                    <input type="text" name="branch_title" class="form-control" placeholder=" العنوان الفرعي" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اسم المؤلف</label>
                    <input type="text" name="auther_name" class="form-control" placeholder=" اسم المؤلف" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">لقبه</label>
                    <input type="text" name="auther_nickname" class="form-control" placeholder=" لقبه" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">مصادر ترجمته</label>
                    <input type="text" name="translate_sources" class="form-control" placeholder=" مصادر ترجمته" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">بداية المخطوط</label>
                    <input type="text" name="book_start" class="form-control" placeholder=" بداية المخطوط" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">نهاية المخطوط</label>
                    <input type="text" name="book_end" class="form-control" placeholder=" نهاية المخطوط" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">عدد الأوراق</label>
                    <input type="text" name="pages_number" class="form-control" placeholder=" عدد الأوراق" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اكتمال النسخة</label>
                    <input type="text" name="compelete_version" class="form-control" placeholder=" اكتمال النسخة" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اسم الناسخ</label>
                    <input type="text" name="copy_name" class="form-control" placeholder=" اسم الناسخ" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">مكان النسخ</label>
                    <input type="text" name="copy_location" class="form-control" placeholder=" مكان النسخ" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">نوع الخط</label>
                    <input type="text" name="font_type" class="form-control" placeholder=" نوع الخط" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">ملحوظة</label>
                    <input type="text" name="note" class="form-control" placeholder=" ملحوظة" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">جهة حفظ الأصل</label>
                    <input type="text" name="custodian_asset" class="form-control" placeholder=" جهة حفظ الأصل" />
                </div>
            </div>            

            <div class="form-group">
                <div class="col-md-6">
                    <label for="">اسم مدخل البيانات</label>
                    <input type="text" name="entry_name" class="form-control" placeholder=" عبارة البحث" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">تاريخ وفاة المؤلف هجريا</label>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">من</label>
                            <input type="text" class="form-control" name="auther_hijri_death1" id="auther_hijri_death1" autocomplete="off" placeholder="تاريخ الطبعة من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="auther_hijri_death2" id="auther_hijri_death2" autocomplete="off" placeholder="تاريخ الطبعة إلى" />
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
                            <input type="text" class="form-control" name="auther_hijri_death_century1" id="auther_hijri_death_century1" autocomplete="off" placeholder="سنة الوفاه هجري من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="auther_hijri_death_century2" id="auther_hijri_death_century2" autocomplete="off" placeholder="سنة الوفاه هجري إلى" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">تاريخ وفاة المؤلف ميلاديا</label>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">من</label>
                            <input type="text" class="form-control" name="auther_gregorian_death1" id="auther_gregorian_death1" autocomplete="off" placeholder="سنة الوفاه هجري من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="auther_gregorian_death2" id="auther_gregorian_death2" autocomplete="off" placeholder="سنة الوفاه هجري إلى" />
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
                            <input type="text" class="form-control" name="auther_gregorian_death_century1" id="auther_gregorian_death_century1" autocomplete="off" placeholder="سنة الوفاه هجري من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="auther_gregorian_death_century2" id="auther_gregorian_death_century2" autocomplete="off" placeholder="سنة الوفاه هجري إلى" />
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
                            <input type="text" class="form-control" name="version_date_hijri1" id="version_date_hijri1" autocomplete="off" placeholder="سنة الوفاه هجري من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="version_date_hijri2" id="version_date_hijri2" autocomplete="off" placeholder="سنة الوفاه هجري إلى" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">قرن النسخ هجرياً</label>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">من</label>
                            <input type="text" class="form-control" name="version_date_century1" id="version_date_century1" autocomplete="off" placeholder="سنة الوفاه هجري من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="version_date_century2" id="version_date_century2" autocomplete="off" placeholder="سنة الوفاه هجري إلى" />
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
                            <input type="text" class="form-control" name="entry_date1" id="entry_date1" autocomplete="off" placeholder="تاريخ ادخال الكتاب من" />
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">إلى</label>
                            <input type="text" class="form-control" name="entry_date2" id="entry_date2" autocomplete="off" placeholder="تاريخ ادخال الكتاب إلى" />
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

            <br/>
            <br/>
            <br/>

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