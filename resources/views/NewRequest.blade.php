<!DOCTYPE html>
<html>
    <haed>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    </haed>
    <body dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-4">
                <div>
                    <h2>الجمهورية العربية السورية</h3>
                    <h3>جامعة تشرين</h4>
                    <h3>كلية الهندسة المعلوماتية</h5>
                    <P>الرقم:</P>
                    <p>التاريخ:</p>
                </div>
                </div>
                <div class="col-2">
                    <div>
                        <center><img src="img/b.png" style="width: 220px;hieght:220px;"><center>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-5">
                    <div dir="ltr">
                        <h2>SYRIAN ARAB REPUBLIC</h4>
                        <h3>Tishreen University</h3>
                        <h3>Faculty of informatics engineering</h3>
                        <P>REF:</P>
                        <P>DATE:</P>
                    </div>
            </div>
        </div><hr>
        <center><h2>تقديم طلب {{$request->name}}</h2></center><br><br>
        @if ($addfield->field_1 == null)
            
        @else
            <label>{{$addfield->field_1}}</label>
            <input type="text" placeholder="ادخل {{$addfield->field_1}}">
            
        @endif


        @if ($addfield->field_2 == null)
            
        @else
            <label>{{$addfield->field_2}}</label>
            <input type="text" placeholder="ادخل {{$addfield->field_2}}">
            
        @endif
            
        @if ($addfield->field_3 == null)
            
        @else
            <label>{{$addfield->field_3}}</label>
            <input type="text" placeholder="ادخل {{$addfield->field_3}}">
            
        @endif

        @if ($addfield->field_4 == null)
            
        @else
            <label>{{$addfield->field_4}}</label>
            <input type="text" placeholder="ادخل {{$addfield->field_4}}">
            
        @endif
           <br><br>
        @if ($addfield->field_5 == null)
            
        @else
            <label>{{$addfield->field_5}}</label>
            <input type="text" placeholder="ادخل {{$addfield->field_5}}">
            
        @endif
        
        @if ($addfield->field_6 == null)
            
        @else
            <label>{{$addfield->field_6}}</label>
            <input type="text" placeholder="ادخل {{$addfield->field_6}}">
            
        @endif

        @if ($addfield->field_7 == null)
            
        @else
            <label>{{$addfield->field_7}}</label>
            <input type="text" placeholder="ادخل {{$addfield->field_7}}">
            
        @endif

        @if ($addfield->field_8 == null)
            
        @else
            <label>{{$addfield->field_8}}</label>
            <input type="text" placeholder="ادخل {{$addfield->field_8}}">
            
        @endif

        @if ($addfield->field_9 == null)
            
        @else
            <label>{{$addfield->field_9}}</label>
            <input type="text" placeholder="ادخل {{$addfield->field_9}}">
            
        @endif

        @if ($addfield->field_10 == null)
            
        @else
            <label>{{$addfield->field_10}}</label>
            <input type="text" placeholder="ادخل {{$addfield->field_10}}">
            
        @endif
        <br><br><br>



            <div class="container" dir="ltr">
                <div class="row">
                    <div class="col-12">
                         <?php
                             use App\Models\collagedean;
                             $collagedean = collagedean::latest('created_at')->first();
                            ?>
                        <h2>
                            عميد كلية الهندسة المعلوماتية<br>
                            
                               {{$collagedean->name}} 
                            
                        </h2>
                    </div>
                </div>
            </div>

            <center>
                <form method="post" action="{{route('collageliferequest')}}">
                    @csrf
                    @method('post')
                    <input type="text" name="type" value="{{$request->name}}" hidden>
                    <input type="submit" class="btn btn-outline-dark" value="إرسال">
                </form>
            </center><br><br>
    </body>

</html>