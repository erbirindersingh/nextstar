@extends('layouts.appwithoutsidebar')

@section('content')
<div id="content">
    <div class="new_frm_content">
        <h1>Fan Registration </h1><br />
        
    <div style="text-align: center;"><a href="#"><img class="login_image" src="/images/fblogin-btn.png" style="width:200px;"></a></div>
        <div class="or-seperator"><i>or</i></div>
        
        <form method="post" action="#" style="clear:both;">
            <input type="hidden" name="register" value="true">
            <input type="hidden" name="fan" value="true" />
        <div class="row">
          <div class="col-75">
            <input type="text" id="first_name" autocomplete="off" name="first_name" placeholder="First name.." value="" maxlength="100">
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input type="text" id="last_name" autocomplete="off" name="last_name" placeholder="Last name.." value="" maxlength="100">
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input type="text" name="email" autocomplete="off" value="" maxlength="150" placeholder="Your email.." />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input type="text" name="email2" value="" maxlength="150" placeholder="Confirm email.." />
          </div>
        </div>
        <!--div class="row">
          <div class="col-75">
            <input type="text" name="city" value="" maxlength="50" placeholder="City.." />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input type="text" name="state_prov" value="" maxlength="150" placeholder="State or Province.." />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <select id="country" name="country">
              <option value="Australia">Australia</option>
              <option value="Canada">Canada</option>
              <option value="USA">USA</option>
              <option value="United Kingdom">United Kingdom</option>
            </select>
          </div>
        </div -->
        <div class="row">
          <div class="col-75">
            <input type="password" name="password" value="" maxlength="20" placeholder="Password.." />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input type="password" name="confirm_password" value="" maxlength="20" placeholder="Confirm password.." />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input type="text" name="referredby" value="" maxlength="150" placeholder="Referred by.." />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <div id="btn-radio">
                <input type="radio" name="gender" value="M" class="" id="rb_gender"/>Male
                <input type="radio" name="gender" value="F" class="" id="rb_gender"/>Female
            </div>
          </div>
        </div>
        <!-- 
        <div class="row">
          <div class="col-75">
                <div class="g-recaptcha" data-sitekey="6LdfuyMUAAAAADS4OYMw7dDb-pFPI_3zRAFabM-6"></div>
          </div>
        </div> 
        -->    
        
        <div class="row">
          <input type="submit" value="Submit" style="margin-top: 15px; margin-right: 15px;height: 40px;">
        </div>

        </form>
    </div>
</div>
@endsection