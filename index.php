<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <!-- DEBUT DE PAGE  -->
                <nav class="navbar navbar-inverse;">
                    <div class="container">
                            
                        </div>
                    </div>
                </nav>
          </div>
          
          <div class="container">
        <div class="row" style="heigt:499px;margin-right:18px;">
          <div class="col-sm-3 CLOSE" style="background-color:pink;height:750px;">
                      </div>
                <div class="col-sm-6" style="background-color:lavenderblush;height:750px;">

                          <?php
                          include('php.php>')
                          ?>
                 </div>
          <div class="col-sm-3" style="background-color:pink;height:750px;">
            

                          <form action="ajout.php" method="get">
                          <label for="dossier">Ajout</label>
                          <input type="text" name="ajout">
                          <input type="submit">
                          </form>

                          <form action="supprimer.php" method="get">
                          <label for="dossier">Supprimer</label>
                          <input type="text" name="supprimer">
                          <input type="submit">
                          </form>

                          <form action="supprimer.php" method="get">
                          <label for="dossier"></label>
                          <input type="text" name="nom"placeholder="nom">
                          <label for="dossier"></label><br>
                          <input type="text" name="renommer" placeholder="renommer">
                          <input type="submit" name="executeur">
                          </form>
                          <!-- copy -->
                          <form action="supprimer.php" method="get">
                          <label for="dossier"></label><br>
                          <input type="text" name="nom"placeholder="doc a copier">
                          <label for="dossier"></label><br>
                          <input type="text" name="nom_copy" placeholder="nom_copy">
                          <input type="submit" name="copy">
                          </form>
                      </div>
            </div>
       </div>
       </div>     
</body>
</html>