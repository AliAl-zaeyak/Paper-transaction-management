<!DOCTYPE html>
<html dir="rtl">
    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <table class="table" style="width: 100%">
            <tr>
            <th style="background: #c02935;color:white;">الشكوى</th>
            <th style="background: #c02935;color:white;">تاريخ تقديم الشكوى</th>
            <th style="background: #c02935;color:white;">حالة الشكوى</th>
            <th style="background: #c02935;color:white;">قبول</th>
            <th style="background: #c02935;color:white;">إرسال رد</th>
            </tr>

        @foreach ($problems as $problem)
        <tr>
        <td>{{$problem->problem}}</td>
        <td>{{$problem->created_at}}</td>
        <td>{{$problem->status}}</td>
        <td>
        <form method="post" action="{{Route('acceptproblem')}}">
            @csrf
            <input type="text" name="status" value="تم قبول الطلب" style="display:none">
            <input type="text" name="id" value="{{$problem->id}}" style="display:none">
            <center><input type="submit" class="btn btn-outline-danger" value="قبول"><center>
        </form>
        </td>
        <td>
        <form method="post" action="{{route('replayproblem')}}">
            @csrf
            <input type="text" name="status" value="تم الرد" style="display:none">
            <input type="text" name="id" value="{{ $problem->id }}" style="display: none">
            <input type="text" name="reply" required style="width:90%;height:30px;margin-right:5%;"><br><br>
            <input type="text" name="text" value="تم استلام رد على الشكوى المقدمة" style="display: none">
            <input type="text" name="user_id" value="{{$problem->user()->first()->id}}" style="display: none">
            <center><input type="submit" class="btn btn-outline-danger" value="إرسال رد" style="width: 50%;"><center>
        </form>
        </td>
        </tr>
        @endforeach
    </table>
    </body>
</html>
