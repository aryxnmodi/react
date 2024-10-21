
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
              <h1 class="page-title">My Account</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">My Account</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Manage your Account</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row about_blog">
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <h3>Name : <?php echo $fetch->name;?></h3>
          <ul>
            <li><i class="fa fa-check-circle"></i>Id : <?php echo $fetch->id;?></li>
            <li><i class="fa fa-check-circle"></i>Email : <?php echo $fetch->email;?></li>
            <li><i class="fa fa-check-circle"></i>Gender : <?php echo $fetch->gender;?></li>
			<li><i class="fa fa-check-circle"></i>Launguages : <?php echo $fetch->lag;?></li>
          </ul>
        </div>
		<br><br><br>
		<p><a class="btn main_bt" href="profile/<?php echo $fetch->id;?>">Edit Proile</a></p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="website/upload/customer/<?php echo $fetch->img;?>" width="100%" alt="#" /> </div>
      </div>
    </div>

  </div>
</div>
<!-- end section -->
@endsection