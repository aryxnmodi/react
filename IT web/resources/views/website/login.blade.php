<?php

if(session()->has('id')) {
  echo "<script> 
		window.location='index';
		</script>";
}
?>
@extends('website.layout.layout');

@section('main_section')
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Login</h1>
              <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Login</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h4>Login Here</h4>

              <div class="form_section">
                <form class="form_contant" action="{{url('/user_auth')}}" method="post">
                  @csrf
                  <fieldset>
                    <div class="row">
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input value="<?php if (isset($_COOKIE['cemail'])) {
                                        echo $_COOKIE['cemail'];
                                      } ?>" class="field_custom" name="email" placeholder="Email adress" type="email" />
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input value="<?php if (isset($_COOKIE['cpass'])) {
                                        echo $_COOKIE['cpass'];
                                      } ?>" class="field_custom" name="password" placeholder="Password" type="password" />
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <br>
                      <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input name="rem" type="checkbox" /> : Remember me
                      </div>
                      <br>
                      <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
                        <div><input type="submit" name="submit" class="btn main_bt" value="Login" /></div>
                      </div>
                      <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
                        <div class="center"><a href="signup">If you not registered then Click here for Signup</a></div>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection