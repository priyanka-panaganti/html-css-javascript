<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Sign up page </title>
    <style>
       body {
          background-image: url(https://www.highereducationdigest.com/wp-content/uploads/2020/06/Amrita-Viswa--550x330.jpg);
          background-repeat: no-repeat;
          background-size: 1800px 800px;

       }
      h1 {
          color: darkslategrey;
          text-align: center;
      }

      h2{
          color: bisque;
          text-align: center;
          text-decoration-color: yellow;
          font-style: italic;
          
      }

      .center {
              display: block;
              margin-left: auto;
              margin-right: auto;
              width: 50%;
     }

     form {
         text-align: center;
     }
     .highlight {
         color: black;
        
     }
      table {
              border: 1px solid black;
              margin-top: 100px;
              margin-bottom: 100px;
              margin-right: 80px;
              margin-left: 80px;
              background-color: peachpuff;
              display: block;
              margin-left: auto;
              margin-right: auto;
              width: 30%;

      }

      h2#center {
       
          text-align: right;
          color: black;
            
         
      }
        
     



    </style>
</head>

<body>
    <h1> Amrita Vishwa Vidyapeetham University</h1>
    <img  src="https://www.amrita.edu/sites/default/files/new-logo-tick.jpg" width="350" height="150" class= "center" >
    <h2  ><mark> create your account for free!!!</mark> </h2>
     <tr >
       <h2 id="center"> <td  > Already have an account?</td>
        <td > <a href="http://localhost/project/login.php">log in</a></td></h2>
        
     </tr>
	<form action="registration.php" method="POST">
		<table>
			<tr>
				<td class="highlight"> Name of the user: </td>
				<td> <input type="text" name="username" placeholder=" enter username" required></td>
			</tr>
			<tr>
                
				<td class="highlight"> Password: </td>
				<td> <input type="Password" name="password" placeholder=" enter password" required></td>
			</tr>
			<tr>
				<td id="blue"> Gender: </td>
				<td> <input type="radio" name="gender" value="m"> Male
				<input type="radio" name="gender" value="f"> Female</td>
			</tr>
           
			<tr>
				<td class="highlight"> Email: </td>
				<td> <input type="mail" placeholder="Email Id" name="email" required></td>
			</tr>
			<tr>
				<td> <a href="file:///D:/HTML,CSS/html-css-javascript/signIn.html"></a><input type="submit" name="Submit" value="create my free account" ></td>
				
			</tr>
		</table>
	</form>
</body>

</html>