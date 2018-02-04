<?php

echo '<div id="nav">
    <a href="#corpo" id="skipNav">Salta la navigazione</a> <!-- position: absolute; height: 0; overflow: hidden; -->
    <ul>';

$tabindexCounter = 1;

if (isset($activeItem) && $activeItem == 0)
    echo '<li class="active"><span xml:lang="en">Home</span></li>';

else {
    echo '<li><a href="home.php" xml:lang="en" tabindex="' . $tabindexCounter .'">Home</a></li>';
    $tabindexCounter++;
}

if (isset($activeItem) && $activeItem == 1)
    echo '<li class="active">Corsi</li>';

else {
    echo '<li><a href="corsi.php" tabindex="' . $tabindexCounter . '">Corsi</a></li>';
    $tabindexCounter++;
}

if (isset($activeItem) && $activeItem == 2)
    echo '<li class="active">Lezioni</li>';

else {
    echo '<li><a href="lezioni.php" tabindex="' . $tabindexCounter . '">Lezioni</a></li>';
    $tabindexCounter++;
}

if (isset($activeItem) && $activeItem == 3)
    echo '<li class="active">Esami</li>';

else {
    echo '<li><a href="esami.php" tabindex="' . $tabindexCounter . '">Esami</a></li>';
    $tabindexCounter++;
}


if (isset($activeItem) && $activeItem == 4)
    echo '<li class="active">Contatti</li>';

else { 
    echo '<li><a href="contatti.php" tabindex="' . $tabindexCounter . '">Contatti</a></li>';
    $tabindexCounter++;
}

echo '</ul></div>';

?>