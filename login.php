<?php
session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
        
            echo "<p style='position:center;'>" . "wrong username or password!" . "</p>";
        }else
        {
            echo "<p style='position:center;'>" . "wrong username or password!" . "</p>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

	<style type="text/css">
body {
	background-color: #cccccc;
	margin: 0;
	padding: 0;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	height: 100vh;
}

h2 {
	font-size: 50px;
	margin: 10px 0 30px;
	line-height: 0;
	color: black;
	font-family: Sans-serif;
	text-align: center;
}

.login-box {
	display: flex;
	flex-direction: column;
	width: 100%;
	max-width: 440px;
	padding: 30px;
	box-shadow: 0px 5px 10px 1px rgba(0, 0, 0, 0.05);
	background-color: #8c9197;
	border-radius: 20px;
	text-align: center;
    position:relative;
}

.login-header {
	margin: 20px 0 40px 0;
}

.login-header header {
	color: gray;
	font-size: 30px;
	font-weight: 600;
}

.input-box .input-field {
	width: 80%;
	height: 60px;
	font-size: 17px;
	padding: 0 25px;
	margin-bottom: 15px;
	border-radius: 30px;
	border: none;
	outline: none;
	transition: .3s;
}

.input-field::placeholder {
	font-weight: 500;
	color: #222;
}

.input-field:focus {
	width: 90%;
}

section {
	display: flex;
	align-items: center;
	font-size: 14px;
	color: gray;
}

a {
	text-decoration: none;
}

a:hover {
	text-decoration: underline;
}

section a {
	color: gray;
}

.input-submit {
	position: relative;
}

.submit-btn {
	width: 100%;
	height: 60px;
	background: #222;
	border: none;
	border-radius: 30px;
	cursor: pointer;
	transition: .3s;
}

.input-submit label {
	position: absolute;
	top: 50%;
	left: 50%;
	color: #fff;
	transform: translate(-50%, -50%);
	cursor: pointer;
}

.submit-btn:hover {
	background: #000;
	transform: scale(1.05, 1);
}

.sign-up-link {
	text-align: center;
	font-size: 15px;
	margin-top: 20px;
}

.sign-up-link a {
	color: #000;
}


	</style>

    <div id="box">
        <form method="post">
            <div class="login-box">
                <div class="login-header">
                    <h2>Login</h2>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Username" autocomplete="off" name="user_name" required>
                </div>
            
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Password" autocomplete="off" name="password" required>
                </div>
            
                <div class="input-submit">
                    <input id="button" type="submit" value="Login" class="submit-btn">
                    <label for="button">Login</label>
                </div>
                <div class="sign-up-link">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </div>
            </div>
    </div>
</body>
</html>

