<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body dir="rtl">
        <div class="container">
            <div class="row">
              <div class="col-4">
                <h3>الجمهورية العربية السورية</h3><br>
                <h4>جامعة تشرين</h4><br>
                <h4>كلية الهندسة المعلوماتية</h4>
              </div>
              <div class="col-1"></div>
              <div class="col-2"><img src="img/b.png" width="150" height="150"></div>
              <div class="col-1"></div>
              <div class="col-4">
                <h4>الموضوع:حياة جامعية</h4><br>
                <h4>الرقم : {{Auth::user()->Documents()->first()->id}}</h4><br>
                <h4>التاريخ : {{Auth::user()->Documents()->first()->created_at}}</h4>
              </div>
            </div>
          </div><hr>

    <div class="container">
        <div class="row">
            <div class="col12">
                <center><h3>إلى من يهمه الأمر</h3></center><br><br>
    <h5>بعد التأكد من معلومات الطالب : {{Auth::user()->student()->first()->name}}&nbsp;&nbsp; بـــــن : {{Auth::user()->student()->first()->fathername}}&nbsp;&nbsp; فـي السـنـة : {{Auth::user()->student()->first()->year}} &nbsp;&nbsp; قـسـم : {{Auth::user()->student()->first()->specilization}}&nbsp;&nbsp;<br><br> حسب نظام التسجيل : حديث&nbsp;&nbsp; مفاضلة : {{Auth::user()->student()->first()->differenatiation}} <br><br> <center>نبين لكم فيما يلي صورة عن الحياة الجامعية</centre></h5><br>
            </div>
        </div>
    </div>

<center dir="rtl">
<table border="4" class="table" style="width: 80%">
    <tr>
        <th scope="col">العام الدراسي</th>
        <th scope="col">السنة</th>
        <Th scope="col">النتيجة</Th>
        <th scope="col">السلوك والعقوبات والحرمان</th>
        <th scope="col">الدورة الامتحانية الأولى</th>
        <th scope="col">الدورة الامتحانية الثانية</th>
        <th scope="col">الدورة الامتحانية الثالثة</th>
        <th scope="col">ملاحظات</th>
    </tr>
    <?php
     use App\Models\Year;
     $year = Year::all()->where('user_id',Auth::user()->id);
     ?>

    @foreach ($year as $doc)
    <tr>

        <td>{{$doc->academicyear}}</td>
        <td>{{$doc->year}}</td>
        <td>{{$doc->status}}</td>
        <td></td>
        <td>{{$doc->firstexamsession}}</td>
        <td>{{$doc->secondexamsession}}</td>
        <td>{{$doc->thirdexamsession}}</td>
        <td>{{$doc->note}}</td>
    </tr>
    @endforeach

</table></center>
<center>
<h3> url = 
   <a href='{{route('cld',['id' => Auth::user()->Documents()->first()->id])}}'>document/collagelife/{{Auth::user()->Documents()->first()->id}}</a></h3></center>
</body>
</html>
