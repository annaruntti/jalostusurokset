<?php
  $page = $_GET['sivu'];

  include('partials/head.php');
  include('partials/header.php');

  switch($page) {
    case 'haku':
      include('pages/haku.php');
      break;
    case 'urosilmoitus':
      include('pages/urosilmoitus.php');
      break;
    default:
      include('pages/etusivu.php');
    }

  include('partials/footer.php');
  include('partials/foot.php');
