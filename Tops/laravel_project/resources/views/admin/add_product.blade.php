@extends('admin.layout.layout');

@section('main_section')
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line"> Add Product</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Add Product
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
							<div class="form-group">
                                <label>Categories Product</label>
                                <select class="form-control" type="text" name="cate_id" >
									<option value="">-------- Select Categories ---------</option>
									<?php
									foreach($arr_categories as $c)
									{
									?>
										<option value="<?php echo $c->id?>">
											<?php echo $c->cate_name?>
										</option>
									<?php		
									}
									?>
								</select>
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Product title</label>
                                <input class="form-control" type="text" name="title" />
                                <p class="help-block">Help text here.</p>
                            </div>
							<div class="form-group">
                                <label>Product price</label>
                                <input class="form-control" type="number" name="price" />
                                <p class="help-block">Help text here.</p>
                            </div>
							<div class="form-group">
                                <label>Product description</label>
                                <textarea class="form-control" name="description" ></textarea>
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input class="form-control" type="file" name="img"/>
                                <p class="help-block">Help text here.</p>
                            </div>
                        

                            <button type="submit" name="submit" class="btn btn-info">Submit </button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        

        </div>
    </div>
</div>
@endsection