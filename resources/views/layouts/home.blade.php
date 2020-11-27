@extends('layouts.app')
@section('content')

{{-- style="background: grey;" --}}
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="form-widget" data-alert-type="inline">

                <div class="form-result"></div>

                <div class="row align-items-center" style="margin-bottom: 20px;">
                        <div class="col-md-12">
                            <h3 class="text-dark">မိမိရဲ့ ကိုယ်ရည်ကိုယ်သွေးနှင့်ကိုက်ညီသော အကောင်းဆုံး အလုပ် ၅ မျိုး</h3>
                            <h5 class="t300 ls1" style="opacity: .7">ကိုယ်ရည်ကိုယ်သွေးဆိုင်ရာ အောက်ပါမေးခွန်းတွေထဲက မိမိနဲ့သက်ဆိုင်တဲ့ မေးခွန်းလေးခုကို အမှန်ခြစ်ကာ မိမိရဲ့ ပင်ကိုစရိုက်၊ ထူးခြားသော ပင်ကို အရည်အသွေးအပေါ်မူတည်ပြီး မိမိနဲ့ သင့်တော်ကိုက်ညီမယ့် အသက်မွေး၀မ်းကြောင်း အလုပ်အကိုင် (၅) မျိုးကို အကြံပြု ဖော်ပြပေးသွားမှာ ဖြစ်ပါတယ်။ </h5>
                        </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form id="data-plan" class="row" action="{{ url('/result') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-process"></div>
                            <div class="col-12 form-group">
                                <label>ကိုယ်ရည်ကိုယ်သွေးအမျိုးအစားများ - </label><br>
                                <div class="row justify-content-center custom-padding-bottom">
                                    <label for="data-plan-e" class="col-sm-6 col-md-4">
                                        <div class="pricing-box noshadow border" style="background-color: #E2E8D8;">
                                            <input type="checkbox" name="extrovert" class="required mt-3" id="data-plan-e" autocomplete="off" data-price="30" value="e">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">Extrovert</h3>
                                            </div>
                                            {{-- <div class="pricing-price">
                                                <span class="price-unit">&dollar;</span class="t600">7<span class="price-tenure nott">/mo</span>
                                            </div> --}}
                                            <div class="pricing-features noborder">
                                                <p class="nott ls0 t400">၎င်းကိုယ်ရည်ကိုယ်သွေးရှိသူသည် လူအများနှင့် ထိတွေ့ဆက်ဆံရသည်ကို နှစ်သက်သည်။ လုပ်ငန်းဆောင်တာများကို လျှင်မြန်စွာ လုပ်ဆောင်နိုင်သည်။ မတူညီသည်လုပ်ငန်းဆောင်တာများစွာ ဆောင်ရွက်ရသည်ကို နှစ်သက်သည်။ တစ်ချိန်တည်းတွင် လုပ်ငန်းများစွာ လုပ်ဆောင်ခြင်း၌ တော်တယ်။</p>
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

                                    <label for="data-plan-i" class="col-sm-6 col-md-4">
                                        <div class="pricing-box noshadow border" style="background-color: #C2DFEC;">
                                            <input type="checkbox" name="introvert" class="required mt-3" id="data-plan-i" autocomplete="off" data-price="30" value="i">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">Introvert</h3>
                                            </div>
                                            {{-- <div class="pricing-price">
                                                <span class="price-unit">&dollar;</span class="t600">12<span class="price-tenure nott">/mo</span>
                                            </div> --}}
                                            <div class="pricing-features noborder">
                                                <p class="nott ls0 t400">
                                                    ၎င်းကိုယ်ရည်ကိုယ်သွေးရှိသူသည် အဖွဲ့ ငယ်အတွင်း (သို့) တစ်ယောက်တည်း လုပ်ဆောင်ရသည်ကို ကြိုက်သူဖြစ်သည်။ အေးဆေးတိတ်ဆိတ်စွာနေတတ်သူ ၊ တစ်ချိန်တွင် လုပ်ငန်းဆောင်တာ တစ်ခုကိုဘဲ အာရုံစိုက်တာ သဘောကျသူများဖြစ်သည်။
                                                </p>
                                                {{-- <ul>
                                                    <li class="nott ls0 t400"><strong>5</strong> GB</li>
                                                    <li class="nott ls0 t400"><strong>Full</strong> Access</li>
                                                    <li class="nott ls0 t400"><i class="icon-code"></i> Source Files</li>
                                                    <li class="nott ls0 t400"><strong>500</strong> User Accounts</li>
                                                    <li class="nott ls0 t400"><strong>1 Year</strong> License</li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </label>

                                    <label for="data-plan-s" class="col-sm-6 col-md-4">
                                        <div class="pricing-box noshadow border" style="background-color: #FADCE4">
                                            <input type="checkbox" name="sensor" class="required mt-3" id="data-plan-s" autocomplete="off" data-price="30" value="s">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">Sensor</h3>
                                            </div>
                                            {{-- <div class="pricing-price">
                                                <span class="price-unit">&dollar;</span class="t600">15<span class="price-tenure nott">/mo</span>
                                            </div> --}}
                                            <div class="pricing-features noborder">
                                                <p class="nott ls0 t400">
                                                    ၎င်းကိုယ်ရည်ကိုယ်သွေးရှိသူများသည် လက်တွေ့ကျသော သူများဖြစ်သည်။ အချက်အလက်များနှင့် အသေးစိတ်များကို အာရုံထားကြသူများဖြစ်သည်။ ကိုယ်တွေ့အသိနှင့် အတွေ့အကြုံများ အပေါ်အခြေခံ၍ ပြသနာများကို ဖြေရှင်းတတ်ကြသည်။ 
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
                                
                                <div class="row justify-content-center custom-padding-bottom">
                                    <label for="data-plan-n" class="col-sm-6 col-md-4">
                                        <div class="pricing-box noshadow border" style="background-color: #E4E4E4">
                                            <input type="checkbox" name="intuitive" class="required mt-3" id="data-plan-n" autocomplete="off" data-price="30" value="n">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">Intuitive</h3>
                                            </div>
                                            {{-- <div class="pricing-price">
                                                <span class="price-unit">&dollar;</span class="t600">7<span class="price-tenure nott">/mo</span>
                                            </div> --}}
                                            <div class="pricing-features noborder">
                                                <p class="nott ls0 t400">
                                                    ၎င်းကိုယ်ရည်ကိုယ်သွေးရှိသူသည် ဖြစ်တန်စွမ်းရှိသည့် အရာများအပေါ် အာရုံစိုက်သူများဖြစ်သည် ။ ရည်မှန်းချက်ကြီးမားသူ ၊ အလားလာကောင်းများကို လာဘ်မြင်သူ၊ တီထွင်ကြံဆတတ်သူ၊ ပြသနာအရေးကိစ္စများကို သူမတူသည့် နည်းလမ်းဖြင့် ဖြေရှင်းတတ်သူများဖြစ်သည်။
                                                </p>
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

                                    <label for="data-plan-t" class="col-sm-6 col-md-4">
                                        <div class="pricing-box noshadow border" style="background-color: #E5E3CE;">
                                            <input type="checkbox" name="thinker" class="required mt-3" id="data-plan-t" autocomplete="off" data-price="30" value="t">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">Thinker</h3>
                                            </div>
                                            {{-- <div class="pricing-price">
                                                <span class="price-unit">&dollar;</span class="t600">12<span class="price-tenure nott">/mo</span>
                                            </div> --}}
                                            <div class="pricing-features noborder">
                                                <p class="nott ls0 t400">
                                                    ၎င်းကိုယ်ရည်ကိုယ်သွေးရှိသူသည် ကျိုးကြောင်းဆီလျှောမှုအပေါ် အခြေခံ၍ ဆုံးဖြတ်ချက်ချတတ်ကြသည်။ ကောင်းကျိုး ဆိုးပြစ်ကို အလေးထားတတ်ကြသည်။ ရိုးသားမှု၊ သမာသမတ်ကျမှုနှင့် မျှတမှုကိုတန်းဖိုးထားတတ်သူများဖြစ်သည်။ 
                                                </p>
                                                {{-- <ul>
                                                    <li class="nott ls0 t400"><strong>5</strong> GB</li>
                                                    <li class="nott ls0 t400"><strong>Full</strong> Access</li>
                                                    <li class="nott ls0 t400"><i class="icon-code"></i> Source Files</li>
                                                    <li class="nott ls0 t400"><strong>500</strong> User Accounts</li>
                                                    <li class="nott ls0 t400"><strong>1 Year</strong> License</li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </label>

                                    <label for="data-plan-f" class="col-sm-6 col-md-4">
                                        <div class="pricing-box noshadow border" style="background-color: #C9D6CF">
                                            <input type="checkbox" name="feeler" class="required mt-3" id="data-plan-f" autocomplete="off" data-price="30" value="f">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">Feeler</h3>
                                            </div>
                                            {{-- <div class="pricing-price">
                                                <span class="price-unit">&dollar;</span class="t600">15<span class="price-tenure nott">/mo</span>
                                            </div> --}}
                                            <div class="pricing-features noborder">
                                                <p class="nott ls0 t400">
                                                    ၎င်းကိုယ်ရည်ကိုယ်သွေးရှိသူသည် ဆတ်ဆတ်ထိမခံသူ၊ အများနှင့် လုပ်ဆောင်တတ်သူ၊ ကိုယ်ပိုင်အမြင်ကို တန်ဖိုးထားသူ ဖြစ်သည်။ အခြားသူများကြောင့် ယင်းအပေါ်မည်သို့ သက်ရောက်မည်ကိုလည်း ခံစားတတ်သူဖြစ်သည်။
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
                                
                                <div class="row justify-content-center custom-padding-bottom">
                                    <label for="data-plan-j" class="col-sm-6 col-md-4">
                                        <div class="pricing-box noshadow border" style="background: #FFE1CF">
                                            <input type="checkbox" name="judger" class="required mt-3" id="data-plan-j" autocomplete="off" data-price="30" value="j">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">Judger</h3>
                                            </div>
                                            {{-- <div class="pricing-price">
                                                <span class="price-unit">&dollar;</span class="t600">12<span class="price-tenure nott">/mo</span>
                                            </div> --}}
                                            <div class="pricing-features noborder">
                                                <p class="nott ls0 t400">
                                                    ၎င်းကိုယ်ရည်ကိုယ်သွေးရှိသူသည် စည်းကမ်းတကျရှိသူများ၊ ကြိုတင်ပြင်ဆင်တတ်သူများဖြစ်ကြသည်။ ကြိုတင်စီစဉ်ထားသည့်အတိုင်း တသွေမတိမ်းလိုက်နာသူများ ဖြစ်ကြပြီး စည်းကမ်းလိုက်နာသူများဖြစ်ကြသည်။ 
                                                </p>
                                                {{-- <ul>
                                                    <li class="nott ls0 t400"><strong>5</strong> GB</li>
                                                    <li class="nott ls0 t400"><strong>Full</strong> Access</li>
                                                    <li class="nott ls0 t400"><i class="icon-code"></i> Source Files</li>
                                                    <li class="nott ls0 t400"><strong>500</strong> User Accounts</li>
                                                    <li class="nott ls0 t400"><strong>1 Year</strong> License</li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </label>

                                    <label for="data-plan-p" class="col-sm-6 col-md-4">
                                        <div class="pricing-box noshadow border" style="background: #DCE1F5">
                                            <input type="checkbox" name="perceiver" class="required mt-3" id="data-plan-p" autocomplete="off" data-price="30" value="p">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">Perceiver</h3>
                                            </div>
                                            {{-- <div class="pricing-price">
                                                <span class="price-unit">&dollar;</span class="t600">15<span class="price-tenure nott">/mo</span>
                                            </div> --}}
                                            <div class="pricing-features noborder">
                                                <p class="nott ls0 t400">
                                                    ၎င်းကိုယ်ရည်ကိုယ်သွေးရှိသူသည် အတွေးအမြင်များကို ပွင့်ပွင့်လင်းလင်း ဖော်ပြတတ်သူ ၊ စဉ်ဆက်မပြတ် အလုပ်များ ဆောင်ရွက်နိုင်သူ ၊ စီမံကိန်းချရာတွင် လိုက်လျောညီထွေဖြစ်အောင် ပြောင်းလွယ် ပြင်လွယ်သူများ ဖြစ်သည်။ 
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
                            </div>
                            {{-- <div class="col-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="data-plan-name">First Name<small class="text-danger">*</small></label>
                                                <input type="text" id="data-plan-name" name="data-plan-name" value="" class="form-control required" placeholder="Enter your Full Name" />
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="data-plan-contact">Contact Number<small class="text-danger">*</small></label>
                                                <input type="text" name="data-plan-contact" id="data-plan-contact" class="form-control required" value="" placeholder="Enter your contact Number">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="data-plan-email">Email Address<small class="text-danger">*</small></label>
                                                <input type="email" name="data-plan-email" id="data-plan-email" class="form-control required" value="" placeholder="user@company.com">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="data-plan-company">Company</label>
                                                <input type="text" name="data-plan-company" id="data-plan-company" class="form-control" value="" placeholder="Company Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-12 hidden">
                                <input type="text" id="data-plan-botcheck" name="data-plan-botcheck" value="" />
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" name="data-plan-submit" class="btn btn-success btn-lg mt-3">Book Now</button>
                            </div>

                            <input type="hidden" name="prefix" value="data-plan-">
                            <input type="hidden" name="subject" value="New Data Plan Request">
                            <input type="hidden" name="html_title" value="Data Plan Details">
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection