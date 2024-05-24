<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	@if(isset($passwordinfo))
	<div class="container">
	<form method="post" action="{{url('/newpassword')}}">
		@csrf
		@if(session('message'))
			<div class="alert alert-danger">{{session('message')}}</div>
			@endif
			<header class="modal-header alert alert-primary"><h1>Change Password</h1></header>
			<input type="number" name="uid" value="{{$passwordinfo->user_id}}">
			<div class="form-group">
				<label>Old Password</label>
				<input type="password" name="oldp" class="form-control">
			</div>
			<div class="form-group">
				<label>New Password</label>
				<input type="password" name="newp" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="confp" class="form-control">
			</div>
			<input type="submit" name="submit" class="btn btn-success" value="Submit">
			<input type="reset" name="reset" class="btn btn-danger" value="Reset">
	</form>
</div>
	@endif
</body>
</html>
