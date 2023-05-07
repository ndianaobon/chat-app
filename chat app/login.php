<?php include_once "header.php"; ?>
 <body>
    <div class="wrapper">
      <section class="form login">
         <header>Get Fun</header>
         <form action="#">
            <div class="error-txt"></div>
            <div class="field">
               <label>Email Address</label>
               <input type="email" name="email" placeholder="Enter mail">
            </div>
            <div class="field">
               <label>Password</label>
               <input type="password" name="password" placeholder="Enter new Password">
               <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
               <input type="submit" value="continue to chat">
            </div>
         </form>
         <div class="link">not yet signed up? <a href="signup.php">signup now</a></div>
      </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
 </body>
 </html>