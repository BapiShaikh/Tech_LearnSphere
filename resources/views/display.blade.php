<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }
        .table-responsiv {
            margin-top: 20px;
        }
        table {
            background-color: white;

        }
        table tr,td,th{
            border: 1px solid;
        }
        th, td {
            text-align: center;
            vertical-align: middle;
        }
        th {
            background-color: #343a40;
            color: white;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn-action {
            height: 55px;

        }
        img {
            border-radius: 50%;
        }
        .display-center{
            margin-left:45vw;
        }
        .button-container {
            display: flex;
            gap: 10px;
        }

        .logout{
            margin-bottom: 15px;
        }


    </style>
</head>
<body>
    <div class="modal-header">
        <header>
            <h1 class="display-center">Student Data</h1>
        </header>
    </div>

@if(isset($allInfo))

      <div class="table-responsive">
        <table class="table table-hover table-border">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Pincode</th>
                <th>Age</th>
                <th>Gender</th>
                <th>City</th>
                <th>Course</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Address</th>
                <th>Password</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach($allInfo->all() as $all)
            <tr>
                <td>{{$all->fname}}</td>
                <td>{{$all->lname}}</td>
                <td><a href="tel:{{$all->phone}}">{{$all->phone}}</a></td>
                <td>{{$all->pincode}}</td>
                <td>{{$all->age}}</td>
                <td>{{$all->gender}}</td>
                <td>{{$all->city}}</td>
                <td>{{$all->course}}</td>
                <td>{{$all->date}}</td>

                <td><a href="mailto:{{$all->email}}">{{$all->email}}</a></td>
                <td>{{$all->address}}</td>
                <td>{{$all->password}}</td>

                <td><img src="{{$all->image}}" height="100px" width="100px" ></td>
                <td>

                    <div class="button-container">
                        <a href="{{ url('/logout') }}" class="btn btn-danger btn-action logout">Logout</a>
                        <a href="{{ url('/changepass') }}{{ $all->user_id }}" class="btn btn-warning btn-action">Change Password</a>
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
