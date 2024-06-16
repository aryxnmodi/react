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
              <h1 class="page-title">About Us</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">About Us</li>
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
            <h2>We are Leading Company</h2>
            <p class="large">Fastest repair service with best price!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row about_blog">
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
          <h3>What we do</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
            standard dummy text ever since the 1500s, when an unknown printer took a galley..</p>
          <ul>
            <li><i class="fa fa-check-circle"></i>Persius appetere pro mea harum ridens</li>
            <li><i class="fa fa-check-circle"></i>Instructior vis at causae legimus luptatum mel</li>
            <li><i class="fa fa-check-circle"></i>Maluisset id persius appetere pro mea harum</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="{{ url('website/images/it_service/post-06.jpg')}}" alt="#" /> </div>
      </div>
    </div>
    <div class="row" style="margin-top: 35px">
      <div class="col-md-8">
        <div class="full margin_bottom_30">
          <div class="accordion border_circle">
            <div class="bs-example">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-bar-chart" aria-hidden="true"></i> Complete Recovery from Local & External Drive<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                        over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plane"></i> Recovery Photo, Image, Video and Audio<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                        over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-star"></i> Mobile Phone Recovery<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                        over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fa fa-bar-chart" aria-hidden="true"></i> Complete Recovery from Local & External Drive<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                        over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="full" style="margin-top: 35px;">
          <h3>Need file recovery?</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et 
            quasi architecto beatae vitae dicta sunt explicabo..</p>
          <p><a class="btn main_bt" href="#">Read More</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1 light_silver gross_layout">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>About Service</h2>
            <p class="large">Easy and effective way to get your device repaired.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-wrench"></i></div>
                <h4 class="service-heading">Honest Services</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-cog"></i></div>
                <h4 class="service-heading">Secure payments</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-history"></i></div>
                <h4 class="service-heading">Expert team</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="full">
              <div class="service_blog_inner2">
                <div class="icon text_align_left"><i class="fa fa-heart-o"></i></div>
                <h4 class="service-heading">Affordable services</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>Experienced Staff</h2>
            <p class="large">Our experts have been featured in press numerous times.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="{{ url('website/images/it_service/team-member-1.jpg')}}" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Dean Michael</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="{{ url('website/images/it_service/team-member-2.jpg')}}" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Ruby Jake</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="{{ url('website/images/it_service/team-member-3.jpg')}}" alt="#"> </div>
          <div class="team_feature_head">
            <h4>David Hussay</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img class="img-responsive" src="{{ url('website/images/it_service/team-member-1.jpg')}}" alt="#"> </div>
          <div class="team_feature_head">
            <h4>Dean Michael</h4>
          </div>
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection