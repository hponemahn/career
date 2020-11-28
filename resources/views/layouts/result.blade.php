@extends('layouts.app')
@section('content')
<section id="content" style="margin-bottom: 0px;">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="col_one_third nobottommargin">

                <div class="well well-lg nobottommargin">
                    <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

                        <h3>သင်၏ ကိုယ်ရည်ကိုယ်သွေး</h3>

                        <p>သင်သည် လက်တွေ့ကျကျ ဆုံးဖြတ်ချက်ချသူ ဖြစ်သည်။ ဦးဆောင်ဦးရွက် လုပ်နိုင်သူလည်း ဖြစ်သည်။</p>

                    </form>
                </div>

            </div>

            <div class="col_two_third col_last nobottommargin">


                <h3>သင်၏ ကိုယ်ရည်ကိုယ်သွေးနှင့် ကိုက်ညီသော အလုပ် (၅) မျိုး။</h3>

                <div class="style-msg successmsg">
                    <div class="sb-msg">
                        <i class="icon-number"></i>
                        <strong>1</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font style="font-size: 18px;">ရှေ့နေ</font></div>
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

                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

                <form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">

                    <div class="col_half">
                        <label for="register-form-name">Name:</label>
                        <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control">
                    </div>

                    <div class="col_half col_last">
                        <label for="register-form-email">Email Address:</label>
                        <input type="text" id="register-form-email" name="register-form-email" value="" class="form-control">
                    </div>

                    <div class="clear"></div>

                    <div class="col_half">
                        <label for="register-form-username">Choose a Username:</label>
                        <input type="text" id="register-form-username" name="register-form-username" value="" class="form-control">
                    </div>

                    <div class="col_half col_last">
                        <label for="register-form-phone">Phone:</label>
                        <input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control">
                    </div>

                    <div class="clear"></div>

                    <div class="col_half">
                        <label for="register-form-password">Choose Password:</label>
                        <input type="password" id="register-form-password" name="register-form-password" value="" class="form-control">
                    </div>

                    <div class="col_half col_last">
                        <label for="register-form-repassword">Re-enter Password:</label>
                        <input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control">
                    </div>

                    <div class="clear"></div>

                    <div class="col_full nobottommargin">
                        <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                    </div>

                </form> --}}

                <div class="col_full nobottommargin text-center">
                    {{-- <button class="button button-3d button-success nomargin" id="register-form-submit" name="register-form-submit" value="register"">Register Now</button> --}}
                    <button type="submit" name="data-plan-submit" class="btn btn-success btn-lg mt-3">ငွေပေးချေမည်</button>
                </div>

            </div>

        </div>

    </div>

</section>
@endsection