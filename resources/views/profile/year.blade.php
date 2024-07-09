<form method="post" action="{{route('year')}}">
    @csrf
    الرقم الجامعي
    <input type="text" name="universitynumber"><br>
    السنة
    <input type="text" name="year"><br>
    العام الدراسي
    <input type="text" name="academicyear"><br>
    الدورة الامتحانية الاولى
    <input type="text" name="firstexamsession"><br>
    الدورة الامتحانية الثانية
    <input type="text" name="secondexamsession"><br>
    الدورة الامتحانية الثالثة
    <input type="text" name="thirdexamsession"><br>
    ملاحظات
    <input type="text" name="note"><br>
    نتيجة الطالب
    <input type="text" name="status"><br>
    تاريخ التسجيل
    <input type="text" name="registerdate"><br>
    <input type="submit" value="SEND">
</form>
