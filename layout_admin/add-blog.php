<!-- /.row -->


 
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Blog
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
                    require_once '../includes/db.php';
                    require '../includes/categorydb.php';
                    require '../includes/blogdb.php';
                    connect();
                    $categories = getAllCategory();
                    $allowExts = array("jpg", "jpeg", "png", "gif", "bmp");
                    $allowSize = 10000000;
                    $errors = array();
                    if(isset($_POST["add"])) {
                        connect();

                        $fileName = $_FILES["myfile"]["name"];
                        $tmpFile = $_FILES["myfile"]["tmp_name"];
                        $size = $_FILES["myfile"]["size"];

                        $arr = explode(".", $fileName);
                        $ext = strtolower(end($arr));

                        if(!in_array($ext, $allowExts)) {
                            $errors[] = "File extension .$ext is not allowed";
                        }

                        if($size > $allowSize) {
                            $errors[] = "File size must smaller than 1MB";
                        }

                        if(empty($errors)) {
                            move_uploaded_file($tmpFile, "../image/$fileName"); 
                        }                        
                        $image = $fileName;                
                        $date = date("Y/m/d");
                        $user_id = intval($_COOKIE['user_id']);
                        $category_id = $_POST['category_id'];
                        // intval($_POST["category_id"]);
                        // addBlog('cuong','aaa','','',1,1);
                        addBlog(
                            escape($_POST["title"]), 
                            escape($_POST["content"]),
                            $image,
                            escape($date),
                            $user_id,
                            $category_id
                        );
                        // header("location:login.php");
                        // redirect("login.php");
                        disconnect();
                    }
?>                               

                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>title</label>
                                            <input class="form-control" name="title">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>image</label>
                                            <input type="file" name="myfile">
                                        </div>
                                        <script type="text/javascript">
                                        function select(img) {
                                            window.opener.selectImageurl(img.src);
                                            close();
                                        }
                                        </script> 
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control" rows="10" name="content"></textarea>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Category</label>

                                            <select class="form-control" name="category_id">
                                                <option value=""></option>
                                            <?php 
                                            while ($row = mysqli_fetch_assoc($categories)) {
                                                
                                            ?>
                                                <option value="<?php echo $row['category_id']; ?>"><?php echo $row['name']; ?></option>

                                            <?php } ?>
                                                
                                            </select>
                                        </div>
                                        <input type="submit" name="add" value="Add Blog">
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