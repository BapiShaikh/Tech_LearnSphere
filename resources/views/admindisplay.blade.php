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
            background-color: #94c2f0;
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
        tr{
            background-color: rgb(246, 177, 169);
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
            margin-right: 5px;
        }
        img {
            border-radius: 50%;
        }
        .display-center{
            margin-left:45vw;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 600;
            font-style: oblique;
        }
        .action{
            width:50px;
        }
        .action-1{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;

        }
        .btn-action {
            display: block;
            width: 100%; /* Make buttons take full width of the grid cell */
        }


        .button-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 10px; /* Adjust spacing between buttons */
            margin-bottom: 10px; /* Adjust spacing between buttons and form */
        }

        .logout-admin, .search-btn, .search-form button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: #fff;

            border-radius: 5px;
        }

        .logout-admin a {
            color: #fff;
            text-decoration: none;
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .form-group {
            margin: 0;
        }

        .form-control {
            margin-right: 10px;
        }




    </style>
</head>
<body>
    <div class="modal-header">
        <header>
            <h1 class="display-center">Admin Data</h1>
        </header>
    </div>
    <div class="button-container">

        <button id="toggle-search" class="btn btn-primary search-btn">Search</button>
        <button class="btn btn-danger logout-admin"><a href="{{url('logout')}}">Logout</a></button>
        <form action="" class="search-form" id="search-form" style="display: none;">
            <div class="form-group col-9">
                <input type="search" name="search" id="search-input" class="form-control" placeholder="Search by name or email" value="{{request('search')}}">
            </div>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>
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
                <th class="action">Action</th>
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
                <td class="action-1">
                    <a href="{{url('/edit')}}{{$all->user_id}}" class="btn btn-primary btn-action">Edit</a>
                    <a href="{{url('/delete')}}{{$all->user_id}}" class="btn btn-danger btn-action">Delete</a>
                    <a href="{{url('/block')}}{{$all->user_id}}" class="btn btn-warning btn-action">Block</a>
                    <a href="{{url('/unblock')}}{{$all->user_id}}" class="btn btn-success btn-action">Unblock</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
</div>
<script>
    document.getElementById('toggle-search').addEventListener('click', function() {
        var searchForm = document.getElementById('search-form');
        if (searchForm.style.display === 'none' || searchForm.style.display === '') {
            searchForm.style.display = 'flex';
        } else {
            searchForm.style.display = 'none';
        }
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
