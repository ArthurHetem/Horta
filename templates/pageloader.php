<?php 
$frase1 = "Regando Horta...";
$frase2 = "Plantando Abacate...";
$frase3 = "Podando Folhas...";

$frases = array($frase1, $frase2, $frase3);

?>
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p><?php echo $frases[array_rand($frases)];?></p>
        </div>
    </div>