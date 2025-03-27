<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Basic Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* Navbar Styling */
        .navbar {
            width: 100%;
            background-color: black; /* Blue background */
            color: white;
            display: flex;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px 75px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Center content */
        .nav-container {
            width: 100%;
            max-width: 120%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo */
        .logo-text {
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin: 0;
        }
        .logo-container{
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-img {
            max-width: 100px; 
            height: auto;
            background: none !important; /* Forces no background */
            mix-blend-mode: darken;
            filter: drop-shadow(0px 0px 2px rgba(0, 0, 0, 0.5));
        }


        .logo-container img{
            width: 50px;
            height: auto;
        }

        /* Navbar Links */
        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
            padding: 0;
            margin: 0;
        }

        .nav-links li {
            display: inline;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding: 8px 15px;
            transition: 0.3s;
        }

        .nav-links li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }
        header {
            margin-top: 120px;
            font-size: 25px;
            display: block;
            margin-left: 55px;
        }
        .profile-picture {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }
        .profile-picture img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ccc;
            margin-bottom: 10px;
        }
        .profile-picture input {
            display: block;
            margin: 0 auto;
            text-align: center;
        }
        
        table {
            flex-wrap: nowrap;
            margin-left: 60px;
            
            align-content: end;
            border-collapse: collapse;
            box-shadow: 10px 10px 14px rgba(0, 0, 0, 0.1);
        }   
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color:rgb(170, 237, 177);
            font-weight: bold;
            font-size: 100%;
        }
        .btn {
            padding: 8px 12px;
            border: 2px solid #ccc;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-warning {
            background-color: orange;
            color: white;
            font-size: 12px;
        }
        .btn-success {
            background-color: green;
            color: white;
        }
        .btn-add {
            margin-left: 95px;
            background-color: blue;
            color: white;
            font-size: 14px;
            padding: 10px 20px;
            display: flex;
            margin-bottom: 1px;
            width: 90px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            
        }
        .search-bar {
            display: flex;
            align-items: center;
            justify-content: end;
            margin-right: 14%;
            margin-bottom: 10px;
        }
        .search-bar input {
            width: 250px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .pagination {
            margin-top: 10px;
            text-align: center;
        }
        .pagination a {
            padding: 8px 12px;
            margin: 2px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-radius: 5px;
            color: black;
        }
        .pagination a:hover {
            background-color: #f4f4f4;
        }
        
        .row-limit-container {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-left: 60px;
        margin-top: 5px;
        }

        .dropdown {
        padding: 5px;
        font-size: 14px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: white;
        cursor: pointer;
        }

    </style>
</head>
<body>

   <!-- Navigation Bar -->
   <nav class="navbar">
            <div class="nav-container">
                <a href="user_index.php" class="logo-container">
                <img src="../images/logo/DENR.png" alt="DENR MIMAROPA Logo">

                <h2 class="logo-text">DENR MIMAROPA</h2>
                </a>
            </div>  
    </nav>
        <div class="container">
            <header>Account Management</header>
            
            <a href="update_account.php" class="btn-add">Add New User</a>
            <br>
            <br>
            <br>
            <div class="row-limit-container">
    <label for="row-limit">Show Rows:</label>
    <select id="row-limit" class="dropdown">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
    </select>
</div>
<br>
<div class="search-bar">
                <br>
                <br>
                <br>
            <input type="text" id="search" placeholder="Search users...">
        </div>
        <table>
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Full Name</th>
                    <th>Office</th>
                    <th>AOR</th>
                    <th>Section</th>
                    <th>Item</th>
                    <th>Position</th>
                    <th>Designation</th>
                    <th>Division</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>example@email.com</td>
                    <td>John Doe</td>
                    <td>Main Office</td>
                    <td>Region 1</td>
                    <td>IT</td>
                    <td>123</td>
                    <td>Developer</td>
                    <td>Staff</td>
                    <td>Division A</td>
                    <td>Active</td>
                    <td>
                        <button class="btn btn-warning">Deactivate</button>
                        <button class="btn btn-success">Reset Password</button>
                    </td>
                </tr>
                <tr>
                    <td>example@email.com</td>
                    <td>John Doe</td>
                    <td>Main Office</td>
                    <td>Region 1</td>
                    <td>IT</td>
                    <td>123</td>
                    <td>Developer</td>
                    <td>Staff</td>
                    <td>Division A</td>
                    <td>Active</td>
                    <td>
                        <button class="btn btn-warning">Deactivate</button>
                        <button class="btn btn-success">Reset Password</button>
                    </td>
                </tr>
                <tr>
                    <td>example@email.com</td>
                    <td>John Doe</td>
                    <td>Main Office</td>
                    <td>Region 1</td>
                    <td>IT</td>
                    <td>123</td>
                    <td>Developer</td>
                    <td>Staff</td>
                    <td>Division A</td>
                    <td>Active</td>
                    <td>
                        <button class="btn btn-warning">Deactivate</button>
                        <button class="btn btn-success">Reset Password</button>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
</body>
</html>
