@extends('layouts.appwithoutsidebar')

@section('content')

<div class="new_frm_content">
	<h1>Artist Registration </h1><br>
	
    <div style="text-align: center;"><a href="#"><img class="login_image" src="{{URL::asset('/images/fblogin-btn.png')}}" style="width:200px;"></a></div>	
    
    <div class="or-seperator"><i>or</i></div>
	
	<form method="post" action="#" style="clear:both;" enctype="multipart/form-data">
		<input type="hidden" name="register" value="true">
    <div class="row">
      <div class="col-75">
        <input type="text" id="first_name" name="first_name" placeholder="Artist name.." value="" maxlength="100">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
      	<input type="text" name="email" value="" maxlength="150" placeholder="Your email..">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="password" name="password" value="" maxlength="20" placeholder="Password..">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="password" name="confirm_password" value="" maxlength="20" placeholder="Confirm password..">
      </div>
    </div>
    <!--div class="row">
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
        <input type="file" name="image" style="width:35%; float:left; padding:0px; border:0px;">
      </div>
    </div>
    
    <h3>Label Contact Info</h3>
    
    
    <div class="row">
      <div class="col-75">
        <input type="text" name="label_name" value="" maxlength="50" placeholder="Label name..">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <textarea id="label_address" name="label_address" placeholder="Address.." style="height:100px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="text" name="label_email" value="" maxlength="150" placeholder="Label email..">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="text" name="referredby" value="" maxlength="150" placeholder="Referred by..">
      </div>
    </div>   
    
    
    <div class="row">
      <input type="submit" value="Submit" class="btn-form" style="margin-top: 15px; margin-right: 15px;height: 40px;">
    </div>

	</form>
</div>

@endsection