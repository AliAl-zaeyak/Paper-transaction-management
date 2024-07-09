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
        
        <center><h1>طلب إيقاف تسجيل</h1></center>
        <center><h1>السيد الدكتور عميد الكلية</h1></center><br><br>



        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <h3>مقدمه : {{Auth::user()->student()->first()->name}} بن : {{Auth::user()->student()->first()->fathername}}
                        المسجل في كلية الهندسة المعلوماتية قسم : {{Auth::user()->student()->first()->specilization}} المتمتع بالجنسية : {{Auth::user()->student->first()->nationality}}
                        حامل البطاقة الشخصية رقم : {{Auth::user()->student()->first()->natunalnumber}}<br> الصادرة بتاريخ : {{Auth::user()->student()->first()->dateoficard}}
                        المحافظة التي يسكن بها الطالب : {{Auth::user()->student()->first()->governorate}}<br> رقم هاتفه : {{Auth::user()->student()->first()->phonenumber}}<br><br>
                        أرجو الموافقة على إيقاف تسجيلي عن الفصل الدراسي : الثاني<br> اعتباراً من العام الدراسي : {{Auth::user()->student()->first()->academicyear}}<br><br>
                        مع الإشار أنني سجلت في العام الدراسي الأنف ذكره
                        تحت طائلة اتخاذ الإجراءات اللازمة بحقي في حال ثبوت ما يخالف ذلك.</h3>
                </div>
            </div>
        </div><br><br>
    
        
       <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2>اسـم الـطـالـب : {{Auth::user()->student()->first()->name}}</h2>
                    <h2>الـرقـم الـجـامـعـي : {{Auth::user()->student()->first()->universitynumber}}</h2>
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
            <input type="text" name="type" value="إيقاف تسجيل" hidden>
            <input type="submit" class="btn btn-outline-dark" value="إرسال">
        </form></center><br><br>

    </body>
</html>
