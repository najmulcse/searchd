<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<br><br>

			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="panel panel-info">
					  <div class="panel-heading">
							<h3 class="panel-title">Search</h3>
					  </div>
					  <div class="panel-body">
							<form ic-post-to="bbb.php" ic-target="#result">
								<input type="text" name="search" class="form-control" >
								<input type="submit" value="Send">

							</form>
					  </div>
				</div>

				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="panel panel-danger">
						  <div class="panel-heading">
								<h3 class="panel-title">Result</h3>
						  </div>
						  <div class="panel-body" id="result">
						  </div>
					</div>
				</div>
			</div>

		</div>

		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/intercooler-0.4.10.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<script type="text/javascript">

			$(document).on('call_me', function(event, data) {

				$('#result').text('');
				$.each(data.data, function(index, val) {
					 $('#result').append(' <span class="badge">'+val+'</span>');
				});

			});

		</script>

	</body>
</html>

