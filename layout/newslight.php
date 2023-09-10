<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8661294288612820"
     crossorigin="anonymous"></script>
     
    <title>AdBelemSJC-Service</title>
  </head>
  
  <body>

  <?= $this->element('nav'); ?>
    
    <?php  // $Root_Path = "http://".$_SERVER['SERVER_NAME']."/eboonline";
            //$newpath = $Root_Path.'/img/logoadbelem.png'; 
            //$newpath = 'img/logoadbelem.png'; 
            $newpath = $this->Html->image('logoadbelem.png', ['class'=>'rounded float-left','width'=>'100px','alt' => 'AbBelemSJC']);
            $pathimage = $newpath;                         
     ?>


<nav class="top-nav">
      <div class="container">
        <div class="text-center">
            <?php echo $pathimage; ?>
        </div>
        <h1 class="display-5">Assembléia de Deus Ministério do Belém - SJC</h1>
        <p class="lead">Rua Dolzani Ricardo, 334 - 12210-110 - São José dos Campos - SP</p>
       
      </div>
</nav>
      <main class="main">
        <div class="container">
          <?= $this->fetch('content'); ?>         
          <?= $this->element('footerlight'); ?>
          </div>
     </main>
     <footer>
    
    </footer>
        
    <?=
    $this->Html->script([
        "/plugins/jquery/jquery.min.js", 
        "/plugins/jquery-ui/jquery-ui.min.js",
        "/plugins/bootstrap/js/bootstrap.bundle.min.js",
        "/js/moment.js",
        "/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
        "/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
        "/dist/js/adminlte.js",
        "/dist/js/pages/dashboard.js"
        
    ])
?>

  </body>
</html>