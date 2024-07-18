<?php
if(isset($_SESSION['id']))
{
	echo "<script> 
		window.location='index';
		</script>";
}
include_once('header.php');
?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Signup</h1>
              <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Signup</li>
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
              <h4>Signup Here</h4>
   
              <div class="form_section">
                <form class="form_contant" action="" method="post" enctype="multipart/form-data">
                  <fieldset>
                  <div class="row">
					<div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input class="field_custom" name="name" placeholder="Name" type="text" required />
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input class="field_custom" name="email" placeholder="Email adress" type="email" required />
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input class="field_custom" name="pass" placeholder="Password" type="password" required />
                    </div>
                    
         
					<div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12 p-4">
						<div>
							Gender : 
							Male : <input type="radio" name="gender" value="Male" />
							Female : <input type="radio" name="gender" value="Female" />
						</div>
					</div>
					<div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12 p-4">
						<div>
							Launguages : 
							Hindi : <input type="checkbox" name="lag[]" value="Hindi" />
							English : <input type="checkbox" name="lag[]" value="English" />
							Gujarati : <input type="checkbox" name="lag[]" value="Gujarati" />
						</div>
					</div>
					
					<div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input class="field_custom" name="file" type="file" required />
                    </div>
					
					<div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">
                      <select class="form-control" name="cid" required>
						<option>----- Select Country -----</option>
						<?php
						foreach($arr_countries as $c)
						{
						?>
						<option value="<?php echo $c->id?>"><?php echo $c->cnm?></option>
						<?php		
						}
						?>
					  </select>
                    </div>
					
					 <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div><input type="submit" name="submit" class="btn main_bt" value="Signup" /></div>
					</div>
					 <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="center"><a href="login">If you already registered then Click here for Login</a></div>
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
</div><?php
include_once('footer.php');
?>