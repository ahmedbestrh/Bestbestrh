<?php

 $titre = $_POST['title'];
 $desc = $_POST['describe'];
 $prof = $_POST['profil'];
 $titre = str_replace(' ', '<SP>', $titre);
 $desc = str_replace(' ', '<SP>', $desc);
 $search = array("\n","\r");
 $desc = str_replace("\r\n", '<BR>', $desc);
 $prof = str_replace(' ', '<SP>', $prof);
 $prof = str_replace("\r\n", '<BR>', $prof);
 $inF = fopen('file.iim', 'w');
 fputs($inF, "VERSION BUILD=1001 RECORDER=CR\n");
if(isset($_POST['1'])){ // si formulaire soumis
echo $titre;

fputs($inF, "TAB OPEN\nTAB T=2\nURL GOTO=chrome://newtab/\n");
fputs($inF, "URL GOTO=http://avi.ma/creer-annonce\n");
fputs($inF, "TAG POS=1 TYPE=FIELDSET FORM=ID:createAd-1 ATTR=TXT:Catégorie<SP>*<SP>Sélectionnez<SP>une<SP>catégorie<SP>INFORM*\nTAG POS=1 TYPE=SELECT FORM=ID:createAd-1 ATTR=ID:parent CONTENT=%11\nTAG POS=1 TYPE=SELECT FORM=ID:createAd-1 ATTR=ID:category CONTENT=%64\nTAG POS=1 TYPE=INPUT:RADIO FORM=ID:createAd-1 ATTR=ID:ad_type2\n");
fputs($inF, "TAG POS=1 TYPE=INPUT:TEXT FORM=ID:createAd-1 ATTR=ID:title CONTENT={$titre}\n");
fputs($inF, "TAG POS=1 TYPE=TEXTAREA FORM=ID:createAd-1 ATTR=ID:description CONTENT={$desc}<BR><BR>{$prof}\n");
fputs($inF, "TAG POS=1 TYPE=SELECT FORM=ID:createAd-1 ATTR=ID:new CONTENT=%1\n");
fputs($inF, "TAG POS=1 TYPE=INPUT:TEXT FORM=ID:createAd-1 ATTR=ID:price CONTENT=3500\n");
fputs($inF, "TAG POS=2 TYPE=DIV ATTR=TXT:Négociable\n");
fputs($inF, "TAG POS=1 TYPE=INPUT:CHECKBOX FORM=ID:createAd-1 ATTR=ID:seller_phone_hidden CONTENT=YES\n");
fputs($inF, "TAG POS=1 TYPE=SELECT FORM=ID:createAd-1 ATTR=ID:location CONTENT=%MA.47\n");
fputs($inF, "TAG POS=1 TYPE=SELECT FORM=ID:createAd-1 ATTR=ID:city CONTENT=%2542997\n");
}
if(isset($_POST['2'])){ // si formulaire soumis
echo $titre;
fputs($inF, "Titre: {$titre} \n\nDescription : {$desc}\n\nProfil : {$prof} \n\n\n\n");
}
if(isset($_POST['3'])){ // si formulaire soumis
echo $titre;
fputs($inF, "Titre: {$titre} \n\nDescription : {$desc}\n\nProfil : {$prof} \n\n\n\n");
}
fclose($inF);
?>