<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
     }
?>
<?php include_once "header.php"; ?>
 <body>
    <div class="wrapper">
      <section class="form signup">
         <header>Get Fun</header>
         <form action="#" enctype="multipart/form-data">
            <div class="error-txt"></div>
            <div class="name-details">
               <div class="field">
                  <label>Frist Name</label>
                  <input type="text" name="fname" placeholder="Frist Name" required>
               </div>
               <div class="field">
                  <label>Last Name</label>
                  <input type="text" name="lname" placeholder="Last Name" required>
               </div>
            </div>
            <div class="field">
               <label>Email Address</label>
               <input type="text" name="email" placeholder="Enter mail" required>
            </div>
            <div class="field">
               <label>Password</label>
               <input type="password" name="password" placeholder="Enter new Password" required>
               <i class="fas fa-eye"></i>
            </div>
            <div class="image">
               <label>Select Image</label>
               <input type="file" name="image" required>
            </div>
            <div class="field button">
               <input type="submit" value="continue to chat">
            </div>
         </form>
         <div class="link">Already signed up? <a href="login.php">login now</a></div>
      </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
 </body>
 </html>