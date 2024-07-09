<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body dir="rtl">
        <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
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

<br>
          <center><h3 class="text-danger">الرد على الشكاوى التي قمت بإرسالها</h3><center>
    <table dir="rtl" style="margin-top: 50px;border: black solid 3px;width: 90%;">
        <th class="bg-danger" style="border: black solid 3px"><center><h5 style="color: white"> الشكوى المرسلة</h5><center></th>
        <th class="bg-danger" style="border: black solid 3px"><center><h5 style="color: white">حالة الشكوى</h5></center></th>
        <th class="bg-danger" style="border: black solid 3px"><center><h5 style="color: white">الرد على الشكوى</h5></center></th>
        <?php
            use App\Models\Problem;
            $Problem = Problem::all()->where('user_id',Auth()->user()->id);
        ?>
        @foreach ($Problem as $pro)
        <tr>
            <td style="width: 25%;text-align: center;border: 2px solid black;">{{$pro->problem}}</td>
            <td style="width: 25%;text-align: center;border: 2px solid black;">{{$pro->status}}</td>
            <td style="width: 25%;text-align: center;border: 2px solid black;">{{$pro->reply}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
