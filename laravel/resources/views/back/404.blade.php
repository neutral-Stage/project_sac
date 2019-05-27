<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="{{ asset('back') }}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<title>Sacrifice It</title>
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<h1 class="text-center">You are not Authorized</h1>
			</div>
			<div class="col-md-6 mx-auto text-center">
				<img  width="300" class="img-fluid" src="{{ asset('assets/un.png')  }}" alt="">
			</div>
			<div class="col-md-12">
				<h4 class="text-center"><a href="{{ route('admin.dashboard') }}">Go back to Dashboard</a></h4>
			</div>
		</div>
	</div>
</body>
</html>