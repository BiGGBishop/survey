<?php 
include('classUser.php');
$user = new User();
$isVerified =  $user->verifyRegister();
include('include/header.php');
?>
<title>YONEVAS COLLEGE : Nation's # 1 online degree institution</title>
<?php include('include/container.php');?>
<div class="container contact">	
	<h2>YONEVAS COLLEGE Survey</h2>	
	<div class="alert alert-success col-sm-12" >
		<?php if ($isVerified) { ?>
			Your registration verified successfuly. You can <a href="login.php">login</a> to access your account.
		<?php } else { ?>
			Invalid request.
		<?php } ?>
	</div>	
</div>
<?php include('include/footer.php');?>