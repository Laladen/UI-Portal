<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            padding: 50px 20px;
        }
        #profile {
            width: 32.8%; /* Make it full width */
            padding: 10px; /* Add padding for better appearance */
            border: 1px solid #ccc; /* Optional: add border */
            border-radius: 5px; /* Optional: rounded corners */
        }
        .profile-picture {
            display: flex;
            flex-direction: column;
            align-items:center;
            margin-bottom: 50px;
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

        /* Navbar Styling */
        .navbar {
            width: 100%;
            background-color: #009688; /* Blue background */
            color: white;
            display: flex;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            padding: 20px 75px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Center content */
        .nav-container {
            width: 90%;
            max-width: 1000px;
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

        .container {
            background: #fff;
            width: 90%;
            max-width: 800px;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin: 80px auto;
        }

        header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Grid Layout */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 10px;
            margin-bottom: 20px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
        }

        .input-group label {
            font-size: 14px;
            margin-bottom: 5px;
            font-weight: 600;
            color: #333;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: 0.3s ease-in-out;
        }

        .input-group input:focus,
        .input-group select:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Form Title */
        .title {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            display: block;
            margin-bottom: 15px;
            color: #333;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            font-size: 16px;
            padding: 10px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        .go-back {
            background-color: #ffcc00;
            color: #333;
        }

        .go-back:hover {
            background-color: #e6b800;
        }

        .submit {
            background-color: #009668;
            color: white;
        }

        .submit:hover {
            background-color: #009925;
        }

    </style>
<body>

        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="nav-container">
                <a href="update_account.php" class="logo-container">
                <img src="../images/logo/DENR.png" alt="DENR MIMAROPA Logo">

                <h2 class="logo-text">DENR MIMAROPA</h2>
                </a>
            </div>  
        </nav>

            <div class="container">
                <div class="divider"></div>
                    <header>Registration Form</header>
                    <form action="#" method="post">
                 <div class="col-md-6 col-sm-12; row; mx-auto">
            <div class="card-body">
                        
            <!-- Personal Details -->
            <div class="text-center mb-4">
                <span class="title">Personal Details</span>
            </div>
        <br>
        
        <form action="account_update.php" method="post" enctype="multipart/form-data">
            <!-- Profile Picture Upload -->
            <div class="profile-picture">
                <img src="default-profile.png" alt="" id="profileImg">
                <input type="file" name="profile_picture" id="profilePicture" accept="image/*">
            </div>

        <div class="form-grid">
            <div class="input-group">
                <label>First Name</label>
                    <input type="text" placeholder="Enter your first name" required>
            </div>
            
            <div class="input-group">
                <label>Middle Name</label>
                    <input type="text" placeholder="Enter your middle name" required>
            </div>
            <div class="input-group">
                <label>Last Name</label>
                    <input type="text" placeholder="Enter your last name" required>
            </div>
        </div>
                        
        <div class="form-grid">
            <div class="input-group">
                <label>Address</label>
                    <input type="text" placeholder="Enter your address" required>
            </div>
            <div class="input-group">
                <label>Date of Birth</label>
                    <input type="date" required>
            </div>
            <div class="input-group">
                <label>Gender</label>
                    <select name="gender" id="gender" required>
                        <option value=""disabled selected>Please select option</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
            </div>
        </div>
                        
        <div class="form-grid">
            <div class="input-group">
                <label>Civil Status</label>
                    <select name="civil_status" id="civil_status" required>
                        <option value="" disabled selected>Please select option</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="widow">Widow</option>
                    </select>
            </div>

            <div class="input-group">
                <label for="contact">Contact Number:</label>
                <input type="number" name="contact" id="contact">
            </div>

            <div class="input-group">
                <label for="atttachment">E-Signature</label>
                <input type ="file" name="attachment" id="attachment">
            </div>
        </div>
    <br>

            <!-- Create Account -->
            <div class="text-center mb-4">
                <span class="title">Create Account</span>
            </div>
            <br>

            <div class="form-grid">
            <div class="input-group">
                <label>Username</label>
                <input type="text" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label>Email Address</label>
                <input type="text" placeholder="Enter your email address" required>
            </div>
            </div>
                        
            <div class="form-grid">
            <div class="input-group">
                <label for="password">Password</label>
                            <div style="position: relative;">
                                <input type="password" name="password" id="password" class="password-field" required>
                                <span class="password-toggle-icon">
                                    <i class="fas fa-eye" id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                                </span>
                            </div>
                            </div>

                                <div class="input-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <div style="position: relative;">
                                        <input type="password" name="confirm_password" id="confirm_password" class="password-field" required>
                                        <span class="password-toggle-icon">
                                            <i class="fas fa-eye" id="toggleConfirmPassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
                                        </span>
                                    </div>
                                </div>
                        </div>
                    <br>

                            <!-- Position Details -->
                        <div class="text-center mb-4">
                                <div class="title">Work Assignment</span>
                                </div>
                                <br>
                        <div class="form-grid">

                            <div class="input-group">
                                <label for="office">Office:</label>
                                <select name="office" id="office" required>
                                    <option value="" disabled selected>Please select option</option>
                                    <option value="central-office">Central Office</option>
                                    <option value="bureau">Bureau</option>
                                    <option value="regional-office">Regional Office</option>
                                    <option value="PENRO">PENRO</option>
                                    <option value="CENRO">CENRO</option>
                                    <option value="PAMO">PAMO</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="area_responsibility">Area of Responsibility:</label>
                                <select name="area_responsibility" id="area_responsibility" required>
                                     <option value="" disabled selected>Please select option</option>
                                     <option value></option>
                                     <option value="MIMAROPA_Region">Regional</option>
                                     <option value="marinduque">Marinduque</option>
                                     <option value="romblon">Romblon</option>
                                     <optgroup label="Oriental-Mindoro">
                                     <option value="oriental-mindoro">PENR Office</option>
                                     <option value="Roxas-OrMin">Roxas</option>
                                     <option value="Socorro-OrMin">Socorro</option>
                                     </optgroup>
                                     <optgroup label="Occidental-Mindoro">
                                     <option value="Occidental-Mindoro">PENR Office</option>
                                     <option value="Sablayan-OcMin">Sablayan</option>
                                     <option value="San-Jose-OcMin">San Jose</option>
                                     </optgroup>
                                     <optgroup label="Palawan">
                                     <option value="Palawan">PENR Office</option>
                                     <option value="Brookes-Point-Palawan">Brookes-Point</option>
                                     <option value="Coron-Palawan">Coron</option>
                                     <option value="Puerto-Princesa-Palawan">Puerto-Princesa</option>
                                     <option value="Brookes-Point-Palawan">Quezon-Palawan</option>
                                     <option value="Taytay-Palawan">Taytay</option>
                                     <option value="Roxas-Palawan">Roxas</option>
                                     </optgroup>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="division">Division:</label>
                                <select name="division" id="division" required>
                                     <option value="" disabled selected>Please Select Option</option>
                                     <optgroup label="Central Office"></optgroup>
                                     <option value="CO">CO</option>
                                     </optgroup>
                                     <optgroup label="Regional Office">
                                     <option value="ORED">ORED</option>
                                     <option value="NGP">NGP</option>
                                     <option value="RSCIG">RSCIG</option>
                                     <option value="ARDTS">ARDTS</option>
                                     <option value="LPDD">LPDD</option>
                                     <option value="SMD">SMD</option>
                                     <option value="CDD">CDD</option>
                                     <option value="ED">ED</option>
                                     <option value="ARDMS">ARDMS</option>
                                     <option value="LD">LD</option>
                                     <option value="PMD">PMD</option>
                                     <option value="AD">AD</option>
                                     <option value="FD">FD</option>
                                     </optgroup>
                                     <optgroup label="Bureau"></optgroup>
                                     <option value="MGB">MGB</option>
                                     <option value="EMB">EMB</option>
                                     </optgroup>
                                     <optgroup label="PENRO"></optgroup>
                                     <option value="OP">OP</option>
                                     <option value="TSD">TSD</option>
                                     <option value="MSD">MSD</option>
                                     </optgroup>
                                     <optgroup label="CENRO"></optgroup>
                                     <option value="OC">OC</option>
                                     <option value="CENRO">CENRO</option>
                                     </optgroup>
                                     <optgroup label="Protected Area"></optgroup>
                                     <option value="PAMO">PAMO</option>
                                     </optgroup>
                                     <option value="OTHERS">OTHERS</option>
                                </select>
                            </div>
                          
                        </div>
                        <div class="form-grid">
                            <div class="input-group">
                                <label for="item_no">Item No:</label>
                                <input type="text" name="item_no" id="item_no" required>
                            </div>
    
                            <div class="input-group">
                                <label for="position">Position:</label>
                                <input type="text" name="position" id="position" required>
                            </div>

                            
                            <div class="input-group">
                                <label for="sg">SG:</label>
                                <input type="text" name="salary_per_annum" id="Salary per Annum for COS" required>
                            </div>
                        </div>

                        <div class="form-grid">
    
                            <div class="input-group">
                                <label for="designation">Designation:</label>
                                <select name="designation" id="designation" required>
                                     <option value=""disabled selected>Please select option</opt>
                                     <option value="head-office">Head of Office</option>
                                     <option value="division-chief">Division Chief</option>
                                     <option value="section-chief">Section Chief</option>
                                     <option value="na">NA</option>
                                     <option value="job-order">Job Order</option>
                                </select>
                            </div>
    
                            <div class="input-group">
                                <label for="section">Section:</label>
                                <select name="section" id="section" required>
                                     <option value=""disabled selected>Please select option</option>
                                     <option value="ICS">ICS</option>
                                     <option value="GSS">GSS</option>
                                     <option value="MES">MES</option>
                                     <option value="ETC">ETC</option>
                                </select>
                            </div>
                            
                            <div class="input-group">
                                <label for="role">Role:</label>
                                <select name="role" id="role" required>
                                     <option value=""disabled selected>Please select option</option>
                                     <option value="signatory">Signatory</option>
                                     <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-actions">
                            <button type="button" class="btn go-back">Go Back</button>
                            <input type="submit" class="btn submit" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script> 

document.addEventListener("DOMContentLoaded", function () {
    const passwordField = document.querySelector("#password");
    const confirmPasswordField = document.querySelector("#confirm_password");
    const togglePassword = document.querySelector("#togglePassword");
    const toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");

    function toggleVisibility(field, icon) {
        const type = field.type === "password" ? "text" : "password";
        field.type = type;
        icon.classList.toggle("fa-eye-slash");
        icon.classList.toggle("fa-eye");
    }

    togglePassword.addEventListener("click", function () {
        toggleVisibility(passwordField, togglePassword);
    });

    toggleConfirmPassword.addEventListener("click", function () {
        toggleVisibility(confirmPasswordField, toggleConfirmPassword);
    });
});

// Handle profile picture preview before uploading
document.getElementById("profilePicture").addEventListener("change", function(event) {
            const file = event.target.files[0]; // Get the selected file
            if (file) {
                const reader = new FileReader(); // Create a FileReader object
                reader.onload = function(e) {
                    document.getElementById("profileImg").src = e.target.result; // Display the selected image
                };
                reader.readAsDataURL(file); // Convert file to Data URL
            }
        });

</script>
    
</body>
</html>
