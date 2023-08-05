<?php 
include('classUser.php');
$user = new User();
$user->loginStatus();
include('include/header.php');
include('pagination.php');
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<title>YONEVAS COLLEGE : Nation's # 1 online degree institution</title>
<?php include('include/container.php');?>
<div class="container contact">	
	<h2>YONEVAS COLLEGE Survey</h2>	
	<?php include('menu.php');?>
	<div class="table-responsive">	
	You're welcome!
	</div>
	<div class="container">
        <h2>Survey Response</h2>
    <table width="80%" class="table table-striped table-bordered table-hover">
        <thead>
            <th>ID</th>
                    <th>Full Name</th>
                    <th>Preferred Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Preferred Commmunication</th>
                    <th>Online Class</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Program</th>
                    <th>Field of Study</th>
                    <th>Anticipated Start Date</th>
                    <th>College Attended Before</th>
                    <th>Institution Attended</th>
                    <th>Interested In</th>
                    <th>How do you hear about us</th>
        </thead>
        <tbody>
        <?php
            while($crow = mysqli_fetch_array($nquery)){
            ?>
                <tr>
                    <td><?php echo $crow['id']; ?></td>
                    <td><?php echo $crow['fullname']; ?></td>
                    <td><?php echo $crow['preferredname']; ?></td>
                    <td><?php echo $crow['email']; ?></td>
                    <td><?php echo $crow['phonenumber']; ?></td>
                    <td><?php echo $crow['preferredcommmunication']; ?></td>
                    <td><?php echo $crow['onlineclass']; ?></td>
                    <td><?php echo $crow['age']; ?></td>
                    <td><?php echo $crow['gender']; ?></td>
                    <td><?php echo $crow['program']; ?></td>                    
                    <td><?php echo $crow['field']; ?></td>
                    <td><?php echo $crow['dates']; ?></td>
                    <td><?php echo $crow['attendedbefore']; ?></td>
                    <td><?php echo $crow['institutionattended']; ?></td>
                    <td><?php echo $crow['aidornot']; ?></td>
                    <td><?php echo $crow['how']; ?></td>
                </tr>
            <?php
            }       
        ?>
        </tbody>
    </table>
    <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
    </div>
    <div class="col-lg-2">
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</div>	
<?php include('include/footer.php');?>