<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Basic Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
          /* Global Styling */
          body {
            font-family: 'Poppins', sans-serif; /* Modern and clean font */
            background-color: #f8f9fa; /* Light background for better contrast */
            font-size: 15px;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styling */
        .navbar {
            width: 100%;
            background-color: #053037; /* Blue background */
            opacity: 1;
            color: white;
            display: flex;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            padding: 12px 75px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Notification Icon (No Color) */
        /* Navbar container */
        .nav-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: center;
        }

        /* Icons section (Notification and Profile) */
        .nav-icons {
            display: flex;
            align-items: center;
            gap: 0px;
            margin-left: auto;  /* This moves the icons to the right */
        }

        /* Notification Bell Icon */
        .notification {
            position: relative;
            color: white;
            font-size: 20px;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .notification:hover {
            opacity: 1;
        }

        .notification .badge {
            position: absolute;
            top: -5px;
            right: -10px;
            background: red;
            color: white;
            font-size: 12px;
            padding: 2px 6px;
            border-radius: 50%;
        }

        /* Profile Button */
        .profile-menu {
            position: relative;
            display: flex;
            align-items: center;
            gap: 25px; /* Small gap between the profile picture and the arrow */
        }   

        /* Profile Button */
        .profile-btn {
            display: flex;
            align-items: center;
            gap: 15px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px 100px; /* Add padding to the profile button */
        }

        /* Profile Picture */
        .profile-pic {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ccc;
        }

        /* Arrow Down inside Small Circle */
        .arrow-circle {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease;
        }

        /* Icon inside the arrow-circle */
        .arrow-circle i {
            font-size: 12px;
            color: black;
        }

        /* Dropdown Menu */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 15px; /* Moves the dropdown 15px from the right edge */
            background: white;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            list-style: none;
            padding: 10px; /* Adds padding inside the dropdown */
            margin: 5px 0;
            display: none;
            width: 150px;
        }

        .dropdown-menu li {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .dropdown-menu li a {
            color: black;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px; /* Adjusted gap between items in the dropdown */
        }

        /* Show dropdown on hover */
        .profile-menu:hover .dropdown-menu {
            display: block;
        }

        /* Hover effect to move the arrow-circle */
        .arrow-circle:hover {
            transform: translateX(5px); /* Move the arrow circle to the right on hover */
        }

        /* Logo */
        .logo-text {
            font-family: 'Calibri Light', sans-serif;
            font-size: 33px;
            font-weight: normal;
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

        /* Header */
        header {
            margin-top: 120px;
            font-size: 25px;
            display: block;
            margin-left: 55px;
            font-weight: bold;
        }

        /* Profile Picture */
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
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-picture input {
            display: block;
            margin: 0 auto;
            text-align: center;
        }

        /* Table Styling */
        table {
            flex-wrap: nowrap;
            margin-left: 60px;
            margin-top: 40px;
            align-content: end;
            border-collapse: collapse;
            margin-top: 20;
            box-shadow: 10px 10px 14px rgba(0, 0, 0, 0.1);
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }   

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: rgb(170, 237, 177);
            font-weight: bold;
            font-size: 100%;
        }

        /* Buttons */
        .btn {
            padding: 10px 15px;
            border: 2px solid #ccc;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s ease-in-out;
        }

        .btn-warning {
            background-color: orange;
            color: white;
            font-size: 14px;
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
            margin-bottom: 10px;
            width: 100px;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-add:hover {
            background-color: darkblue;
        }

        /* Search Bar */
        .search-bar {
            display: flex;
            align-items: center;
            justify-content: end;
            margin-right: 10%;
            margin-bottom: 10px;
        }

        .search-bar input {
            width: 250px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Pagination */
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
            font-weight: bold;
            transition: 0.3s;
        }

        .pagination a:hover {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

   <!-- Navigation Bar -->
   <nav class="navbar">
    <div class="nav-container">
        <!-- Logo -->
        <a href="user_index.php" class="logo-container">
            <img src="../images/logo/DENR.png" alt="DENR MIMAROPA Logo">
            <h3 class="logo-text">DENR MIMAROPA</h3>
        </a>

        <!-- Notification & Profile Section -->
        <div class="nav-icons">
            <!-- Notification Bell -->
            <a href="#" class="notification">
                <i class="fa-solid fa-bell"></i>
                <span class="badge">3</span> <!-- Notification count -->
            </a>

            <!-- Profile Dropdown -->
            <div class="profile-menu">
                <button class="profile-btn">
                    <img src="../images/user/Profile.png" alt="Profile Picture" class="profile-pic">
                    <div class="arrow-circle">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a></li>
                    <li><a href="logout.php"><i class="fa-solid fa-sign-out-alt"></i> Logout</a></li>
                </ul>
                </div>
        </div>
    </div>  
   </nav>
        <div class="container">
            <header>Account Management</header>
            <br>
            <a href="update_account.php" class="btn-add">Add New User</a>
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
