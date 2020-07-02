<?php
$panier = [
    $tableau1 = array ('T-shirt rouge'=> ['15.50' ,'5']),
    $tableau2 = array ('T-shirt vert'=> ['15.50' ,'6']),
    $tableau3 = array ('T-shirt argent'=> ['15.50' ,'8']),
    $tableau4 = array ('T-shirt bleu'=> ['16.50' ,'5']),
    $tableau5 = array ('T-shirt vert'=> ['19.99' ,'5']),
    $tableau6 = array ('T-shirt argent'=> ['19.99' ,'10']),
    $tableau7 = array ('T-shirt argent'=> ['35' ,'3'])

    $panier = array ($tableau1, $tableau2, $tableau3, $tableau4, $tableau5, $tableau6, $tableau7)

function afficher_panier ($panier){
    $prix ("15.50","15.50","15.50","16.50","19.99","19.99","35"){
    foreach ($panier as $article ){
        
    foreach ($article as $value ){
        echo ($value);
    }

}
echo"<ul>
<li>T-shirt rouge</li>
<li>15.50</li>
<li> 5 </li>
</ul>
<ul>
<li>T-shirt vert</li>
<li> 15.50 </li>
<li> 6 </li>
</ul>
<ul>
<li>T-shirt argent</li>
<li>15.50 </li>
<li> 8 </li>
</ul>
<ul>
<li> T-shirt bleu</li>
<li>16.50</li>
<li>5</li>
</ul>
<ul>
<li>T-shirt vert</li>
<li>'19.99'</li>
<li>5</li>
</ul>
<ul>
<li>T-shirt argent</li>
<li>19.99</li>
<li>10</li>
</ul>
echo "<ul>
<li>T-shirt argent</li>
<li>35</li>
<li>3</li>
</ul>"s
