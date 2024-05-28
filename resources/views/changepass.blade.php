<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #c5c8ca;
        }

        .card {
            margin-top: 50px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    @if(isset($passwordinfo))
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Change Password</h1>
            </div>
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-danger">{{session('message')}}</div>
                @endif
                <form method="post" action="{{url('/newpassword')}}">
                    @csrf
                    <input type="number" name="uid" value="{{$passwordinfo->user_id}}" hidden>
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
                    <div class="text-center">
                        <input type="submit" name="submit" class="btn btn-success mr-2" value="Submit">
                        <input type="reset" name="reset" class="btn btn-danger" value="Reset">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endif
</body>
</html>
