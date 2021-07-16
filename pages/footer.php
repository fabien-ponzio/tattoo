<!-- MANDATORY LINKS  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../css/footer.css">

<?php 
$page = "Footer";
    if (isset($_POST['connectAdmin'])) {
        $admin = new Admin;
        $admin->connectAdmin();
}?>
<body>
  
<div class="footer-basic">
  <footer>
      <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Accueil</a></li>
          <li class="list-inline-item"><a href="#">Contact</a></li>
          <li class="list-inline-item"><a href="#">Artistes</a></li>
          <li class="list-inline-item"><a href="#">F.A.Q</a></li>
      </ul>
      <div class="form-connect">
      <form class="connect" action="" method="POST">
        <p id="form-connect-title">Admin ? connecte-toi à ton compte</p>
        <div id="form-connect-container">
          <div class="connect-input">
            <input type="text" name="login" required="" placeholder="login">
          </div>
          <div class="connect-input">
            <input type="password" name="password" required="" placeholder="password">
          </div>
          <div class="connect-input">
            <input id="form-connect-submit" type="submit" name="connectAdmin" value="connexion">
          </div>
        </div>
      </form>
      <div class="social">
        <a href="#"><i class="icon ion-social-instagram"></i></a>
        <a href="#"><i class="icon ion-social-snapchat"></i></a>
        <a href="#"><i class="icon ion-social-twitter"></i></a>
        <a href="#"><i class="icon ion-social-facebook"></i></a>
      </div>
    </div>


      <p class="copyright">Fabien Ponzio © 2021</p>
  </footer>
</div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<?php ob_end_flush(); ?>