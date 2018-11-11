<!-- /.row -->
<?php 
                    require '../includes/categorydb.php';
                    if(isset($_POST["add"])) {
                        connect();
                        addCat(escape($_POST["name"]), escape($_POST["description"]));
                        header("location:login.php");
                        // redirect("login.php");
                        disconnect();
                    }
?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">
                                        
                                        <div class="form-group">
                                            <label>name</label>
                                            <input class="form-control" name="name" placeholder="Enter text">
                                        </div>
                                        <div class="form-group">
                                            <label>description</label>
                                            <textarea class="form-control" name="description" rows="3"></textarea>
                                        </div>
                                        <input type="submit" name="add" value="Add category">
                                    </form>
                                </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->