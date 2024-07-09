<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    </head>
    <body dir="rtl">
        
    <div class="container">
    <div class="row">
        <div class="col-6" style="margin-top:5%;margin-right:25%"><center>
            <div style="width:100%;background-color:lightgrey;hieght:400px;padding:50px;border-radius:50px;">
            <h3 style="color:#0082e6;">تفعيل وثيقة جديدة</h3><br>
            <form method="post" action="{{route('addrequest')}}">
                @csrf
                <div class="form-group">
                    <div class="item-group">
                        <input type="text" name="name" placeholder="ادخل اسم الوثيقة"><br><BR>
                        <input type="submit" value="إدخال" class="btn btn-outline-primary">
                    </div>
                </div>
            </form>
            </div></center>
        </div>
    </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-6" style="margin-top:5%;margin-right:25%"><center>
            <div style="width:100%;background-color:lightgrey;hieght:400px;padding:50px;border-radius:50px;">
            <h3 style="color:#0082e6;">تغيير اسم عميد الكلية</h3><br>
            <form method="post" action="{{route('collagedean')}}">
                @csrf
                <div class="form-group">
                    <div class="item-group">
                        <input type="text" name="name" placeholder="ادخل اسم عميد الكلية"><br><br>
                        <input type="submit" value="تحديث" class="btn btn-outline-primary">
                    </div>
                </div>
            </form>
            </div></center>
        </div>
    </div>
    </div><br><br>
    </body>
</html>