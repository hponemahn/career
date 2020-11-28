@extends('layouts.app')
@section('content')
<section id="content" style="margin-bottom: 0px;">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="col_one_third nobottommargin">

                <div class="well well-lg nobottommargin">
                    <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

                        <h3>အချက်အလက်ဖြည့်သွင်းပါ</h3>

                        <p>ငွေပေးချေပြီးသည်နှင့် ကျန်ရှိနေသော အလုပ်အကိုင်(၄)မျိုးကို viber (သို့) email သို့ပို့ပေးရန် သင်၏ အချက်အလက်ဖြည့်သွင်းပေးပါ။</p>

                        <div class="col_full">
                            <label for="login-form-username">အမည်:</label>
                            <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control">
                        </div>

                        <div class="col_full">
                            <label for="login-form-username">ဖုန်းနံပါတ်:</label>
                            <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control">
                        </div>

                        <div class="col_full">
                            <label for="login-form-password">Email (ရှိပါက):</label>
                            <input type="email" id="login-form-password" name="login-form-password" value="" class="form-control">
                        </div>

                    </form>
                </div>

            </div>

            <div class="col_two_third col_last nobottommargin">

                <h3>ငွေပေးချေရန် နည်းလမ်း</h3>

                <div class="row">
                    <div class="col-lg-12">
                        <form id="data-plan" class="row" action="{{ url('/result') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-process"></div>
                            <div class="col-12 form-group">
                                {{-- <label>ကိုယ်ရည်ကိုယ်သွေးအမျိုးအစားများ - </label><br> --}}
                                <div class="row justify-content-center custom-padding-bottom">

                                    <label for="data-plan-e" class="col-6 col-md-3">
                                        <div class="pricing-box noshadow border" style="background-color: #E2E8D8;">
                                            <input type="checkbox" name="extrovert" class="required mt-3" id="data-plan-e" autocomplete="off" data-price="30" value="e">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">KBZ Pay</h3>
                                            </div>
                                            <div class="pricing-price">
                                                {{-- <span class="price-unit">&dollar;</span class="t600">7<span class="price-tenure nott">/mo</span> --}}
                                                <img src="{{ asset('images/kpay.png') }}" alt="KBZ Pay" width="70" height="70">
                                            </div>
                                        </div>
                                    </label>

                                    <label for="data-plan-i" class="col-6 col-md-3">
                                        <div class="pricing-box noshadow border" style="background-color: #C2DFEC;">
                                            <input type="checkbox" name="introvert" class="required mt-3" id="data-plan-i" autocomplete="off" data-price="30" value="i">
                                            <div class="pricing-title nobg">
                                                <h5 class="nott ls0">ဘဏ်အကောင့်/ATM</h5>
                                            </div>
                                            <div class="pricing-price">
                                                <img src="{{ asset('images/atm.svg') }}" alt="ATM" width="70" height="70">
                                            </div>
                                        </div>
                                    </label>

                                    <label for="data-plan-s" class="col-6 col-md-3">
                                        <div class="pricing-box noshadow border" style="background-color: #FADCE4">
                                            <input type="checkbox" name="sensor" class="required mt-3" id="data-plan-s" autocomplete="off" data-price="30" value="s">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">Wave Money</h3>
                                            </div>
                                            <div class="pricing-price">
                                                <img src="{{ asset('images/wave.jpeg') }}" alt="KBZ Pay" width="70" height="70">
                                            </div>
                                        </div>
                                    </label>

                                    <label for="data-plan-s" class="col-6 col-md-3">
                                        <div class="pricing-box noshadow border" style="background: #DCE1F5">
                                            <input type="checkbox" name="sensor" class="required mt-3" id="data-plan-s" autocomplete="off" data-price="30" value="s">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">True Money</h3>
                                            </div>
                                            <div class="pricing-price">
                                                {{-- <span class="price-unit">&dollar;</span class="t600">15<span class="price-tenure nott">/mo</span> --}}
                                                <img src="{{ asset('images/tm.jpg') }}" alt="ATM" width="70" height="70">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-12 hidden">
                                <input type="text" id="data-plan-botcheck" name="data-plan-botcheck" value="" />
                            </div>
                            

                            <input type="hidden" name="prefix" value="data-plan-">
                            <input type="hidden" name="subject" value="New Data Plan Request">
                            <input type="hidden" name="html_title" value="Data Plan Details">
                        </form>
                    </div>

                </div>
                
                <p>ငွေပေးချေမှု နံပါတ်: #7890 <br>
                    ကျသင့်ငွေ:  500 MMK</p>
                
                    <p><strong>KBZ Pay:  09765457</strong></p>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">ငွေပေးချေထားသော ဖြစ်ပိုင်းကို upload ပြုလုပ်ပါ</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      </div>

                      <div class="col-12 text-center">
                        <button type="submit" name="data-plan-submit" class="btn btn-success btn-lg mt-3">ငွေပေးချေမှု ပြီးပါပြီး</button>
                    </div>

            </div>

        </div>

    </div>

</section>
@endsection