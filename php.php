<?php
$bar_url="./" ;//chemin du dossier
if(isset($_GET['dossier'])){
    $dossier = ($_GET['dossier']);
  
    $bar_url=$bar_url.$dossier; 
}

$dirs = scandir($bar_url);  

foreach ($dirs as $dir) {
    # code...debut de lecture du dossier
    if (is_dir($bar_url.$dir)) {
        # code...
        if ($dir == "..") {
            # code...
        } else {
            # code...
            if (isset($_GET['dossier'])) {
                # code...
                ?>
                 <div class="image">
                <a href="php.php?dossier=<?php echo $dossier.$dir; ?>/">
                <img src='image/doc2.png' alt=''width='30'  height='40'><?php echo $dir;?>
                </a>
                </div>
                <?php
            } else {
                # code...
                
                ?>
                <div>
                <a href="php.php?dossier=<?php echo $dir; ?>/">
                <img src='image/doc2.png' alt=''width='40' height='40' ><?php echo $dir; ?>
                </a>
                </div>
                <?php
            }
        }  //si la verifiation indique que c'est pas un 
    }   else
     { 
        # code... lecture du fichier
       
      echo "
             <div>
                <a>
                <img src='image/fichier.png' alt='' width='50' height=' 40'> <". $dir."
                </a>
                </div>
            ";
            
            
    }
}
               ?>