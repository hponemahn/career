@extends('layouts.app')
@section('content')

<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            {{-- <div class="form-widget" data-alert-type="inline"> --}}
            <div>

                <div class="form-result"></div>

                {{-- title --}}
                <div class="row align-items-center" style="margin-bottom: 20px;">
                        <div class="col-md-12">


    {{-- <h3>This is for ZawGyI font</h3>
	<p class="zawgyi">
		သည္စာသည္ ေဇာ္ဂ်ီ ျဖင့္ေရးေသာစာျဖစ္သည္
	</p>
	<h3>This is for unicode (myanmar3) font</h3>
	<p class="unicode">
		သည်စာသည် unicode ဖြင့်ရေးသောစာဖြစ်သည်
    </p> --}}


    
                            <h3 class="text-dark unicode">မိမိရဲ့ ကိုယ်ရည်ကိုယ်သွေးနှင့်ကိုက်ညီသော အကောင်းဆုံး အလုပ် ၅ မျိုး</h3>
                            <h5 class="t500 unicode" style="opacity: .7;font-size: 17px;text-align: justify;">Isabel Myers နဲ့ သူမ၏အမေ Katherine Briggs တို့က Carl Jung's theory of psychological types ကို အခြေခံပြီး ယခုဆန်းစစ်ချက်ကို ဖန်တီးခဲ့သည်။ ဒုတိယကမ္ဘာစစ်အတွင်းမှာ သူတို့နှစ်ယောက်ဟာ ယခုဆန်းစစ်ချက်ကို စတင်ပြီး သုတေသနပြုလုပ်ခဲ့ကြတယ်။ ရည်ရွယ်ချက်က လူတွေဟာ ဘ၀မှာကျန်းမာပျော်ရွှင်ပြီး၊ သူတို့ကို သူတို့ နားလည်ကာ သူတို့ရဲ့ ကိုယ်ရည်ကိုယ်သွေးနဲ့ သင့်တော်ကိုက်ညီမယ့် အလုပ်အကိုင်ကို ရွေ့ချယ်နိုင်စေဖို့ ဖြစ်တယ်။ လွန်ခဲ့သောနှစ်များစွာကတည်းက လေ့လာထားသော ကိန်းဂဏန်းများအရ Fortune 500 တွင် ဖော်ပြခံရသော ၈၀ ရာခိုင်နှုန်းသော ကုမ္ပဏီများသည် ၎င်းဆန်းစစ်ချက်ကို အသုံးပြုကြသည်ဟု ဆိုထားသည်။ မည်သည့် ကိုယ်ရည်ကိုယ်သွေးရှိသည်မဆို ကိုယ်ရည်ကိုယ်သွေးနှင့်ကိုက်ညီသော အကောင်းဆုံး အလုပ် (၅) မျိုးရှိသည်။ </h5>
                            <h5 class="t500 unicode" style="opacity: .7;font-size: 17px;text-align: justify;">ကိုယ်ရည်ကိုယ်သွေးဆိုင်ရာ အောက်ပါမေးခွန်းတွေထဲက မိမိနဲ့သက်ဆိုင်တဲ့ မေးခွန်းလေးခုကို အမှန်ခြစ်ကာ မိမိရဲ့ ပင်ကိုစရိုက်၊ ထူးခြားသော ပင်ကို အရည်အသွေးအပေါ်မူတည်ပြီး မိမိနဲ့ သင့်တော်ကိုက်ညီမယ့် အသက်မွေး၀မ်းကြောင်း အလုပ်အကိုင် (၅) မျိုးကို အကြံပြု ဖော်ပြပေးသွားမှာ ဖြစ်ပါတယ်။</h5>
                        </div>
                </div>

                {{-- content --}}
                <div class="row justify-content-center custom-padding-bottom">
                    
                    <form id="data-plan" class="row" action="{{ url('/career/result') }}" method="post" enctype="multipart/form-data">
                
                    @csrf
                
                    <div class="col-md-12" style="text-align: center;">
                        <label class="unicode" style="letter-spacing: 0px;font-size: 17px;">ကိုယ်ရည်ကိုယ်သွေးအမျိုးအစားများ</label>
                    </div>
                
                    <div class="col-md-12">
                        <br>
                    </div>
                
                    {{-- Extrovert&Introvert --}}
                    <div class="col-md-12">
                        <font class="t300" style="opacity: .5; margin-bottom: 4px; display: block;">နှစ်ခုထဲကတစ်ခုကို ရွေးချယ်ပါ။</font>
                    </div>
                    <div class="col-md-6">
                            <label for="data-plan-e">
                                <div class="pricing-box noshadow border" style="background-color: #E2E8D8;">
                                    <input type="radio" name="typeOne" class="required mt-3 typeOne" id="data-plan-e" autocomplete="off" data-price="30" value="e">
                                    <div class="pricing-title nobg">
                                        <h3 class="nott ls0">Extrovert</h3>
                                    </div>
                                    {{-- <div class="pricing-price">
                                        <span class="price-unit">&dollar;</span class="t600">7<span class="price-tenure nott">/mo</span>
                                    </div> --}}
                                    <div class="pricing-features noborder">
                                        <p class="nott ls0 t400" style="padding: 5px; font-size: 15px;">သင်သည် လူအများနှင့် ထိတွေ့ဆက်ဆံရသည်ကို နှစ်သက်သည်။ လုပ်ငန်းဆောင်တာများကို လျှင်မြန်စွာ လုပ်ဆောင်နိုင်သည်။ မတူညီသည်လုပ်ငန်းဆောင်တာများစွာ ဆောင်ရွက်ရသည်ကို နှစ်သက်သည်။ တစ်ချိန်တည်းတွင် လုပ်ငန်းများစွာ လုပ်ဆောင်ခြင်း၌ တော်တယ်။</p>
                                        {{-- <ul>
                                            <li class="nott ls0 t400"><strong>1</strong> GB</li>
                                            <li class="nott ls0 t400"><strong>Full</strong> Access</li>
                                            <li class="nott ls0 t400"><i class="icon-code"></i> Source Files</li>
                                            <li class="nott ls0 t400"><strong>100</strong> User Accounts</li>
                                            <li class="nott ls0 t400"><strong>1 Year</strong> License</li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </label>
                    </div>
                    <div class="col-md-6">
                        <label for="data-plan-i">
                            <div class="pricing-box noshadow border" style="background-color: #C2DFEC;">
                                <input type="radio" name="typeOne" class="required mt-3 typeOne" id="data-plan-i" autocomplete="off" data-price="30" value="i">
                                <div class="pricing-title nobg">
                                    <h3 class="nott ls0">Introvert</h3>
                                </div>
                                {{-- <div class="pricing-price">
                                    <span class="price-unit">&dollar;</span class="t600">12<span class="price-tenure nott">/mo</span>
                                </div> --}}
                                <div class="pricing-features noborder">
                                    <p class="nott ls0 t400" style="padding: 5px; font-size: 15px;">
                                        သင်သည် အဖွဲ့ ငယ်အတွင်း (သို့) တစ်ယောက်တည်း လုပ်ဆောင်ရသည်ကို ကြိုက်သူဖြစ်သည်။ အေးဆေးတိတ်ဆိတ်စွာနေတတ်သူ ၊ တစ်ချိန်တွင် လုပ်ငန်းဆောင်တာ တစ်ခုကိုဘဲ အာရုံစိုက်ရတာ သဘောကျသူမျိုးဖြစ်သည်။
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                
                    <div class="col-md-12">
                        <br>
                    </div>
                
                    {{-- Sensor&Intuitive --}}
                    <div class="col-md-12">
                        <font class="t300" style="opacity: .5; margin-bottom: 4px; display: block;">နှစ်ခုထဲကတစ်ခုကို ရွေးချယ်ပါ။</font>
                    </div>
                    <div class="col-md-6">
                        <label for="data-plan-s">
                            <div class="pricing-box noshadow border" style="background-color: #FADCE4">
                                <input type="radio" name="typeTwo" class="required mt-3 typeTwo" id="data-plan-s" autocomplete="off" data-price="30" value="s">
                                <div class="pricing-title nobg">
                                    <h3 class="nott ls0">Sensor</h3>
                                </div>
                                {{-- <div class="pricing-price">
                                    <span class="price-unit">&dollar;</span class="t600">15<span class="price-tenure nott">/mo</span>
                                </div> --}}
                                <div class="pricing-features noborder">
                                    <p class="nott ls0 t400" style="padding: 5px; font-size: 15px;">
                                        သင်သည် လက်တွေ့သမားဖြစ်သည်။ ကိုယ်တွေ့အသိနှင့် အတွေ့အကြုံများ အပေါ်အခြေခံ၍ ပြသနာများကို ဖြေရှင်းတတ်ကြသည်။ အချက်အလက်များနှင့် အသေးစိတ်များကို အာရုံထားသူဖြစ်သည်။ (ဥပမာ။      ။ မိတ္တူဆိုင်ဘယ်နားမှာရှိလဲလို့ တစ်ယောက်ယောက်က မေးလိုက်သောအခါ။ ဒီလမ်းအတိုင်းတည့်တည့်သွား၊ ပြီးရင်ဘယ်ဘက်ကွေ့၊ အိမ် (၅)လုံး ကျော်ပြီး တိုက်အပြာတွေ့ရင် ညာဘက်ကွေ့၊ နောက်ထပ် အိမ် (၂)လုံးကျော်ပြီးရင်၊ လမ်းရဲ့ဘယ်ဘက်မှာ မိတ္တူဆိုင်ရှိတယ်လို့ ပြောမည့်သူမျိုးဖြစ်သည်။)
                                    </p>
                                    {{-- <ul>
                                        <li class="nott ls0 t400"><strong>10</strong> GB</li>
                                        <li class="nott ls0 t400"><strong>Full</strong> Access</li>
                                        <li class="nott ls0 t400"><i class="icon-code"></i> Source Files</li>
                                        <li class="nott ls0 t400"><strong>1000</strong> User Accounts</li>
                                        <li class="nott ls0 t400"><strong>Lifetime</strong> License</li>
                                    </ul> --}}
                                </div>
                            </div>
                        </label>
                    </div>
                
                    <div class="col-md-6">
                        <label for="data-plan-n">
                            <div class="pricing-box noshadow border" style="background-color: #E4E4E4">
                                <input type="radio" name="typeTwo" class="required mt-3 typeTwo" id="data-plan-n" autocomplete="off" data-price="30" value="n">
                                <div class="pricing-title nobg">
                                    <h3 class="nott ls0">Intuitive</h3>
                                </div>
                                {{-- <div class="pricing-price">
                                    <span class="price-unit">&dollar;</span class="t600">7<span class="price-tenure nott">/mo</span>
                                </div> --}}
                                <div class="pricing-features noborder">
                                    <p class="nott ls0 t400" style="padding: 5px; font-size: 15px;">
                                        သင်သည် ရည်မှန်းချက်ကြီးမားသူ ၊ အလားလာကောင်းများကို လာဘ်မြင်သူ၊ တီထွင်ကြံဆတတ်သူ၊ ပြသနာအရေးကိစ္စများကို သူမတူသည့် နည်းလမ်းဖြင့် ဖြေရှင်းတတ်သူဖြစ်သည်။ ဖြစ်တန်စွမ်းရှိသည့် အရာများအပေါ် အာရုံစိုက်သူဖြစ်သည်။ (ဥပမာ။      ။ မိတ္တူဆိုင်ဘယ်နားမှာရှိလဲလို့ တစ်ယောက်ယောက်က မေးလိုက်သောအခါ။ ဒီလမ်းအတိုင်းတည့်တည့်သွားပြီး၊ ဘယ်ဘက်ကွေ့လိုက်ရင် မိတ္တူဆိုင်ကိုရှာတွေ့ပါလိမ့်မယ်လို့ ပြောမည့်သူဖြစ်သည်။)
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                
                    <div class="col-md-12">
                        <br>
                    </div>
                
                    {{-- Thinker&Feeler --}}
                    <div class="col-md-12">
                        <font class="t300" style="opacity: .5; margin-bottom: 4px; display: block;">နှစ်ခုထဲကတစ်ခုကို ရွေးချယ်ပါ။</font>
                    </div>
                    <div class="col-md-6">
                        <label for="data-plan-t">
                            <div class="pricing-box noshadow border" style="background-color: #E5E3CE;">
                                <input type="radio" name="typeThree" class="required mt-3 typeThree" id="data-plan-t" autocomplete="off" data-price="30" value="t">
                                <div class="pricing-title nobg">
                                    <h3 class="nott ls0">Thinker</h3>
                                </div>
                                {{-- <div class="pricing-price">
                                    <span class="price-unit">&dollar;</span class="t600">12<span class="price-tenure nott">/mo</span>
                                </div> --}}
                                <div class="pricing-features noborder">
                                    <p class="nott ls0 t400" style="padding: 5px; font-size: 15px;">
                                        သင်သည် ကျိုးကြောင်းဆီလျှောမှုအပေါ် အခြေခံ၍ မျှမျှတတ ဆုံးဖြတ်ချက်ချတတ်သူဖြစ်သည်။ ကောင်းကျိုး ဆိုးပြစ်ကို အလေးထားသည်။ ရိုးသားမှု၊ သမာသမတ်ကျမှုနှင့် မျှတမှုကိုတန်းဖိုးထားတတ်သူဖြစ်သည်။ 
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label for="data-plan-f">
                            <div class="pricing-box noshadow border" style="background-color: #C9D6CF">
                                <input type="radio" name="typeThree" class="required mt-3 typeThree" id="data-plan-f" autocomplete="off" data-price="30" value="f">
                                <div class="pricing-title nobg">
                                    <h3 class="nott ls0">Feeler</h3>
                                </div>
                                {{-- <div class="pricing-price">
                                    <span class="price-unit">&dollar;</span class="t600">15<span class="price-tenure nott">/mo</span>
                                </div> --}}
                                <div class="pricing-features noborder">
                                    <p class="nott ls0 t400" style="padding: 5px; font-size: 15px;">
                                        သင်သည် ဆတ်ဆတ်ထိမခံသူ၊ အများနှင့် လုပ်ဆောင်တတ်သူ၊ ကိုယ်ပိုင်အမြင်ကို တန်ဖိုးထားသူ ဖြစ်သည်။ အခြားသူများကြောင့် ယင်းအပေါ်မည်သို့ သက်ရောက်မည်ကိုလည်း ခံစားတတ်သူဖြစ်သည်။ ဆုံးဖြတ်ချက်ချရာတွင် မေတ္တတရား၊ အကြင်နာတရားတို့ကို ဦးစားပေး၍ ချတတ်သည်။
                                    </p>
                                    {{-- <ul>
                                        <li class="nott ls0 t400"><strong>10</strong> GB</li>
                                        <li class="nott ls0 t400"><strong>Full</strong> Access</li>
                                        <li class="nott ls0 t400"><i class="icon-code"></i> Source Files</li>
                                        <li class="nott ls0 t400"><strong>1000</strong> User Accounts</li>
                                        <li class="nott ls0 t400"><strong>Lifetime</strong> License</li>
                                    </ul> --}}
                                </div>
                            </div>
                        </label>
                    </div>
                
                    <div class="col-md-12">
                        <br>
                    </div>
                
                    {{-- Judger&Perceiver --}}
                    <div class="col-md-12">
                        <font class="t300" style="opacity: .5; margin-bottom: 4px; display: block;">နှစ်ခုထဲကတစ်ခုကို ရွေးချယ်ပါ။</font>
                    </div>
                    <div class="col-md-6">
                        <label for="data-plan-j">
                            <div class="pricing-box noshadow border" style="background: #FFE1CF">
                                <input type="radio" name="typeFour" class="required mt-3 typeFour" id="data-plan-j" autocomplete="off" data-price="30" value="j">
                                <div class="pricing-title nobg">
                                    <h3 class="nott ls0">Judger</h3>
                                </div>
                                {{-- <div class="pricing-price">
                                    <span class="price-unit">&dollar;</span class="t600">12<span class="price-tenure nott">/mo</span>
                                </div> --}}
                                <div class="pricing-features noborder">
                                    <p class="nott ls0 t400" style="padding: 5px; font-size: 15px;">
                                        သင်သည် စည်းကမ်းတကျနေတတ်သူ၊ ကြိုတင်ပြင်ဆင်တတ်သူ ဖြစ်သည်။ ကြိုတင်စီစဉ်ထားသည့်အတိုင်း တသွေမတိမ်းလိုက်နာသူ၊ စည်းကမ်းလိုက်နာသူလည်းဖြစ်သည်။ တာ၀န်ယူမှု၊ တာ၀န်ခံမှုရှိပြီး၊ ပြောထားသော သက်မှတ်နေ့တွင် ပြီးစီးအောင် ကြိုစားသူဖြစ်သည်။ အပေါ်စီးမှ ဆက်ဆံတတ်ပြီး၊ စာအုပ်ကြီးသမားလည်းဖြစ်သည်။ 
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label for="data-plan-p">
                            <div class="pricing-box noshadow border" style="background: #DCE1F5">
                                <input type="radio" name="typeFour" class="required mt-3 typeFour" id="data-plan-p" autocomplete="off" data-price="30" value="p">
                                <div class="pricing-title nobg">
                                    <h3 class="nott ls0">Perceiver</h3>
                                </div>
                                {{-- <div class="pricing-price">
                                    <span class="price-unit">&dollar;</span class="t600">15<span class="price-tenure nott">/mo</span>
                                </div> --}}
                                <div class="pricing-features noborder">
                                    <p class="nott ls0 t400" style="padding: 5px; font-size: 15px;">
                                        သင်သည် အတွေးအမြင်များကို ပွင့်ပွင့်လင်းလင်း ဖော်ပြတတ်သူ ၊ စဉ်ဆက်မပြတ် အလုပ်များ ဆောင်ရွက်နိုင်သူ ၊ လိုက်လျောညီထွေဖြစ်အောင် ပြောင်းလွယ် ပြင်လွယ်သူ ဖြစ်သည်။ လုပ်စရာရှိတာကို နောက်မှလုပ်တတ်ပြီး၊ ပျော်စရာရှိရင် အခုပျော်လိုက်မည့်သူ ဖြစ်သည်။ အခွင့်အရေးအသစ်များကို အမြဲရှာဖွေနေတတ်ပြီး၊ မိမိရဲ့ရွေးချယ်မှုကိုလည်း တံခါးဖွင့်ထားသူဖြစ်သည်။ 
                                    </p>
                                </div>
                            </div>
                        </label>
                    </div>
                
                    <br><br>
                    <div class="col-12 show-error text-center">
                            
                    </div>
                
                    <br>
                    <div class="col-12 text-center">
                        {{-- <button type="submit" name="data-plan-submit" class="btn btn-success btn-lg mt-3 submit">အဖြေ ကြည့်ရှုရန်</button> --}}
                        <input type="submit" class="btn btn-success btn-lg mt-3 submit" value="အဖြေ ကြည့်ရှုရန်">
                    </div>
                    
                    </form>
                </div>

            </div>

        </div>

    </div>

</section>

@endsection

@push('javascript') 
    <script>

        jQuery(document).ready( function(){

            jQuery('.pricing-box input:radio').on( 'change', function(){
                $('.checked').removeClass('checked');
                if($(this).is(':checked'))  {
                    $(this).parents('label').addClass('checked');
                }
            });

            $('.submit').click(function(){

                if (!$(".typeOne:checked").val()) {
                    $('.show-error').html('<div class="alert alert-danger col-md-5 ccol-md-offset-5" role="alert" style="margin: 0 auto;">Extrovert (သို့) Introvert တစ်ခုခု ရွေးချယ်ရန် လိုအပ်ပါသည်။ </div>');
                } else if (!$(".typeTwo:checked").val()) {
                    $('.show-error').html('<div class="alert alert-danger col-md-5 ccol-md-offset-5" role="alert" style="margin: 0 auto;">Sensor (သို့) Intuitive တစ်ခုခု ရွေးချယ်ရန် လိုအပ်ပါသည်။ </div>');
                } else if (!$(".typeThree:checked").val()) {
                    $('.show-error').html('<div class="alert alert-danger col-md-5 ccol-md-offset-5" role="alert" style="margin: 0 auto;">Thinker (သို့) Feeler တစ်ခုခု ရွေးချယ်ရန် လိုအပ်ပါသည်။ </div>');
                } else if (!$(".typeFour:checked").val()) {
                    $('.show-error').html('<div class="alert alert-danger col-md-5 ccol-md-offset-5" role="alert" style="margin: 0 auto;">Judger (သို့) Perceiver တစ်ခုခု ရွေးချယ်ရန် လိုအပ်ပါသည်။ </div>');
                } else {
                    return true;
                }

                return false;
            });

            
        });

    </script>
@endpush