<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
<body>

        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="nav-container">
                <a href="index.php" class="logo-container">
                <img src="images/logo/DENR.png" alt="DENR MIMAROPA Logo">

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

            <div class="input-group full-width">
                <label for="tin">TIN:</label>
                <input type="text" name="tin" id="tin" placeholder="123-456-789-000" required>
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

</script>
    
</body>
</html>
