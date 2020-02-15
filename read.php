<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: customers.php");
    } else {
       
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM customers where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
      
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
 
<body>
    <div class="container">
     
		<div class="span10 offset1">
			<div class="row">
				<h3>Read a Customer</h3>
			</div>
			 
			<div class="form-horizontal" >
			
			  <div class="control-group">
				<label class="control-label">Name</label>
				<div class="controls">
					<label class="checkbox">
						<?php echo $data['name'];?>
					</label>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label">Email Address</label>
				<div class="controls">
					<label class="checkbox">
						<?php echo $data['email'];?>
					</label>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label">Mobile Number</label>
				<div class="controls">
					<label class="checkbox">
						<?php echo $data['mobile'];?>
					</label>
				</div>
			  </div>
				<div class="form-actions">
				  <a class="btn" href="customers.php">Back</a>
			   </div>
			 
			  
			</div>
		</div>
                 
    </div> <!-- /container -->
  </body>
</html>