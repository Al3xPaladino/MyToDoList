<!DOCTYPE html>
<html>
  <head>
    <?php include("clear.php"); ?>
    <meta charset="utf-8">
    <title>Lista della Spesa</title>
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
      window.onload = function() {
        document.getElementById('inp').focus();
      }
    </script>
  </head>
  <body>

    <div class="container">
      <form action="add.php">
        <input type="text" id="inp" name="nome" class="txtb" placeholder="Aggiungi alla Lista" autocomplete="off">
        <button style="display: none;"></button>
      </form>
      <div class="notcomp">
        <h3>Da Comprare</h3>
        <?php include 'readR.php'; ?>


      </div>

      <div class="comp">
        <h3>Comprati</h3>
        <?php include 'readT.php'; ?>
      </div>
    </div>

  </body>
</html>
