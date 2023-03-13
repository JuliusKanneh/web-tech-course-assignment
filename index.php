<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objectivity Form</title>
    <script src="https://kit.fontawesome.com/7453cfc9cc.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>INFO SESSION WITH OBJECTIVITY</h1>
    <p>
        OBJECTIVITY IS PARTNERING WITH UNILAK TO HERE THE GRADUATES FROM <br /> THE CAMPUS OF KIGALI. PLEASE FILE THIS FORM 
        FOR YOU TO BE CONSIDERED.
    </p>
    <form action="db_logic.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>FORM</legend>
            <fieldset>
                <legend>PERSONAL INFORMATION</legend>
                <div>
                    <label for="firstname">FIRST NAME</label> <br />
                    <input type="text" name="firstname" id="firstname" onkeyup="validateFName()"><br>
                    <span id="fname-error" style="color: red;"></span>
                    <br><br>
                </div>
                <div>
                    <label for="lastname">LAST NAME</label> <br />
                    <input type="text" name="lastname" id="lastname" onkeyup="validateLName()"><br>
                    <span id="lname-error" style="color: red;"></span>
                    <br /><br>
                </div>
                <div>
                    <input type="email" placeholder="EXAMPLE@GMAIL.COM" name="email" id="email" onkeyup="validateEmail()"><br>
                    <span id="email-error"></span> <br /> <br />
                </div>
                <div>
                    <input type="password" placeholder="****************" name="password" id="password" onkeyup="validatePassword()" ><br>
                    <span id="password-error"></span>
                    <br /><br>
                </div>
                <div>
                    <input type="date" name="dob" id="dob" onchange="validateDob()"/><br>
                    <span id="dob-error"></span>
                    <br /><br>
                </div>
                <div>
                    <label for="gender">YOUR GENDER</label> <br> <br>
                    <input type="radio" name="gender" required>
                    <label for="gender">MALE</label>
                    <input type="radio" name="gender" required>
                    <label for="gender">FEMALE</label>
                </div>
            </fieldset>
            <br>
            <fieldset>
                <legend>PERSONAL ADDRESS</legend>
                <div>
                    <label for="">COUNTRY</label><br>
                    <select name="country" required>
                        <option value="rwanda">RWANDA</option>
                        <option value="kenya">KENYA</option>
                        <option value="burundi">BURUNDI</option>
                        <option value="congo">CONGO</option>
                        <option value="nigeria">NIGERIA</option>
                        <option value="ghana">GHANA</option>
                    </select><br><br>
                </div>
                <div>
                <label for="">DISTRICT</label><br>
                    <select name="district" required>
                        <option value="gasabo">GASABO</option>
                        <option value="kicukiru">KICUKIRU</option>
                    </select><br><br>
                </div>
            </fieldset>
            <br>
            <fieldset>
                <legend>QUALIFICATION AND EXPERIENCE</legend>
                <div>
                    <label for="master_languages">PLEASE SELECT MAXIMUM THREE LANGUAGES YOU MASTER</label> <br>
                    <select name="master_languages[]" multiple size="6">
                        <option name="master_languages[]" value="Java">JAVA</option>
                        <option name="master_languages[]" value="PHP">PHP</option>
                        <option name="master_languages[]" value="Python">PYTHON</option>
                        <option name="master_languages[]" value="Dart">DART</option>
                        <option name="master_languages[]" value="C">C</option>
                        <option name="master_languages[]" value="C++">C++</option>
                        <option name="master_languages[]" value="R">R</option>
                        <option name="master_languages[]" value="Go">GO</option>
                    </select> <br> <br>
                </div>
            </fieldset><br><br>
            <fieldset>
                <legend>QUALIFICATION AND EXPERIENCE</legend>
                <div>
                    <label>UPLOAD YOUR CV</label><br>
                    <input type="file" name="cv"><br><br>
                </div>
                <div>
                    <label for="education_level">EDUCATION LEVEL</label><br>
                    <select name="education_level">
                        <option value="Bachelor Degree">BACHELOR DEGREE</option>
                        <option value="Master Degree">MASTERS DEGREE</option>
                        <option value="Doctorate Degree">DOCTORATE DEGREE</option>
                    </select>
                    <span id="education-level-error"></span>
                    <br><br>
                </div>
                <div>
                    <label for="educationDate">WHAT WAS YOUR EDUCATION DATE</label><br>
                    <input type="date" name="graduation_date" required><br><br>
                </div>
                <div>
                    <p>WHICH LANGUAGES DO YOU WANT TO MASTER IN THE FUTURE</p>
                    <input type="checkbox" name="to_master_languages[]" value="Java">
                    <label for="c#">C#</label><br>
                    <input type="checkbox" name="java">
                    <label for="java">JAVA</label><br>
                    <input type="checkbox" name="to_master_languages[]" value="Java">
                    <label for="c">C</label><br>
                    <input type="checkbox" name="to_master_languages[]" value="c++">
                    <label for="c++">C++</label><br>
                    <input type="checkbox" name="to_master_languages[]" value="dart">
                    <label for="dart">DART</label><br><br>
                </div>
            
            </fieldset><br><br>
            <fieldset>
                <div>
                    <legend>CONTACT US</legend>
                    <textarea name="contact_us_msg" cols="55" rows="10" id="contact_us_msg" onkeyup="validateMsg()"></textarea><br>
                    <span id="msg-error"></span><br>
                </div>
            </fieldset>
            <center>
                <button name="submit_btn" onclick="return validateForm()">SUBMIT</button>
            </center>
        </fieldset><br><br>
        <span id="form-error"></span>
    </form>
    
    <script src="script.js"></script>
</body>
</html>