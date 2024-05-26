<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            background-color: #f0f8ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            flex-shrink: 0;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: background-color 0.2s;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .button-container {
            display: flex;
            align-items: center;
        }
        .search-form {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }
        .form-group {
            margin: 0;
        }
        .form-control {
            margin-right: 10px;
        }
        .logout-admin {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #dc3545;
            border-radius: 5px;
        }
        .logout-admin a {
            color: #fff;
            text-decoration: none;
        }
        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.2s;
        }
        .profile-card:hover {
            transform: translateY(-10px);
        }
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .profile-header img {
            border-radius: 50%;
            height: 100px;
            width: 100px;
            margin-right: 20px;
        }
        .profile-header h2 {
            margin: 0;
            font-size: 1.5rem;
            color: #333;
        }
        .profile-info {
            display: flex;
            flex-wrap: wrap;
        }
        .profile-info div {
            flex: 1 1 50%;
            padding: 10px 0;
        }
        .profile-info label {
            font-weight: bold;
            color: #555;
        }
        .profile-info span {
            color: #333;
        }
        .action-buttons {
            margin-top: 20px;
            text-align: left;
        }
        .btn-action {
            margin: 5px;
        }
        .btn1 {
            margin-left: 1px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="{{url('home')}}">Home</a>
        <a href="{{url('contact')}}">Contact Us</a>
        <a href="{{url('about')}}">About</a>
        <a href="{{url('course')}}">Course</a>

    </div>
    <div class="main-content">
        <div class="header">
            <div class="header-left">
                <button id="toggle-search" class="btn btn-primary">Search</button>
                <form action="" method="GET" class="search-form" id="search-form" style="display: none;">
                    <div class="form-group">
                        <input type="search" name="search" id="search-input" class="form-control" placeholder="Search by name or email" value="{{ request('search') }}">
                    </div>
                </form>
            </div>
            <button class="logout-admin"><a href="{{ url('logout') }}">Logout</a></button>
        </div>

        @if($allInfo)
        <div class="container">
            <div class="row">
                @foreach($allInfo as $all)
                    <div class="col-md-4">
                        <div class="profile-card">
                            <div class="profile-header">
                                <img src="{{ $all->image ?? 'default.jpg' }}" alt="Profile Image">
                                <div>
                                    <h2>{{ $all->fname ?? 'First Name' }} {{ $all->lname ?? 'Last Name' }}</h2>
                                    <p><a href="mailto:{{ $all->email ?? '#' }}">{{ $all->email ?? 'Email' }}</a></p>
                                    <p><a href="tel:{{ $all->phone ?? '#' }}">{{ $all->phone ?? 'Phone' }}</a></p>
                                </div>
                            </div>
                            <div class="profile-info">
                                <div>
                                    <label>City:</label>
                                    <span>{{ $all->city ?? 'N/A' }}</span>
                                </div>
                                <div>
                                    <label>Qualification:</label>
                                    <span>{{ $all->qualification ?? 'N/A' }}</span>
                                </div>
                                <div>
                                    <label>Age:</label>
                                    <span>{{ $all->age ?? 'N/A' }}</span>
                                </div>
                                <div>
                                    <label>Gender:</label>
                                    <span>{{ $all->gender ?? 'N/A' }}</span>
                                </div>
                                <div>
                                    <label>Date of Birth:</label>
                                    <span>{{ $all->date ?? 'N/A' }}</span>
                                </div>
                                <div>
                                    <label>Address:</label>
                                    <span>{{ $all->address ?? 'N/A' }}</span>
                                </div>
                                <div>
                                    <label>Pincode:</label>
                                    <span>{{ $all->pincode ?? 'N/A' }}</span>
                                </div>
                                <div>
                                    <label>Password:</label>
                                    <span>{{ $all->password ?? 'N/A' }}</span>
                                </div>
                            </div>
                            <div class="action-buttons">
                                <a href="{{url('/edit')}}{{$all->user_id}}" class="btn btn-primary btn-action btn1">Edit</a>
                                <a href="{{url('/delete')}}{{$all->user_id}}" class="btn btn-danger btn-action btn1">Delete</a>
                                <a href="{{url('/block')}}{{$all->user_id}}" class="btn btn-warning btn-action btn1">Block</a>
                                <a href="{{url('/unblock')}}{{$all->user_id}}" class="btn btn-success btn-action btn1">Unblock</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
