<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Links -->
  <link rel="shortcut icon" href="../frontend/assets/img/svg/logo_preenchida.svg" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,700;1,400;1,600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/6827d460af.js" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="../frontend/css/main.css">

  <title>Bem-vindo à Health & Union - Seu site especializado em Fibromialgia</title>
</head>

<body>
  <!-- Header Line -->
  <?php
  require_once "../frontend/content/header.php";
  ?>
  
    <!-- Contents -->
    <?php
    @$principal = $_GET['a'];
    if (isset($principal)) {
      include_once('../frontend/content/' . $principal);
    } else {
      include_once "../frontend/content/main.php";
    }
    ?>

    <!-- Footer -->
    <?php
      require_once "../frontend/content/footer.php";
    ?>
  </div>

  <!-- JavaScript: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="../frontend/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>

</html>