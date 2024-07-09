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
          </nav><br>

        <center><h1 class="text-danger">تقديم شكوى</h1></center><br><br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="{{route('sendproblem')}}">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="form-group">
                        <div class="item-group">
                            <input type="text" name="problem" style="width: 100%; height:100px;" placeholder="قم بكتابة الشكوى هنا"><br><br><br>
                        </div>
                        <div class="item-group">
                            <center><input type="submit" class="btn btn-outline-danger" value="تقديم الشكوى"></center><br><br><br>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
