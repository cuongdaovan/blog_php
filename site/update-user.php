
<?php 
                    include '../layout_admin/header.php';
                    require '../includes/userdb.php';
                    connect();
                    $id = $_GET['id'];
                    $user = get_user($id);
                    if(isset($_POST["update"])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $is_admin = intval($_POST['is_admin']);
                        $fullname = $_POST['fullname'];
                        $avatar = '';
                        editUser($id,$username,$password,$is_admin,$fullname,$avatar);
                        header('Location: list-user.php');
                        
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
                                            <input class="form-control" name="username" value="<?php echo
                                            $user['username']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control" name="password" value="<?php echo
                                            $user['password']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>is_admin</label>
                                            <input class="form-control" name="is_admin" value="<?php echo
                                            $user['is_admin']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>fullname</label>
                                            <input class="form-control" name="fullname" value="<?php echo
                                            $user['fullname']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>avatar</label>
                                            <input class="form-control" name="avatar" value="<?php echo
                                            $user['avatar']; ?>">
                                        </div>
                                        <input type="submit" name="update" value="Update">
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