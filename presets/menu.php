<?php

echo '<div id="nav">
    <a href="#corpo" id="skipNav">Salta la navigazione</a> <!-- position: absolute; height: 0; overflow: hidden; -->
    <ul>' . "\n";


echo "\t\t";
if (isset($activeItem) && $activeItem == 0)
    echo '<li class="active"><span xml:lang="en">Home</span></li>' . "\n";

else {
    $tabindexCounter++;
    echo '<li><a href="home.php" xml:lang="en" tabindex="' . $tabindexCounter .'">Home</a></li>' . "\n";
}

echo "\t\t";
if (isset($activeItem) && $activeItem == 1)
    echo '<li class="active">Corsi</li>' . "\n";

else {
    $tabindexCounter++;
    echo '<li><a href="corsi.php" tabindex="' . $tabindexCounter . '">Corsi</a></li>' . "\n";
    
}

echo "\t\t";
if (isset($activeItem) && $activeItem == 2)
    echo '<li class="active">Lezioni</li>' . "\n";

else {
    $tabindexCounter++;
    echo '<li><a href="lezioni.php" tabindex="' . $tabindexCounter . '">Lezioni</a></li>' . "\n";
}

echo "\t\t";
if (isset($activeItem) && $activeItem == 3)
    echo '<li class="active">Esami</li>' . "\n";

else {
    $tabindexCounter++;    
    echo '<li><a href="esami.php" tabindex="' . $tabindexCounter . '">Esami</a></li>' . "\n";
}

echo "\t\t";
if (isset($activeItem) && $activeItem == 4)
    echo '<li class="active">Contatti</li>' . "\n";

else { 
    $tabindexCounter++;    
    echo '<li><a href="contatti.php" tabindex="' . $tabindexCounter . '">Contatti</a></li>' . "\n";
}

echo "\t" . '</ul>' . "\n\t</div>\n";

?>