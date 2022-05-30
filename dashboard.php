<?php include("header.php") ?>
<?php 
session_start();
if(isset($_SESSION['user']) && $_SESSION['user'] != ""){
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body text-center">
                    <form action="logout.php" method="POST">
                        <h1><?php echo $_SESSION['user']  ?></h1>
                        <input type="submit" class="btn btn-primary" name="logout" value="Logout"/><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } else{
    header("Location: login.php");
} ?>
<?php include("footer.php") ?>