@extends('layouts.appwithoutsidebar')

@section('content')

    <div id="head-main">
        <p>Music Made Social</p>
    </div>
    <div id="subtitle">
        <p>A social music network that connects users through music discovery</p>
    </div>

    <!-- 
    <button id="btn_artist signup">Artist Sign Up</button>
    <button id="btn_fan">Fan Sign Up</button>
    -->
    <button class="btn_home btnsignup"><a id="btn_artist_signup" href="/artistsignup" class="btn btn-outline-whoozl my-2 my-sm-0">Artist Sign Up</a></button>
    <button class="btn_home btnfan"><a id="btn_artist_signup" href="/fansignup" class="btn btn-outline-whoozl my-2 my-sm-0">Fan Sign Up</a></button>
    
        
@endsection 