<!-- MANDATORY LINKS  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../css/footer.css">

<?php 
    if (isset($_POST['connectAdmin'])) {
        $admin = new Admin;
        $admin->connectAdmin();
}?>
<body>
  
<div class="footer-basic">
  <footer>
    <div>
      <form action="" method="POST">

      <p>Admin ?</p>
      <label for="login">Login:</label>
      <input type="text" name="login" required="">
      
      <label for="password">Mot de passe:</label>
      <input type="password" name="password" required="">

      <input type="submit" name="connectAdmin">

      </form>
    </div>
      <div class="social">
        <a href="#"><i class="icon ion-social-instagram"></i></a>
        <a href="#"><i class="icon ion-social-snapchat"></i></a>
        <a href="#"><i class="icon ion-social-twitter"></i></a>
        <a href="#"><i class="icon ion-social-facebook"></i></a>
      </div>
      <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Acceuil</a></li>
          <li class="list-inline-item"><a href="#">Contact</a></li>
          <li class="list-inline-item"><a href="#">Artistes</a></li>
          <li class="list-inline-item"><a href="#">F.A.Q</a></li>
      </ul>
      <p class="copyright">Fabien Ponzio © 2021</p>
  </footer>
</div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>