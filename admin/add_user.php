<?php include("includes/header.php");

if (!$session->is_signed_in()) {
    redirect("login.php");
}

$user = new User();
if (isset($_POST['create'])) {
    if ($user) {
        $user->username = $_POST['username'];
        $user->first_name = $_POST['firstname'];
        $user->last_name = $_POST['lastname'];
        $user->password = $_POST['password'];

        $user->set_file($_FILES['user_image']);
        $user->upload_photo();
        $session->message("The user {$user->username} has been added");
        $user->save();
        redirect("users.php");
    }
}

?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <?php include("includes/admin_nav.php") ?>


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php include("includes/side_nav.php") ?>
    <!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="page-header">
                        Add User
                    </h1>


                    <div class="form-group">
                        <input type="file" name="user_image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="form-group">

                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="create" class="btn btn-primary pull-right">
                    </div>
                </div>



        </div>
        </form>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>