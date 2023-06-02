<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
       .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }
        
        .header h1 {
            margin: 0;
        }
        
        /* Navigation */
        .sidebar {
            background-color: #f1f1f1;
            width: 250px;
            padding: 20px;
            height: 100vh;
            float: left;
        }
        
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        .sidebar ul li {
            margin-bottom: 10px;
        }
        
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }
        
        /* Content */
        .content {
            padding: 20px;
            margin-left: 250px;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Admin Panel</h1>
    </header>
    
    <div class="sidebar">
        <ul>
            <li><a href="">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>
    
    <div class="content">
        <h2>Dashboard</h2>
        <p>Welcome to the admin panel. Here you can manage your website.</p>
    </div>
</body>
</html>