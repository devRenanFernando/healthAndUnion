<?php
session_start();
ob_start();
// print_r($_SESSION);

require_once "./vendor/autoload.php";
require_once "./helpers/whoops.php";

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'tcc_site';

// Aqui foi usado PHP PDO;
try {
  $connect = new PDO("mysql:host=$host;dbname=" . $db, $user, $password);
  // echo "Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $err) {
  // echo "ERRO: Conexão com o banco de dados não realizada com sucesso. Erro gerado " . $err->getMessage();
}

$queryPosts = "SELECT * FROM posts WHERE BlockedPost = 0 ORDER BY Send_date DESC LIMIT 6";
$resultPosts = $connect->prepare($queryPosts);
$resultPosts->execute();

?>

<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Links -->
  <link rel="shortcut icon" href="./frontend/assets/svg/logo_preenchida.svg" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/6827d460af.js" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="./frontend/css/main.css">

  <title>Bem-vindo à Health & Union - Seu site especializado em Fibromialgia</title>
</head>

<body>
  <?php
  // Header Line
  require_once "./frontend/content/header.php";

  // Contents
  $pg = "";
  if (isset($_GET['pg']) && !empty($_GET['pg'])) {
    $pg = addslashes($_GET['pg']);
  }

  switch ($pg) {
    case 'posts':
      require_once "./frontend/content/{$pg}.php";
      break;
    case 'profile':
      require_once "./frontend/content/{$pg}.php";
      break;
    case 'usersView':
      require_once "./frontend/content/{$pg}.php";
      break;
    case 'contactView':
      require_once "./frontend/content/{$pg}.php";
      break;
    case 'myPosts':
      require_once "./frontend/content/{$pg}.php";
      break;
    case 'post':
      require_once "./frontend/content/{$pg}.php";
      break;
    case 'postsSituation':
      require_once "./frontend/content/{$pg}.php";
      break;
    default:
      require_once "./frontend/content/main.php";
  }

  // Footer
  require_once "./frontend/content/footer.php";
  ?>

  <!-- JavaScript: Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="./frontend/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <!--  jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Owl Carousel -->
  <script src="./frontend/js/owl.carousel.min.js"></script>

  <!-- Isotope -->
  <script src="./frontend/js/isotope.pkgd.min.js"></script>

  <!-- Masks -->
  <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>

  <!-- Magnific -->
  <script src="./frontend/js/jquery.magnific-popup.min.js"></script>

  <!-- MatchHeight -->
  <script src="./frontend/js/jquery.matchHeight-min.js" type="text/javascript"></script>

  <!-- Main File Js -->
  <script src="./frontend/js/main.js"></script>

  <!-- Search -->
  <script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
    }
  </script>

  <!-- SearchUser -->
  <script>
    function searchUser() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputSearchUSer");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>

  <script type='text/javascript'>
    document.addEventListener('DOMContentLoaded', function() {
      window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000);
    })
  </script>

</body>

</html>