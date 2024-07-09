<!DOCTYPE html>
<html>
    <haed>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    </haed>
    <body dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-4">
                <div>
                    <h2>الجمهورية العربية السورية</h3>
                    <h3>جامعة تشرين</h4>
                    <h3>كلية الهندسة المعلوماتية</h5>
                    <P>الرقم:</P>
                    <p>التاريخ:</p>
                </div>
                </div>
                <div class="col-2">
                    <div>
                        <center><img src="img/b.png" style="width: 220px;hieght:220px;"><center>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-5">
                    <div dir="ltr">
                        <h2>SYRIAN ARAB REPUBLIC</h4>
                        <h3>Tishreen University</h3>
                        <h3>Faculty of informatics engineering</h3>
                        <P>REF:</P>
                        <P>DATE:</P>
                    </div>
            </div>
        </div><hr>
        <center> <h2>طلب الحصول على وثيقة دوام <br>
            السيد الأستاذ الدكتور عميد كلية الهندسة المعلوماتية</h2></center><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                      <h3>
                        مقدمه الطالب : {{Auth::user()->student()->first()->name}} بـن : {{Auth::user()->student()->first()->fathername}} السنة : {{Auth::user()->student()->first()->year}} القسم : {{Auth::user()->student()->first()->specilization}}<br>
                      </h3><br>
                        <h2>أعرض ما يلي</h2><br>
                        <h3>
                        أرجو الموافقة على منحي وثيقة دوام للعام الدراسي : 2022-2023 الفصل : الثاني
                      </h3>
                    </div>
                </div>
            </div><br><br>

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h2>اســم الطـالـب : {{Auth::user()->student()->first()->name}} <br> رقمه الجامعي : {{Auth::user()->student()->first()->universitynumber}}</h2><br>
                    </div>
                    <div class="col-6" dir="ltr">
                        <?php
                             use App\Models\collagedean;
                             $collagedean = collagedean::latest('created_at')->first();
                            ?>
                        <h2>
                            عميد كلية الهندسة المعلوماتية<br>
                            
                               {{$collagedean->name}} 
                            
                        </h2>
                    </div>
                </div>
            </div>

        <center>
        <form method="post" action="{{route('collageliferequest')}}">
            @csrf
            @method('post')
            <input type="text" name="type" value="وثيقة دوام" hidden>
            <input type="submit" class="btn btn-outline-dark" value="إرسال">
        </form></center><br><br>
    </body>
</html>
