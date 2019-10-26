@extends('agahi.layoutAgahi')
@section('agahi2')



  @if (!empty($kharidC))
  <span class="labela4" for="">قیمت کل</span>
  <input oninput="sub6('#price','#priceajax')"   onkeypress='validate(event)' type="text" id="price" class="a2-3" placeholder="قیمت به تومان">
  <div class="ajax" id="priceajax" style="font-size:16px; color:rgb(106, 163, 0);">
  </div>
  @endif

@if (!empty($vadieC))
  <span class="labela4" for="">ودیعه</span>
  <input  oninput="sub2('#vadie','#vadieajax')" type="text" id="vadie" class="a2-3"  onkeypress='validate(event)' placeholder="قیمت به تومان">
  <div class="ajax" id="vadieajax" style="font-size:16px; color:rgb(106, 163, 0);">

  </div>
  @endif

  @if (!empty($ejareC))
  <span class="labela4" for="">اجاره</span>
  <input  oninput="sub3('#ejare','#ejareajax')" type="text" id="ejare" class="a2-3"  onkeypress='validate(event)' placeholder="قیمت به تومان">
  <div class="ajax" id="ejareajax" style="font-size:16px; color:rgb(106, 163, 0);">

  </div>
  @endif

  @if (!empty($ejaredayC))
  <span class="labela4" for="">اجاره روزانه</span>
  <input  oninput="sub7('#ejareday','#ejareajax')" type="text" id="ejareday" class="a2-3"  onkeypress='validate(event)' placeholder="قیمت به تومان">
  <div class="ajax" id="ejareajax" style="font-size:16px; color:rgb(106, 163, 0);">

  </div>
  @endif

  @if (!empty($moavezeC))
    <span class="labela4-1" for="">معاوضه میکنم</span>
    <input  type="checkbox" value="1" id="moaveze" class="labela4-2">
  @endif

@if (!empty($tedadotaghC))
  <span class="labela4" for="">تعداد اتاق</span>
 <select class="a2-3" id="tedadotagh">
   <option  value="" ></option>
   <option value="100">بدون اتاق</option>
   <option value="1">یک</option>
   <option value="2">دو</option>
   <option value="3">سه</option>
   <option value="4">چهار</option>
   <option value="5">پنج یا بیشتر</option>
 </select>
@endif

@if (!empty($salesakhtC))
 <span class="labela4" for="">سال ساخت</span>
<select class="a2-3" id="salesakht">
  <option value=""></option>
  <option>1398</option>
  <option>1397</option>
  <option>1396</option>
  <option>1395</option>
  <option>1394</option>
  <option>1392</option>
  <option>1391</option>
  <option>1390</option>
  <option>1389</option>
  <option>1388</option>
  <option>1387</option>
  <option>1386</option>
  <option>1385</option>
  <option>1384</option>
  <option>1383</option>
  <option>1382</option>
  <option>1381</option>
  <option>1380</option>
</select>
@endif

@if (!empty($codemeliC))
  <span class="labela4" for="">کد ملی(اختیاری)</span>
  <input  type="text" id="codemeli" class="a2-3"  onkeypress='validate(event)' placeholder="اختیاری">
@endif

@if (!empty($sanadC))
  <span class="labela4-1" for="">سند اداری</span>
  <input  type="checkbox" value="1" id="sanad" class="labela4-2">
@endif
@endsection
