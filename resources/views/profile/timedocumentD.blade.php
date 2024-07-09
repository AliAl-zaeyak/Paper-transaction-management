<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body dir="rtl" >
        <div class="container">
            <div class="row">
              <div class="col-4">
                <h3>الجمهورية العربية السورية</h3><br>
                <h4>جامعة تشرين</h4><br>
                <h4>كلية الهندسة المعلوماتية</h4>
              </div>
              <div class="col-1"></div>
              <div class="col-2"><img src="img/b.png" width="150" height="150"></div>
              <div class="col-2"></div>
              <div class="col-3">
                <h4>الموضوع: وثيقة دوام</h4><br>
                <h4>الرقم : {{Auth::user()->Documents()->first()->id}}</h4><br>
                <h4>التاريخ : {{Auth::user()->Documents()->first()->created_at}} </h4>
              </div>
            </div>
          </div><hr border="4">

          <center><h3>وثيقة دوام</h3></center><br>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <center><h5>إن الطالب : {{Auth::user()->student()->first()->name}} &nbsp;&nbsp; مواليد : {{Auth::user()->student()->first()->born}} المتمتع بالجنسية : {{Auth::user()->student()->first()->nationality}}<br><br> طالب مسجل في كلية الهندسة المعلوماتية  &nbsp;&nbsp; السنة : {{Auth::user()->student()->first()->year}}&nbsp;&nbsp; قسم : {{Auth::user()->student()->first()->specilization}}&nbsp;&nbsp;<br><br> العام الدراسي : {{Auth::user()->student()->first()->academicyear}}&nbsp;&nbsp; الرقم الجامعي : {{Auth::user()->student()->first()->universitynumber}}&nbsp;&nbsp; وهو مداوم لغاية : {{Auth::user()->Documents()->first()->created_at}}</h5><center>
                </div>
            </div>
        </div><br><br>


        <center><h3>
        <a href='{{route('td',['id' => Auth::user()->Documents()->first()->id])}}'>document/timedocument/{{Auth::user()->Documents()->first()->id}}</a></h3></center>
    </body>
</html>
