<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <style>
         #item1{
            text-align: center;
            margin-left:5%;
            margin-right:45%;
            padding-bottom: 10PX;
            background-color: rgba(235,234,239,0.9);
            border-radius: 10px;
    }
    label{
            font-size: 23px;
        }

        body {
            background-image: url("OIP2.png");
            background-size: cover;
            /* You can also use other values like "contain", "auto", or specific dimensions */
          }

        input:hover{
            outline: 3px solid rgba(0, 0, 255, 0.5);
        }

        input{
            font-size: 23px;
            box-shadow: 5px 5px 5px;
            border-radius: 8px;
            width: 40%;
        }
    </style>
   
</head>
<body>
<div id = item1>
<h1>THANK YOU <?PHP echo $_POST["firstName"]?></h1>
<label>First Name : <?PHP echo $_POST["firstName"] ?></label>
<br><br>
<label>Last Name : <?PHP echo $_POST["lastName"] ?></label>
<br><br>
<label>E-mail : <?PHP echo $_POST["email"] ?></label>
<br><br>
<label>phone number : <?PHP echo $_POST["phoneNumber"] ?></label>
<br><br>
<label>Date of Birth : <?PHP echo $_POST["birthdate"] ?></label>
<br><br>
<label>preferable position : <?PHP echo $_POST["position"] ?></label>
<br><br>
<label>Date available to start working : <?PHP echo $_POST["startdate"] ?></label>
<br><br>
<label>Employment status : <?PHP echo $_POST["employmentStatus"] ?></label>
<br><br>
<label>Are you authorized person to work ? :<?PHP echo $_POST["workAuthorization"] ?></label>
<br><br>
<label>Eduction Qulifications : <?PHP echo $_POST["educationQualification"]." in ".$_POST["field"] ?></label>
<br><br>
<label>Experience level : <?PHP echo $_POST["Experience_level"] ?></label>
<br><br>
<label>Language proficiency : <?PHP echo $_POST["Language_proficiency"] ?></label>
<br><br>
<h2>Preferred work schedule</h2>
<label>Monday : <?PHP echo $_POST["Monday"] ?></label>
<br><br>
<label>Tuesday : <?PHP echo $_POST["Tuesday"] ?></label>
<br><br>
<label>Wednesday : <?PHP echo $_POST["Wednesday"] ?></label>
<br><br>
<label>Thursday : <?PHP echo $_POST["Thursday"] ?></label>
<br><br>
<label>Friday : <?PHP echo $_POST["Friday"] ?></label>
<br><br>
<input style="margin-right: 10%;" type="submit" value="OK">
<input type="reset" value="Go Back">
</div>
</body>
</html>




