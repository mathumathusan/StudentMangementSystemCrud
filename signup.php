<?php
include_once ("include/header.php");
$link = new mysqli("localhost","root","","securebackup");
?>
</head>
<?php echo '<a href="login.php">LOGIN</a>';?>
<body>
	<div class="container">
	
		<form action="create.php" method="post">
			<div class="form-input">
                <label for="username">username</label> 
				<input type="text" name="username" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
            <label for="password">password</label>
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="SIGNUP" class="btn-login"/>
		</form>
	</div>
</body>
</html>