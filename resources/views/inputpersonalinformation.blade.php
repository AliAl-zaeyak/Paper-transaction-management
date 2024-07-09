
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.css" />
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
                  <a class="nav-link text-light" href="http://127.0.0.1:8000"><h6>الصفحة السابقة</h6></a>
                </li>
              </ul>
            </div>
          </nav><br>
          <center><h2 style="color:#0082e6;">أدخل البيانات الخاصة بك</h2></center>
            <form class="form1" method="post" action="{{route('complete')}}" style="width: 40%; margin-right:30%;">
              @csrf                
                <div class="form-group">
                    <div class="item-group">
                      <label >الإسم:</label>
                      <input class="form-control" type="text" name="name" placeholder="أدخل الإسم والكنية" required>
                    </div><br>
                    <div class="item-group">
                      <label >اسم الأب:</label>
                      <input class="form-control" type="text" name="fathername" placeholder="ادخل اسم الأب" required>
                    </div><br>
                    <div class="item-group">
                      <label >اسم الأم:</label>
                      <input class="form-control" type="text" name="mothername" placeholder="ادخل اسم الأم" required>
                    </div><br>
                    <div class="item-group">
                      <label >تولد:</label>
                      <input class="form-control" type="text" name="born" placeholder="مثال طرطوس - 2000" required>
                    </div><br>
                    <div class="item-group">
                      <label>المحافظة المقيم بها :</label>
                      <input class="form-control" type="text" name="governorate" placeholder="ادخل المحافظة التي تقيم بها" required>
                    </div><br>
                    <div class="item-group">
                      <label >الجنسية:</label>
                      <input class="form-control" type="text" name="nationality" placeholder="ادخل جنسيتك" required>
                    </div><br>
                    <div class="item-group">
                      <label >الرقم الجامعي:</label>
                      <input class="form-control" type="text" name="universitynumber" placeholder="ادخل الرقم الجامعي" required>
                    </div><br>
                    <div class="item-group">
                      <label >الرقم الوطني:</label>
                      <input class="form-control" type="text" name="natunalnumber" placeholder="ادخل الرقم الوطني" required>
                    </div><br>
                    <div class="item-group">
                        <label >تاريخ إصدار البطاقة الشخصية:</label>
                        <input class="form-control" type="text" name="dateoficard" placeholder="ادخل تاريخ صدور البطاقة الشخصية" required>
                    </div><br>
                    <div class="item-group">
                      <label >أدخل رقم هاتفك :</label>
                      <input class="form-control" type="text" name="phonenumber" placeholder="ادخل رقم الهاتف الخاص بك" required>
                  </div><br>
                    <div class="item-group">
                        <label>عام التخرج : </label>
                        <input class="form-control" type="text" name="graduationdate" placeholder="ادخل عام التخرج" required>
                    </div><br>
                    <div class="select-group">
                        <label >نوع المفاضلة </label><br>
                        <select name="differenatiation">
                            <option value="عام">عام</option>
                            <option value="موازي">موازي</option>
                            <option value="معوقين">معوقين</option>
                            <option value="ذوي شهداء">ذوي شهداء</option>
                            <option value="سوري غير مقيم">سوري غير مقيم</option>
                        </select>
                    </div><br>
                    <div class="select-group">
                        <label >الإختصاص:</label><br>
                        <select name="specilization">
                            <option value="برمجيات ونظم المعلومات">برمجيات ونظم المعلومات</option>
                            <option value="الشبكات والنظم الحاسوبية">الشبكات والنظم الحاسوبية</option>
                            <option value="الذكاء الصنعي">الذكاء الصنعي</option>
                        </select>
                    </div><br>
                    <div class="select-group">
                        <label >السنة الدراسية:</label><br>
                        <select name="year">
                            <option value="أولى" selected="selected">أولى</option>
                            <option value="ثانية" selected="selected">ثانية</option>
                            <option value="ثالثة" selected="selected">ثالثة</option>
                            <option value="رابعة" selected="selected">رابعة</option>
                            <option value="خامسة" selected="selected">خامسة</option>
                        </select>
                    </div><br>
                    <div class="select-group">
                        <label >وضع الطالب:</label><br>
                        <select name="status">
                            <option value="مستجد">مستجد</option>
                            <option value="راسب">راسب</option>
                            <option value="خريج">خريج</option>
                         </select><br>
                    </div><br>
                    <div class="item-group">
                        <center><input class="btn btn-outline-primary" type="submit" value="إدخال"></center><br><br>
                    </div>
            </form>
    </body>
</html>