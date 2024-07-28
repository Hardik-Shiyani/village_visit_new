<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        .card h2 {
            margin-top: 0;
            font-size: 1.5em;
            color: #333;
        }
        .card ul {
            list-style-type: none;
            padding: 0;
        }
        .card ul li {
            margin: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card ul li a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .btn {
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            color: #000000;
            background-color: #fff;
            border: none;
            cursor: pointer;
            font-size: 1em;
        }
        .btn-edit {
            background-color: #ffc107;
        }
        .btn-edit:hover {
            background-color: #e0a800;
        }
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logout-btn {
            margin-left: auto;
        }
        button.btn.btn-primary.logoutBtn {
            background-color: #fff;
            color: #F2652D;
            border: 1px solid #F2652D;
        }
        button.btn.btn-primary.logoutBtn:hover {
            background-color: #D5440B;
            color: #FFFFFF;
            border: 1px solid #F2652D;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="dashboard-header">
            <h2>Dashboard</h2>
            <div class="logout-btn">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary logoutBtn">Logout</button>
                </form>
            </div>
        </div>
        <ul>
            @foreach ($formStatuses as $form)
                <li>
                    <span>{{ $form['name'] }}</span>
                    <a href="{{ route($form['route']) }}" class="btn">Add</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

</body>
</html>
