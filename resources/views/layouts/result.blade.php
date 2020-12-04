@extends('layouts.app')
@section('content')
<section id="content" style="margin-bottom: 0px;">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="col_one_third nobottommargin">

                <div class="well well-lg nobottommargin">
                        <h3 class="unicode">သင်၏ ကိုယ်ရည်ကိုယ်သွေး</h3>

                        <p>သင်သည် လက်တွေ့ကျကျ ဆုံးဖြတ်ချက်ချသူ ဖြစ်သည်။ ဦးဆောင်ဦးရွက် လုပ်နိုင်သူလည်း ဖြစ်သည်။</p>
                </div>

            </div>

            <div class="col_two_third col_last nobottommargin">


                <h3 class="unicode">သင်၏ ကိုယ်ရည်ကိုယ်သွေးနှင့် ကိုက်ညီသော အလုပ် (၅) မျိုး။</h3>

                <div class="style-msg successmsg">
                    <div class="sb-msg">
                        <i class="icon-number"></i>
                        <strong>1</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font style="font-size: 18px;">
                            @php
                            $career = "";
                            if ($type == "estj") {
                                $career = "ရှေ့နေ";
                            } else if ($type == "istj") {
                                $career = "စာရင်းကိုင်";
                            } else if ($type == "esfj") {
                                $career = "အရောင်းကိုယ်စားလှယ်";
                            } else if ($type == "isfj") {
                                $career = "ကျောင်းဆရာ";
                            } else if ($type == "estp") {
                                $career = "ရဲ (စုံထောက်)";
                            } else if ($type == "istp") {
                                $career = "အင်ဂျင်နီယာ";
                            } else if ($type == "esfp") {
                                $career = "ကလေးအထူးကုဆရာဝန်";
                            } else if ($type == "isfp") {
                                $career = "ဖက်ရှင်ဒီဇိုင်နာ";
                            } else if ($type == "entj") {
                                $career = "အမှုဆောင်အရာရှိ";
                            } else if ($type == "intj") {
                                $career = "ဆော့ဝဲရေးဆွဲသူ (software developer)";
                            } else if ($type == "enfj") {
                                $career = "HR specialist";
                            } else if ($type == "infj") {
                                $career = "ပရဟိတသမား";
                            } else if ($type == "entp") {
                                $career = "စွန့်ဦးတီထွင်သမား";
                            } else if ($type == "intp") {
                                $career = "ကွန်ပြူတာပရိုဂရမ်မာ";
                            } else if ($type == "enfp") {
                                $career = "ကြော်ငြာဒါရိုက်တာ";
                            } else if ($type == "infp") {
                                $career = "ဂရပ်ဖစ်ဒီဇိုင်နာ (Graphic Designer)";
                            }
                            @endphp
                            {{$career}}
                        </font></div>
                </div>

                <br>
                <p>အောက်တွင်ကျန်ရှိနေသော အလုပ်အကိုင်များကို ကြည့်ရှုရန် ငွေ(၃၀၀)ကျပ် ပေးဆောင်ရန် လိုအပ်ပါသည်။ ငွေပေးချေပြီးသည်နှင့် ကျန်ရှိနေသော အလုပ်အကိုင်(၄)မျိုးကို viber (သို့) email သို့ပို့ပေးမည်ဖြစ်ပါသည်။ ငွေပေးချေရန်အတွက် အောက်ပါခလုတ်ကို နှိပ်ပါ။</p>

                <div class="style-msg successmsg">
                    <div class="sb-msg">
                        <i class="icon-number"></i>
                        <strong>2</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <font style="font-size: 18px;">.........</font>
                    </div>
                </div>

                <div class="style-msg successmsg">
                    <div class="sb-msg">
                        <i class="icon-number"></i>
                        <strong>3</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <font style="font-size: 18px;">.........</font>
                    </div>
                </div>

                <div class="style-msg successmsg">
                    <div class="sb-msg">
                        <i class="icon-number"></i>
                        <strong>4</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <font style="font-size: 18px;">.........</font>
                    </div>
                </div>

                <div class="style-msg successmsg">
                    <div class="sb-msg">
                        <i class="icon-number"></i>
                        <strong>5</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <font style="font-size: 18px;">.........</font>
                    </div>
                </div>

                <div class="col_full nobottommargin text-center">
                    {{-- <button class="button button-3d button-success nomargin" id="register-form-submit" name="register-form-submit" value="register"">Register Now</button> --}}
                    <form action="{{ url('/career/payment') }}" method="post">
                        @csrf
                        <input type="hidden" name="type" value="{{$type}}">
                        <button type="button" onclick="location.href='javascript:history.back()'" name="data-plan-submit" class="btn btn-secondary btn-lg mt-3" style="margin-right: 30px;">နောက်သို့</button>
                        <button type="submit" name="data-plan-submit" class="btn btn-success btn-lg mt-3">ငွေပေးချေမည်</button>
                    </form>
                </div>

            </div>

        </div>

    </div>

</section>
@endsection