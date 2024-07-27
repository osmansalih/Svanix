<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- META -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SETTINGS -->
  <title><?php echo $website_name; ?></title>

  <!-- CSS -->
  <?php if($theme == 'dark'){ ?>
  <link rel="stylesheet" href="assets/css/dark/style.css"/>
  <?php } ?>

  <?php if($theme == 'light'){ ?>
  <link rel="stylesheet" href="assets/css/light/style.css"/>
  <?php } ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- SCRIPTS -->
  <script src="https://kit.fontawesome.com/a07667d20e.js" crossorigin="anonymous"></script>

</head>
<body>