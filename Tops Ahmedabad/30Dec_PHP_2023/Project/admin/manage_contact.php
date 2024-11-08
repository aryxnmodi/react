<?php
include_once('header.php');
?>
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Contact</h4>

            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Contact
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 
								<?php
								foreach($arr_contacts as $c)
								{
								?>
									<tr class="odd gradeX">
                                        <td><?php echo $c->id?></td>
                                        <td><?php echo $c->name?></td>
                                        <td><?php echo $c->email?></td>
                                        <td><?php echo $c->comment?></td>
                                        <td class="center">
											<a href="" class="btn btn-primary" >Edit</a>
											<a href="" class="btn btn-danger" >Delete</a>
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