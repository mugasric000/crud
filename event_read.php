<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: events.php");
    } else {
       
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM events where id = ?";
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
				<h3>Read an Event</h3>
			</div>
			 
			<div class="form-horizontal" >
			
			  <div class="control-group">
				<label class="control-label">Date</label>
				<div class="controls">
					<label class="checkbox">
						<?php echo $data['event_date'];?>
					</label>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label">Time</label>
				<div class="controls">
					<label class="checkbox">
						<?php echo $data['event_time'];?>
					</label>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label">Locationr</label>
				<div class="controls">
					<label class="checkbox">
						<?php echo $data['event_location'];?>
					</label>
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label">Description</label>
				<div class="controls">
					<label class="checkbox">
						<?php echo $data['event_description'];?>
					</label>
				</div>
			  </div>
				<div class="form-actions">
				  <a class="btn" href="events.php">Back</a>
			   </div>
			 
			  
			</div>
		</div>
                 
    </div> <!-- /container -->
  </body>
</html>