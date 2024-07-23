@extends('admin.layout.layout');

@section('main_section')
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line"> Add Categories</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Add Categories
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Categories Name</label>
                                <input class="form-control" type="text" name="cate_name" />
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input class="form-control" type="file" name="cate_img"/>
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