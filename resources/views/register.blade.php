<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body dir="rtl"  >
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

                  </ul>
                </div>
              </nav>

              <form method="post" action="{{route('register')}}" style="width: 40%; margin-right: 30%;">
                @csrf
               <br> <h2 style="color: #0082e6">إنشاء حساب</h2> <br>
                <div class="form-group">
                <div class="item-group">
                  <label >الإسم</label>
                  <input class="form-control" type="text" name="name" placeholder="أدخل الإسم والكنية" :value="old('name')" required autofocus autocomplete="name">
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div><br>
                <div class="item-group">
                  <label >البريد الإلكتروني</label>
                  <input class="form-control" type="text" name="email" placeholder="أدخل بريدك الإلكتروني" :value="old('email')" required autocomplete="username">
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div><br>
                <div class="item-group">
                  <label >كلمة المرور</label>
                  <input class="form-control" type="password" name="password" placeholder="أدخل كلمة المرور" required autocomplete="new-password">
                  <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div><br>
                <div class="item-group">
                  <label >تأكيد كلمة المرور</label>
                  <input class="form-control" type="password" name="password_confirmation" placeholder="أعد إدخال كلمة المرور" required autocomplete="new-password">
                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div><br><br>
                <div class="item-group">
                  <input type="submit"  value="إنشاء حساب" class="btn btn-outline-primary">
                </div>
              </form>


    </body>
</html>
