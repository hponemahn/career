@extends('layouts.app')
@section('content')
<section id="content" style="margin-bottom: 0px;">

    <div class="content-wrap">

        <div class="container clearfix">

            <form id="login-form" name="login-form" class="nobottommargin" action="{{ url('/career/done') }}" method="post" enctype="multipart/form-data">

            @csrf

            <input type="hidden" name="type" value="{{$type}}">

            <div class="col_one_third nobottommargin">

                <div class="well well-lg nobottommargin">
                    
                        <h3>အချက်အလက်ဖြည့်သွင်းပါ</h3>

                        <p>ငွေပေးချေပြီးသည်နှင့် ကျန်ရှိနေသော အလုပ်အကိုင်(၄)မျိုးကို viber (သို့) email သို့ပို့ပေးရန် သင်၏ အချက်အလက်ဖြည့်သွင်းပေးပါ။</p>

                        <div class="col_full">
                            <label for="login-form-username">အမည်:</label>
                            <input type="text" id="login-form-username" name="name" value="" class="form-control">
                        </div>

                        <div class="col_full">
                            <label for="login-form-phone">ဖုန်းနံပါတ်:</label>
                            <input type="number" onkeydown="return event.keyCode !== 69" id="login-form-phone" name="phone" value="" class="form-control">
                        </div>

                        <div class="col_full">
                            <label for="login-form-email">Email (ရှိပါက):</label>
                            <input type="email" id="login-form-email" name="email" value="" class="form-control">
                        </div>
                </div>

            </div>

            <div class="col_two_third col_last nobottommargin">

                <h3>ငွေပေးချေရန် နည်းလမ်း</h3>

                <div class="row">
                    <div class="col-lg-12">
                            <div class="form-process"></div>
                            <div class="col-12 form-group">
                                {{-- <label>ကိုယ်ရည်ကိုယ်သွေးအမျိုးအစားများ - </label><br> --}}
                                <div class="row justify-content-center custom-padding-bottom">

                                    <label for="data-plan-e" class="col-6 col-md-3">
                                        <div class="pricing-box noshadow border" style="background-color: #E2E8D8;">
                                            <input type="radio" name="payment" class="required mt-3" id="data-plan-e" autocomplete="off" data-price="30" value="k">
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
                                            <input type="radio" name="payment" class="required mt-3" id="data-plan-i" autocomplete="off" data-price="30" value="a">
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
                                            <input type="radio" name="payment" class="required mt-3" id="data-plan-s" autocomplete="off" data-price="30" value="w">
                                            <div class="pricing-title nobg">
                                                <h3 class="nott ls0">Wave Money</h3>
                                            </div>
                                            <div class="pricing-price">
                                                <img src="{{ asset('images/wave.jpeg') }}" alt="Wave Money" width="70" height="70">
                                            </div>
                                        </div>
                                    </label>

                                    <label for="data-plan-t" class="col-6 col-md-3">
                                        <div class="pricing-box noshadow border" style="background-color: #DCE1F5;">
                                            <input type="radio" name="payment" class="required mt-3" id="data-plan-t" autocomplete="off" data-price="50" value="t">
                                            <div class="pricing-title nobg">
                                                <h5 class="nott ls0">True Money</h5>
                                            </div>
                                            <div class="pricing-price">
                                                <img src="{{ asset('images/tm.jpg') }}" alt="True Money" width="70" height="70">
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            
                    </div>

                </div>
                
                <p>ငွေပေးချေမှု နံပါတ်: #00{{$paymentID}} <br>
                    ကျသင့်ငွေ:  300 MMK</p>
                
                    <p class="payment-method"></p>
                    
                    <div class="secret-input">

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">ငွေပေးချေထားသော ပြေစာ (သို့) screenshot ကို upload ပြုလုပ်ပါ</label>
                        <input type="file" name="file" class="form-control-file file"  accept="image/*,.pdf" id="exampleFormControlFile1">
                    </div>

                    <br>
                    <div class="col-12 show-error text-center">
                        
                    </div>

                      <div class="col-12 text-center">
                        <button type="button" onclick="location.href='javascript:history.back()'" name="data-plan-submit" class="btn btn-secondary btn-lg mt-3" style="margin-right: 30px;">နောက်သို့</button>
                        <button type="submit" class="btn btn-success btn-lg mt-3 submit">ငွေပေးချေမှု ပြီးပါပြီး</button>
                    </div>

            </div>

            </form>

        </div>

    </div>

</section>
@endsection

@push('javascript') 
    <script>

        $(document).on('change', '.file', function () {

            if(this.files[0].size > 307200){
                alert("File is too big!");
                this.value = "";
            };
        });

        $(document).on('click', '.required', function () {
            $('.payment-method').html('');
            $('.secret-input').html('');

            if ($(this).val() == "a") {
                $('.payment-method').html('<strong>ငွေလွှဲပေးရမည့် account နံပါတ်:  0060201010044969</strong>');
            } else if ($(this).val() == "w" || $(this).val() == "t") {
                $('.payment-method').html('<strong>ငွေလွှဲပေးရမည့် ဖုန်းနံပါတ်:  09407709504</strong>');
                $('.secret-input').html('<div class="col-6" style="margin-left: -14px;"><label for="exampleFormControlFile1">သက်မှတ်ချင်သော လျှို့၀က်နံပါတ်ကို ထည့်သွင်းပေးပါ</label><input type="number" onkeydown="return event.keyCode !== 69" name="secret" required class="form-control-file" id="exampleFormControlFile1"><br></div>');
            } else {
                $('.payment-method').html('<strong>ငွေလွှဲပေးရမည့် ဖုန်းနံပါတ်:  09777425147</strong>');
            }
        });

        $(document).on('click', '.submit', function () {

            if (!$("#login-form-username").val()) {
                $('.show-error').html('<div class="alert alert-danger col-md-5 ccol-md-offset-5" role="alert" style="margin: 0 auto;">နာမည်ထည့်သွင်းရန် လိုအပ်ပါသည်။</div>');
            } else if (!$("#login-form-phone").val()) {
                $('.show-error').html('<div class="alert alert-danger col-md-5 ccol-md-offset-5" role="alert" style="margin: 0 auto;">ဖုန်းနံပါတ်ထည့်သွင်းရန် လိုအပ်ပါသည်။</div>');
            } else if (!$(".required:checked").val()) {
                $('.show-error').html('<div class="alert alert-danger col-md-5 ccol-md-offset-5" role="alert" style="margin: 0 auto;">ငွေပေးချေမည့် နည်းလမ်းကို ရွေးချယ်ရန် လိုအပ်ပါသည်။</div>');
            } else {
                return true;
            }

            return false;

        });
    </script>
@endpush