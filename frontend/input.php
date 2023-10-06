<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];

		}
		
		{
            $query = "insert into registration(id,name, email, password, age, gender, height, weight) values (NULL,$name, $email, $password, $age, $gender, $height, $weight)";

			if(mysqli_query($con, $query))
			{
				echo "<script>alert('User created successfully!');</script>";
				header("Location: userOUTPUT.php");
				die;
			
		}else
		{
			echo "Please enter some valid information!";
		}
	    }
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>FitPal</title>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <h2 class="logo"><i class='bx bxl-unity' ></i>FitPal</h2>
        </nav>
    </header>
    <div class="background"></div>

    <div class="container">

        <div class="content">
            <div class="text-sci">
                <h2>Welcome<br><span>
                    To healthy mind<br> in a healthy body
                </span></h2>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="connect.php" method="POST">
                    <h2>Sign In</h2>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user' ></i></span>
                            <input type="text" id="name" name="name" required >
                            <label for="name">Name</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class='bx bxl-gmail' ></i></span>
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email</label>
                        </div>
                       <div class="input-box">
                           <span class="icon"><i class='' ></i></span>
                           <input type="password" id="password" name="password" required>
                           <label for="password">Password</label>
                    </div>

                    <div class="login-register">
                       <p> <a href="#" class="register-link"><button type="submit" class="btn">Sign Up</button></a></p>
                    </div>
                </form>
            </div>

           <div class="form-box register">
                <form action="connect.php" method="post">
                <div class="input-box">
                    <input type="text" id="age" name="age" required>
                    <label for="age">Age</label>
                </div>
                <div class="input-box">
                    <input type="text" id="gender" name="gender" required>
                    <label for="gender">Gender</label>
                </div>
                <div class="input-box">
                    <input type="text" id="height" name="height" required>
                    <label id="height" for="height">Height</label>
                </div>
                <div class="input-box">
                    <input type="text" id="weight" name="weight" required>
                    <label id="weight" for="weight">Weight</label>
                </div>
                <div class="login-register">
                    <p> <a href="#" class="register-link"><button type="submit" class="btn" name="login_btn">Submit</button></a></p>
                 </div>
            </form>
            </div>
        </div>
    </div>


    <script src="login.js"></script>
</body>
</html>