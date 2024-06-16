@extends('admin.layout.layout');

@section('main_section')
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Categories</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Categories
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Categories Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
								<?php
								foreach($arr_categories as $c)
								{
								?>
									<tr class="odd gradeX">
                                        <td><?php echo $c->id?></td>
                                        <td><?php echo $c->cate_name?></td>
                                        <td><img src="<?php echo $c->cate_img?>" width="50px"></td>
                                        <td class="center">
											<a href="" class="btn btn-primary" >Edit</a>
											<a href="manage_categories/<?php echo $c->id?>" class="btn btn-danger" >Delete</a>
										</td>
                                    </tr>
                                <?php
								}
								?> 
                                
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
</div>
@endsection