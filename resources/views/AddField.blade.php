<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body dir="rtl">
<br>
<center><h2 style="color: #0082e6">إدخال الحقول الخاصة بتقديم طلب {{Auth::user()->AddReqest()->latest()->first()->name}}</h2></center><br><br>
    <center>
     <form method="post" action="{{route('addfield')}}">
        @csrf
    <div class="form-group">
    <div class="item-group">
    <div id="field1">
        <input type="text" name="field_1" class="form-control" style="width: 50%" oninput="showField2()" placeholder="ادخل الحقل الأول">
    </div><br>
    </div>
    <div class="form-group">
    <div class="item-group">
    <div id="field2"style="display: none;">
        <input type="text" name="field_2" class="form-control" style="width: 50%" oninput="showField3()" placeholder="ادخل الحقل الثاني">
    </div><br>
    </div>
    <div class="form-group">
    <div class="item-group">
    <div id="field3"style="display: none;">
        <input type="text" name="field_3" class="form-control" style="width: 50%" oninput="showField4()" placeholder="ادخل الحقل الثالث">
    </div><br>
    </div>
    <div class="form-group">
    <div class="item-group">
    <div id="field4"style="display: none;">
        <input type="text" name="field_4" class="form-control" style="width: 50%" oninput="showField5()" placeholder="ادخل الحقل الرابع">
    </div><br>
    </div>
    <div class="form-group">
    <div class="item-group">
    <div id="field5"style="display: none;">
        <input type="text" name="field_5" class="form-control" style="width: 50%" oninput="showField6()" placeholder="ادخل الحقل الخامس">
    </div><br>
    </div>
    <div class="form-group">
    <div class="item-group">
    <div id="field6"style="display: none;">
        <input type="text" name="field_6" class="form-control" style="width: 50%" oninput="showField7()"  placeholder="ادخل الحقل السادس">
    </div><br>
    </div>
    <div class="form-group">
    <div class="item-group">
    <div id="field7"style="display: none;">
        <input type="text" name="field_7" class="form-control" style="width: 50%" oninput="showField8()"  placeholder="ادخل الحقل السابع">
    </div><br>
    </div>
    <div class="form-group">
    <div class="item-group">
    <div id="field8"style="display: none;">
        <input type="text" name="field_8" class="form-control" style="width: 50%" oninput="showField9()"  placeholder="ادخل الحقل الثامن">
    </div><br>
    </div>
    <div class="form-group">
    <div class="item-group">
    <div id="field9"style="display: none;">
        <input type="text" name="field_9" class="form-control" style="width: 50%" oninput="showField10()"  placeholder="ادخل الحقل التاسع">
    </div><br>
    </div>
    <div class="form-group">
    <div class="item-group">
    <div id="field10"style="display: none;" >
        <input type="text" name="field_10" class="form-control" style="width: 50%"  placeholder="ادخل الحقل العاشر">
    </div><br>
    </div>
    <center>
    <input type="submit" value="إدخال" class="btn btn-outline-primary">
    </center>
</form>
    </center>

<script>
function showField2() {
    document.getElementById('field2').style.display = 'block';
}
function showField3() {
    document.getElementById('field3').style.display = 'block';
}
function showField4() {
    document.getElementById('field4').style.display = 'block';
}
function showField5() {
    document.getElementById('field5').style.display = 'block';
}
function showField6() {
    document.getElementById('field6').style.display = 'block';
}
function showField7() {
    document.getElementById('field7').style.display = 'block';
}
function showField8() {
    document.getElementById('field8').style.display = 'block';
}
function showField9() {
    document.getElementById('field9').style.display = 'block';
}
function showField10() {
    document.getElementById('field10').style.display = 'block';
}
</script>
    
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


