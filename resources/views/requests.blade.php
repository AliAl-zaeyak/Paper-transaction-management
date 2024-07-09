<!DOCTYPE html>
<html dir="rtl">
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    </head>
    <body>
        <table class="table">
            <tr class="bg-primary">
                <th class="text-white">رقم الطلب</th>
                <th class="text-white">اسم مقدم الطلب</th>
                <th class="text-white"> نوع الطلب</th>
                <th class="text-white"> حالة الطلب</th>
                <th class="text-white">تاريخ الطلب</th>
                <th class="text-white">قبول الطلب</th>
                <th class="text-white">إرسال الوثيقة</th>
            </tr>
            <?php
            use App\Models\Orequest;
            $orequest = Orequest::all();
            ?>
            @foreach ($orequest as $req )

            <tr>
            <td> {{ $req->id }} </td>
            <td>{{$req->student()->first()->name}}</td>
            <td>{{$req->type}}</td>
            <td>@if ($req->status == 'تم الارسال')
                تم الاستلام
                @else
                {{$req->status}}
                @endif
            </td>
            <td>{{$req->created_at}}</td>
            <td>

                <form method="post" action="{{route('accept')}}">
                    @method('post')
                    @csrf
                    <input type="text" name="status" hidden value="تم قبول الطلب">
                    <input type="submit" class="btn btn-outline-primary" value="قبول">
                    <input type="text" name="id" value="{{ $req->id }}" style="display: none">
                </form>
            </td>
            <td>
                <form method="post" action="{{route('send')}}">
                    @method('post')
                    @csrf
                    <input type="text" name="status" value="تم التسليم بنجاح" style="display: none">
                    <input type="text" name="id" value="{{ $req->id }}" style="display: none">
                    <input type="text" name="type" value="{{$req->type}}" style="display: none">
                    <input type="text" name="text" value="تم استلام {{$req->type}}" style="display: none">
                    <input type="text" name="user_id" value="{{$req->student()->first()->user_id}}" style="display: none">
                    <input type="text" name="verified_by" value="{{Auth::user()->first()->id}}" style="display: none">
                    <input type="submit" class="btn btn-outline-primary" value="إرسال">
                </form>
            </td>
            <tr>
                @endforeach
                <script>
                    let register = {status}
                fetch("{{route('accept')}}",{
                        method : "post",
                        body : JSON.stingify("register"),
                        headers : {'content-type' : 'application/json'}
                });
                </script>
        </table>
    </body>
</html>

