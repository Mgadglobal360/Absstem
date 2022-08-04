<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Absstem Enquiry</h2>
<p><strong><?php echo $name;?></strong> has been enquiry with you.</p>
<p><b>Name : </b><?php echo $name;?></p>
<p><b>Email : </b><?php echo $email;?></p>
<p><b>Mobile : </b><?php echo $mobile;?></p>
<?php if(!empty($message)){?>
<p><b>Message : </b><?php echo $message;?></p>
<?php } ?>
</body>
</html>