<?php 
$page = 'index';
require_once('pages/header.php'); 
?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="./css/index.css">
</header>

  <main id="main-index">
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="video/video.mp4" type="video/mp4">
      </video>
      <section id="main-index-presentation">
        <h1 id="main-index-title">L'ornithorynque Tatoo</h1>
        <p>
          Nous vous accueillons du lundi au samedi,  dans une ambiance décontractée, chaleureuse et créative. Confiez nous vos projets de tatouages et nous nous engagerons à vous aider à les concrétiser. 
          Nous sommes situés au coeur de Marseille, à deux pas de la Cathédrale de la Major, entre le vieux-port et la Joliette.
          A très bientôt.
        </p>
      </section>
      <section id="main-index-gallery">
        <img class="index-gallery-img" src = "https://images.unsplash.com/photo-1568515045052-f9a854d70bfd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dGF0dG9vfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
        <img class="index-gallery-img" src = "https://images.unsplash.com/photo-1565058379802-bbe93b2f703a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dGF0dG9vfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60">
        <img class="index-gallery-img" src = "https://images.unsplash.com/photo-1573401925152-1149a55a0a5f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8dGF0dG9vfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">

        <img class="index-gallery-img" src= "https://images.unsplash.com/photo-1482375702222-03a768d5ea3c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8dGF0dG9vfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
        <img class="index-gallery-img" src="https://images.unsplash.com/photo-1482329033286-79a3d24413b4?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHRhdHRvb3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
        <img class="index-gallery-img" src="https://images.unsplash.com/photo-1541121514895-0f36e7d38d14?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHRhdHRvb3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">

        <img class="index-gallery-img" src="https://images.unsplash.com/photo-1611501275019-9b5cda994e8d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzJ8fHRhdHRvb3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
        <img class="index-gallery-img" src="https://images.unsplash.com/photo-1585303390830-874c989ce8f1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDF8fHRhdHRvb3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
        <img class="index-gallery-img" src="https://images.unsplash.com/photo-1543244128-30d70d41e2a9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDV8fHRhdHRvb3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
      </section>
      <section id="main-index-map">
        <address>
          <b>L'ornithorynque Tattoo</b>
          18 rue Jean Leca </br>
          13002 Marseille
          <a class="contact" href="tel:+330491919191">+330491919191</a>
          <a class="contact" href="mailto:hello@lovecraftbookstore.com">hello@ornithorynquetattoo.com</a>
        </address>
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d11614.901052181933!2d5.364423738464926!3d43.299074866158676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x12c9c0e9a5129d59%3A0xcdc8820f277bc5dd!2sl&#39;ornithorynque%20tatouage!3m2!1d43.3022073!2d5.365897899999999!5e0!3m2!1sen!2sfr!4v1626255823929!5m2!1sen!2sfr" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </section>
</main>

<?php require_once('pages/footer.php'); ?>