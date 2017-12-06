<?pHp
$pseudo=readline("Choisissez votre nom :");
$class=readline("Choisissez une classe : Guerrier, Voleur ou Mage : ");
if ($class == "Guerrier" or $class=="guerrier"){
    $Hp = 20;
    $att = 5;
    $def=10;
}
elseif ($class == "Voleur" or $class=="voleur"){
    $Hp = 15;
    $att = 7;
    $def=2;
}
elseif ($class == "Mage" or $class=="mage"){
    $Hp = 15;
    $att = 10;
    $def = 5;
}
else {
    echo "Nous n\'avons pas cela en stock.\n";
}

// Un troll sauvage apparait
$TrollHp =10;
$trollDef=1;
$trollAtt=13;
// un gobelin
$GobHp= 7;
$GobAtt=11;
$GobDef=3;
if ($class=="Mage" or $class=="mage"or $class== "Guerrier" or $class=='guerrier' or $class=="Voleur" or $class=="voleur"){
echo "Vous avez choisi un ".$class."\nVous avez donc ".$Hp." points de vie.\n";
echo "Bienvenue dans le donjon.\n";
$nbCase=0;
sleep(2);


while($nbCase <= 55){
    if (($Hp)<=0) {
        echo "Le donjon a été plus fort que vous ".$pseudo." nous nous souviendrons de votre histoire.\n";
        exit;
    }
    if ($nbCase >= 50) {
       echo "Félicitations jeune ".$class."\n Le nom de ".$pseudo." est désormais synonyme de réussite.\n"; 
       exit;
    }
    if ($TrollHp < 0 ) {
        echo "C'est n'est pas l'heure du casse-croute !\n";
        $TrollHp=10;
        sleep(2);
    }
    if ($GobHp < 0 ) {
        echo "Félicitations, voici un ennemi de moins dans ce donjon.\n";
        $GobHp =7;
        sleep(2);

    }

    $rollDice = rand(1,6);
    $nbCase=($nbCase)+($rollDice);
    echo "Vous avancez de ".$rollDice." cases\n";
    echo "Vous avez parcouru ".$nbCase." cases.\n";
    echo "Il vous reste ".$Hp." points de vie.\n";
    $rollEvent =rand(1,20);
    sleep(2);
    
    if ($rollEvent >= 18){
     echo "Vous trouvez une bourse de piéces d'or au sol, quelle chance !\n";
     sleep(2);
    }
    elseif($rollEvent >= 13 && $rollEvent <= 17){
        echo "Une pierre se détache du plafond et manque de vous assomer.\n";
        echo "Vous perdez 1 points de vie.\n";
        $Hp=($Hp)-1;
        sleep(2);
    }
    elseif ($rollEvent>=7 && $rollEvent <=11 ){
        echo "Vous vous prenez les pieds dans le tapis, la chute vous fait perdre 2 points de vie\n";
        $Hp = ($Hp)-2;
        sleep(2);
    }
    elseif ($rollEvent <= 3) {
    echo "Malheur, un troll vous attendait...\n";
            
            sleep(2);

        while($Hp>0 && $TrollHp>0){
            $HitChance = rand(1,4);
            if($HitChance == 1){
                echo "Le trool et vous avez raté, vous n'êtes pas doué\n";
                sleep(2);
            }
           
            elseif($HitChance == 2){
                echo "Le troll vous a touché, mais vous l'avez raté\n";
                echo "vous perdez ".$HitMe." points de vie.\n";
                $HitMe=$trollAtt-$def;
                $Hp=($Hp)-$HitMe;
                echo "Il vous reste ".$Hp."\n";

                 sleep(2);
            }
            elseif($HitChance == 3){

                echo "Le troll vous a raté, mais vous l'avez touché.\n";
                $HitTroll=$att-$trollDef;
                echo "Vous infligez ".$HitTroll." de dégats.\n";
                $TrollHp=($TrollHp)-($HitTroll);
                echo "Le troll a encore ".$TrollHp."\n";
                 sleep(2);

            }
            elseif($HitChance == 4){
                echo "Quelle violence, vous avez frappé tout les deux\n";
                $HitTroll=$att-$trollDef;
                $TrollHp=($TrollHp)-($HitTroll);
                echo "Vous infligez ".$HitTroll." de dégats.\n";
                echo "Le troll a encore ".$TrollHp."\n";
                $HitMe=$trollAtt-$def;
                $Hp=($Hp)-$HitMe;
                echo "Et vous subissez ".$HitMe." dégats.\n";
                echo "Il vous reste ".$Hp."\n";
                 sleep(2);
            }
        }
    }
    
    elseif ($rollEvent >= 4 && $rollEvent <= 5) {
        echo"Malheur, un gobelin vous saute dessus...\n";
        sleep(2);

        while($Hp>0 && $GobHp>0){
            $HitChance = rand(1,4);
            if($HitChance == 1){
                echo "Le gobelin et vous avez raté, vous n'êtes pas doué\n";
                sleep(2);
            }
        elseif($HitChance == 2){

            echo "Le gobelin vous a touché, mais vous l'avez raté\n";
            $HitMe=$GobAtt-$def;
            $Hp=($Hp)-$HitMe;
            echo "Vous perdez ".$HitMe." points de vie.\n";
            echo "Il vous reste ".$Hp."\n";
            sleep(2);
        }
        elseif($HitChance == 3){

            echo "Le gobelin vous a raté, mais vous l'avez touché\n";
            $HitGob=$att-$GobDef;
            $GobHp=($GobHp)-$HitGob;
            echo "Vous infligez ".$HitGob." de dégats.\n";
            echo "Le gobelin a encore ".$GobHp."\n";
             sleep(2);

        }
        elseif($HitChance == 4){

            echo "Quelle violence, vous avez frappé tout les deux\n";
            $HitGob=$att-$GobDef;
            $GobHp=($GobHp)-$HitGob;
            echo "Vous infligez ".$HitGob." de dégats.\n";
            echo "Le gobelin a encore ".$GobHp."\n";
            $HitMe=$GobAtt-$def;
            $Hp=($Hp)-$HitMe;
            echo "Et vous subissez ".$HitMe." dégats.\n";
            echo "Il vous reste ".$Hp."\n";
             sleep(2);
        }
        }
        }
    
    
    else {
        echo "Un rat détale en vous voyant arriver.\n";
        echo "Il n'y a rien de spécial ici.\n";
        sleep(2);
    }
}
}
?>