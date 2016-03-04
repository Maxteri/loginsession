<?php
   ob_start();
   session_start();
?>


<html>
   
   <head>
	<title>Login</title>      
   </head>
	
   <body>
      
      <h2>Tämä on kirjautumislomake. Täytä lomake oikein</h2> 
      <div>
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'paloauto' && 
                  $_POST['password'] == 'pukukoppi') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'paloauto';
                  
                  echo 'Hienosti meni. Tervetuloa palveluun';
               }else {
                  $msg = 'Oho. Nyt meni väärin. Kokeilahan uudestaan';
               }
            }
         ?>
      </div>
      
      <div>
      
         <form role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4><?php echo $msg; ?></h4>
            <input type = "text" name = "username" placeholder = "kirjoita: paloauto" required autofocus></br>
            <input type = "password" name = "password" placeholder = "kirjoita: pukukoppi" required>
               <br><br>
            <button type = "submit" name = "login">Kirjaudu</button>
         </form>
			
         Kokeile  <a href = "home.php" title = "Logout">uudestaan.
         
      </div> 
      
   </body>
</html>