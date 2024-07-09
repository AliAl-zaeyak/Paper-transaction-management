<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body dir="rtl">
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <a class="navbar-brand" href="#"><img src="img/b.png" width="85" height="85"></a>
            <a class="navbar-brand" href="#"><img src="img/a.jpg" width="85" height="85" style="border-radius: 90px;"></a>
            <h5 style="color: rgb(255, 255, 255); padding-right: 10px;">كلية الهندسة المعلوماتية</h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" dir="ltr">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('main')}}"><h6>الصفحة السابقة</h6></a>
                  </li>
              </ul>
            </div>
          </nav>
          <br><br>
          <center><h3 class="text-primary">حالة الطلبات المقدَمة</h3></center>
          <center>
    <table dir="rtl" class="table" style="margin-top: 50px;border: black solid 3px;width: 90%;">
        <th style="background-color: #0082e6;text-decoration: solid;border: 3px solid black;"><center><h5 style="color: white">الإسم</h5></center></th>
        <th style="background-color: #0082e6;text-decoration: solid;border: 3px solid black;"><center><h5 style="color: white">نوع الطلب</h5></center></th>
        <th style="background-color: #0082e6;text-decoration: solid;border: 3px solid black;"><center><h5 style="color: white">حالة الطلب</h5></center></th>
        <th style="background-color: #0082e6;text-decoration: solid;border: 3px solid black;"><center><h5 style="color: white">تاريخ إرسال الطلب</h5></center></th>
        @foreach ($orequests as $req)
        <tr>
            <td style="width: 25%;text-align: center;border: 2px solid black;">{{Auth::user()->student()->first()->name}}</td>
            <td style="width: 25%;text-align: center;border: 2px solid black;">{{$req->type}}</td>
            <td style="width: 25%;text-align: center;border: 2px solid black;">{{$req->status}}</td>
            <td style="width: 25%;text-align: center;border: 2px solid black;">{{$req->created_at}}</td>
        </tr>
        @endforeach
    </table></center>
</body>
</html>
