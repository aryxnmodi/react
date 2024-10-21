<?php
include_once('header.php');
?>
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Product</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Product
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
										<th>Cate_id</th>
										<th>Price</th>
										<th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
								<?php
								foreach($arr_products as $c)
								{
								?>
									<tr class="odd gradeX">
                                        <td><?php echo $c->id?></td>
                                        <td><?php echo $c->title?></td>
										<td><?php echo $c->cate_id?></td>
										<td><?php echo $c->price?></td>
										<td><?php echo $c->description?></td>
                                        <td><img src="assets/img/products/<?php echo $c->img?>" width="50px"></td>
                                        <td class="center">
											<a href="" class="btn btn-primary" >Edit</a>
											<a href="delete?prod_del=<?php echo $c->id?>" class="btn btn-danger" >Delete</a>
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
<?php
include_once('footer.php');
?>