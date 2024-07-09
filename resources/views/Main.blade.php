<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
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
                  <a class="nav-link text-light" href="{{route('welcome')}}"><h6>الصفحة السابقة</h6></a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <a class="nav-link text-light" href="route('logout')"onclick="event.preventDefault();this.closest('form').submit();"><h6>تسجيل الخروج</h6></a>
                    </form>
                </li>
                <li><a class="nav-link text-light" href="{{route('sendproblem')}}"><H6>تقديم شكوى</H6></a></li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <?php
                             use App\Models\Notification;
                             $Notification = Notification::all()->where('user_id',Auth()->user()->id);
                             use App\Models\Document;
                             $doc= Document::all()->where('type' ,'حياة جامعية')->where('user_id',Auth()->user()->id);
                            ?>

                            @foreach ($Notification as $not)
                            @if ($not->text == 'تم استلام حياة جامعية')
                            <li><a class="dropdown-item" href="{{route('collagelifedocument')}}">{{$not->text}}</a></li>
                            @else
                            @if ($not->text == 'تم استلام وثيقة دوام')
                            <li><a class="dropdown-item" href="{{route('t')}}">{{$not->text}}</a></li>
                            @else
                            <li><a class="dropdown-item" href="{{route('m')}}">{{$not->text}}</a></li>
                            @endif
                                
                            @endif
                            
                            @endforeach
                           

                        </ul>
                      </div>
                </li>

              </ul>
            </div>
          </nav><br><br>


        <div class="container">
            <div class="row">
                <div class="col-6">
                    <center>
                    <div style="width:100%;background-color:lightgrey;hieght:450px;padding:70px;border-radius:50px;">
                    <h3 style="color:#0082e6;">تقديم طلب وثيقة دوام:</h3><br><br>
                    <input type="button" class="btn btn-outline-primary" value="وثيقة دوام" onclick="timedocument();">
                    </div>
                    </center>
                </div>
                <div class="col-6">
                    <center>
                        <div style="width:100%;background-color:lightgrey;hieght:450px;padding:70px;border-radius:50px;">
                            <h3 style="color:#0082e6;">تقديم طلب إشعار تخرج :</h3><br><br>
                            <input type="button" class="btn btn-outline-primary" value="إشعار تخرج" onclick="gn();">
                            </div>
                    </center>
                </div>
            </div><br><br>

            <div class="row">
                <div class="md col-6">
                    <center>
                    <div style="width:100%;background-color:lightgrey;hieght:450px;padding:70px;border-radius:50px;">
                    <h3 style="color:#0082e6;">تقديم طلب حياة جامعية:</h3><br><br>
                    <input type="button" class="btn btn-outline-primary" value="حياة جامعية" onclick="collagelife();">
                    </div>
                    </center>
                </div>
                <div class="md col-6">
                    <center>
                        <div style="width:100%;background-color:lightgrey;hieght:450px;padding:70px;border-radius:50px;">
                            <h3 style="color:#0082e6;">تقديم طلب إيقاف تسجيل :</h3><br><br>
                            <input type="button" class="btn btn-outline-primary" value="إيقاف تسجيل" onclick="stop();">
                            </div>
                    </center>
                </div>
            </div><br><br>

        

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <center>
                    <div style="width:100%;background-color:lightgrey;hieght:450px;padding:70px;border-radius:50px;">
                    <h3 style="color:#0082e6;">مراقبة حالة الطلبات :</h3><br><br>
                    <input type="button" class="btn btn-outline-primary" value="حالة الطلب" onclick="status();">
                    </div>
                    </center>
                </div>
                <div class="col-2"></div>
            </div><br><br>
                
            
            
            
            <?php
            use App\Models\AddReqest;
            $req = AddReqest::all();
            ?>
            @foreach ($req as $re )
            <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <center>
                <div style="width:100%;background-color:lightgrey;hieght:450px;padding:70px;border-radius:50px;">
                <h3 style="color:#0082e6;">تقديم طلب {{$re->name}}</h3><br><br>
                <form method="post" action="{{route('adr')}}">
                    @csrf
                    <div class="form-group">
                        <div class="item-group">
                            <input type="submit" value="{{$re->name}}" class="btn btn-outline-primary">
                            <input type="text" name="id" value="{{$re->id}}" hidden>
                        </div>
                    </div>
                </form>
                </div>
                </center>
            </div>
            <div class="col-2"></div>
            </div><br><br>
            @endforeach
        <script>
            function timedocument(){
                location='{{route('timedocument')}}';
            }
            function collagelife(){
                location='{{route('collageliferequest')}}';
            }
            function status(){
                location='{{route('requeststatus')}}';
            }
            function stop(){
                location='{{route('stop')}}';
            }
            function cld(){
                location='{{route('collagelifedocument')}}';
            }
            function gn(){
                location='{{route('gn')}}';
            }
        </script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-3.7.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
