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

        @section('name')
        <input type="text" value="{{Auth::user()->student()->first()->name}}" required>
        @endsection
        @section('fathername')
        <input type="text" value="{{Auth::user()->student()->first()->fathername}}" required>
        @endsection
        @section('year')
        <input type="text" value="{{Auth::user()->student()->first()->year}}" required>
        @endsection
        @section('specilization')
        <input type="text" value="{{Auth::user()->student()->first()->specilization}}" required>
        @endsection
        @section('universitynumber')
        <input type="text" value="{{Auth::user()->student()->first()->universitynumber}}" required>
        @endsection
        @section('registerdate')
        <select>
            <option></option>
            <option></option>
        </select>
        @endsection
        @section('result')
        <select>
            <option></option>
            <option></option>
        </select>
        @endsection

        <center><h2>طلب الحصول على حياة جامعية</h2></center><br><br>


        <form method="post" action="{{route('collageliferequest')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>مقدمه : {{Auth::user()->student()->first()->name}} بن : {{Auth::user()->student()->first()->fathername}} السنة : {{Auth::user()->student()->first()->year}}
                    الـقـسـم : {{Auth::user()->student()->first()->specilization}}<br> الـرقـم الـجـامـعـي : {{Auth::user()->student()->first()->universitynumber}}  تـاريـخ الـتـسـجـيـل لأول مـرة : 17-10-2018<br><br>
                    أعرض ما يلي : <br><br>
                    أرجو الموافقة على منحي وثيقة حياة جامعية كاملة الأركان وموثقة أصولاً<br>
                    علماً أنني : {{Auth::user()->student()->first()->status}}
                    عـام : {{Auth::user()->student()->first()->academicyear}}
                </div>
            </div>
        </div><br><br>



        <div class="container" >
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
        
    
        
        <form method="post" action="{{route('collageliferequest')}}">
        @csrf
        @method('post')
        <input type="text" name="type" value="حياة جامعية" hidden>
        <center><input type="submit" class="btn btn-outline-dark" value="إرسال"></center>
    </form><br><br>
    </body>
</html>
