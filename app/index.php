<?php
session_start();
ob_start();
// print_r($_SESSION);
?>

<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Links -->
  <link rel="shortcut icon" href="../frontend/assets/svg/logo_preenchida.svg" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,400;1,600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/6827d460af.js" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="../frontend/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="../frontend/css/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="../frontend/css/magnific-popup.css">
  <link rel="stylesheet" href="../frontend/css/main.css">

  <title>Bem-vindo à Health & Union - Seu site especializado em Fibromialgia</title>
</head>

<body>
  <?php
  // Header Line
  require_once "../frontend/content/header.php";

  // Contents
  $pg = "";
  if (isset($_GET['pg']) && !empty($_GET['pg'])) {
    $pg = addslashes($_GET['pg']);
  }

  switch ($pg) {
    case 'posts':
      require_once "../frontend/content/{$pg}.php";
      break;
    case 'adm':
      require_once "../frontend/content/page/{$pg}.php";
      break;
    case 'contributors':
      require_once "../frontend/content/page/{$pg}.php";
      break;
    case 'user':
      require_once "../frontend/content/page/{$pg}.php";
      break;
    default:
      require_once "../frontend/content/main.php";
  }

  // Footer
  require_once "../frontend/content/footer.php";
  ?>

  <!-- JavaScript: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="../frontend/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../frontend/js/owl.carousel.min.js"></script>
  <script src="../frontend/js/isotope.pkgd.min.js"></script>
  <script src="../frontend/js/jquery.magnific-popup.min.js"></script>
  <script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
    }
  </script>
  <script src="../frontend/js/main.js"></script>

</body>

</html>