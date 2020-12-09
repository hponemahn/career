@extends('layouts.app')
@section('content')
<section id="content" style="margin-bottom: 0px;">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="col_one_third nobottommargin">

                <div class="well well-lg nobottommargin">
                        <h3 class="unicode">သင်၏ ကိုယ်ရည်ကိုယ်သွေး</h3>

                        @php
                            $career = "";
                            $desc = "";

                            if ($type == "estj") {
                                $career = "ရှေ့နေ";
                                $desc = "သင်သည် လက်တွေ့ကျကျ ဆုံးဖြတ်ချက်ချသူ ဖြစ်သည် ။ ဦးဆောင်ဦးရွက် လုပ်နိုင်သူလည်း ဖြစ်သည်။";
                            } else if ($type == "istj") {
                                $career = "စာရင်းကိုင်";
                                $desc = "သင်သည် ကတိတည်သော၊ တာဝန်ကျေသော အလုပ်ကြိုးစားသူဖြစ်သည်။ ယုံကြည်စိတ်ချရသူ ၊နောက်ကွယ်မှ အကောင်းဆုံး ပံပိုးပေးနိုင်သူဖြစ်သည်။";
                            } else if ($type == "esfj") {
                                $career = "အရောင်းကိုယ်စားလှယ်";
                                $desc = "သင်သည် ရိုးရာအယူကို အလေးထားသူ၊ တစ်ပါးသူကို အကူအညီပေးတတ်သူဖြစ်သည်။ လူမှုပတ်ဝန်းကျင်တွင် ပရဟိတလုပ်ခြင်းကို အားသန်သူဖြစ်သည်။";
                            } else if ($type == "isfj") {
                                $career = "သွားဆရာဝန်";
                                $desc = "သင်သည် ဆုံးဖြတ်ချက်ခိုင်မာသူ ကျိုးနွံသူဖြစ်သည်။ အထက်စီးမဆန်ဘဲ အများသူငါ ဝန်ဆောင်မှုပေးတတ်သည့် သူမျိုးဖြစ်သည်။";
                            } else if ($type == "estp") {
                                $career = "ရဲ (စုံထောက်)";
                                $desc = "သင်သည် လက်တွေ့ဆန်သူ၊ ပြသနာဖြေရှင်းတတ်သူ ဖြစ်သည်။ အသိအမြင်ကြွယ်ဝပြီး မည်သည့်အရာကိုမဆို ဖြေရှင်းနိုင်သည့် သူမျိုးဖြစ်သည်။";
                            } else if ($type == "istp") {
                                $career = "အင်ဂျင်နီယာ";
                                $desc = "သင်သည် ဖြောင့်မတ်ရိုးသားသူ၊ အပြောထက် အလုပ်နှင့် သက်သေပြတတ်သူဖြစ်သည်။ လုပ်ငန်းတစ်ခုတွင် အသုံးဝင်သူဖြစ်သည်။";
                            } else if ($type == "esfp") {
                                $career = "ကလေးအထူးကုဆရာဝန်";
                                $desc = "သင်သည် တက်ကြွ ၊ ပျော်ရွှင်စွာ နေတတ်သူ ၊ ကိုယ်တွေ့အသိ (common sense)ကို တန်ဖိုးထားတတ်သူဖြစ်သည်။ လူအများနှင့် ဆက်ဆံရသည့်နေရာတွင် ကောင်းမွန်သည့်လူမျိုးဖြစ်သည်။";
                            } else if ($type == "isfp") {
                                $career = "ဖက်ရှင်ဒီဇိုင်နာ";
                                $desc = "သင်သည် နွေးထွေးကြင်နာတတ်သူ၊ ဆတ်ဆတ်ထိမခံသူ ၊ ကိုယ်ထိလက်ရောက်ကူညီပေးတတ်သူဖြစ်သည်။ တာဝန်တစ်ခုကို အာရုံစူးစိုက်တတ်သူ၊ ကိုယ်ချင်းစာတတ်သူမျိုးဖြစ်သည်။";
                            } else if ($type == "entj") {
                                $career = "အမှုဆောင်အရာရှိ";
                                $desc = "သင်သည် ကျိုးကြောင်းဆင်ချင်တတ်သော၊ သုံးသတ်နိုင်စွမ်းရှိသော၊ ဗျူဟာချမှတ်တတ်သော ခေါင်းဆောင်ဖြစ်သည်။ လုပ်ငန်ခွင် စည်းကမ်းတကျဖြစ်စေရန် ၊ အကျိုးရှိစေရန် လုပ်ဆောင်သည့်နေရာတွင် အခွင့်အာဏာသုံး၍ ဆောင်ရွက်တတ်သူဖြစ်သည်။";
                            } else if ($type == "intj") {
                                $career = "ဆော့ဝဲရေးဆွဲသူ (software developer)";
                                $desc = "သင်သည် ကိုယ်ပိုင်းနည်းဖြင့် လုပ်ဆောင်တတ်သော ထိုးထွင်းကြံဆတတ်သူဖြစ်သည်။ သီအိုရီကျကျဖြေရှင်းတတ်သူဖြစ်သည်။";
                            } else if ($type == "enfj") {
                                $career = "HR specialist";
                                $desc = "သင်သည် လူချစ်လူခင်ပေါသူ၊ တက်ကြွသူ၊ စကားပြောကောင်းသူ၊ လိမ္မာပါးနပ်သူဖြစ်သည်။ လူအများနှင့်ဆက်ဆံရသော လုပ်ငန်းမျိုးအတွက် ကျိုးကြောင်းဆင်ခြင်လုပ်ဆောင်တတ်သူဖြစ်သည်။";
                            } else if ($type == "infj") {
                                $career = "HR မန်နေဂျာ";
                                $desc = "သင်သည် ဆန်းသစ်သော အတွေးအခေါ်များကို ကြံဆတတ်သူ ၊ လုပ်ငန်းခွင်စည်းကမ်းများကို လိုက်နာတတ်သူ ၊ ကိုယ့်ကျင့်သိက္ခာကို ဦးစားပေးတတ်သူဖြစ်သည်။ လုပ်ငန်းခွင်တွင် နောက်ကွယ်မှ အရာအားလုံးကိုဆောင်ရွက်တတ်သူ၊ ပုဂ္ဂိုရေးအရ ဆွဲဆောင်မှုရှိသူ ဖြစ်သည်။";
                            } else if ($type == "entp") {
                                $career = "စွန့်ဦးတီထွင်သမား";
                                $desc = "သင်သည် စိန်ခေါ်မှုများကို ရင်ဆိုင်ရဲသော လုပ်ငန်းတွင်း ဆန်းသစ်ကြံဆတတ်သူ ဖြစ်သည်။ အန္တရယ်များနှင့် လုပ်ဆောင်ရသော လုပ်ငန်းအတွက် ဇွဲရှိရှိ ဆောင်ရွက်တတ်သူ ၊ လမ်းရိုးမလိုက်တတ်သူဖြစ်သည်။";
                            } else if ($type == "intp") {
                                $career = "ကွန်ပြူတာပရိုဂရမ်မာ";
                                $desc = "သင်သည် လွတ်လွတ်လပ်လပ်နေထိုင်တတ်သူ၊ ဆန်းသစ်သောနည်းလမ်းဖြင့် ပြသနာဖြေရှင်းတတ်သူဖြစ်သည်။ သီအိုရီကျကျဖြေရှင်းရမည့် လုပ်ငန်း၊  တိတိကျကျဆောင်ရွက်ရမည့်လုပ်ငန်းကို ဆောင်ရွက်တတ်သူဖြစ်သည်။";
                            } else if ($type == "enfp") {
                                $career = "ကြော်ငြာဒါရိုက်တာ";
                                $desc = "သင်သည် သိချင်တတ်ချင်စိတ်များသော၊ ယုံကြည်မှုရှိသော၊ ဆန်းသစ်တီထွင်နိုင်သော၊ မည်သည့်နေရာဖြစ်ဖြစ် အခွင့်အလန်းရှာဖွေနိုင်သောသူဖြစ်သည်။ လူအများနှင့် ဆက်ဆံရသောလုပ်ငန်းမျိုး လုပ်ကိုင်နိုင်သူဖြစ်သည်။";
                            } else if ($type == "infp") {
                                $career = "ဂရပ်ဖစ်ဒီဇိုင်နာ (Graphic Designer)";
                                $desc = "သင်သည် အကြံကောင်း ဉာဏ်ကောင်း ထုတ်တတ်သူ၊ ကိုယ်ကျင့်တရားကို အလေးထားတတ်သူဖြစ်သည်။ ပြုလွယ်ပြင်လွယ် ဆောင်ရွက်ရသော လုပ်ငန်းများ၊ စိတ်နှစ်လုပ်ဆောင်ရသော လုပ်ငန်းများကို လုပ်ဆောင်နိုင်သူဖြစ်သည်။";
                            }
                            @endphp

                        <p>{{$desc}}</p>
                </div>

            </div>

            <div class="col_two_third col_last nobottommargin">


                <h3 class="unicode">သင်၏ ကိုယ်ရည်ကိုယ်သွေးနှင့် ကိုက်ညီသော အလုပ် (၅) မျိုး။</h3>

                <div class="style-msg successmsg">
                    <div class="sb-msg">
                        <i class="icon-number"></i>
                        <strong>1</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font style="font-size: 18px;">
                            {{$career}}
                        </font></div>
                </div>

                <br>
                <p>အောက်တွင်ကျန်ရှိနေသော အလုပ်အကိုင်များကို ကြည့်ရှုရန် ငွေ(၃၀၀၀)ကျပ် ပေးဆောင်ရန် လိုအပ်ပါသည်။ ငွေပေးချေပြီးသည်နှင့် ကျန်ရှိနေသော အလုပ်အကိုင်(၄)မျိုးကို viber (သို့) email သို့ပို့ပေးမည်ဖြစ်ပါသည်။ ငွေပေးချေရန်အတွက် အောက်ပါခလုတ်ကို နှိပ်ပါ။</p>

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