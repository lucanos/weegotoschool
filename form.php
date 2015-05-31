<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>myapp</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="stylesheet" type="text/css" href="forms.css" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Play" />
    </head>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
    <script type="text/javascript" src="events.js"></script>

    <body>
      <div id="container">
        <div id="header">
        <div id="banner"></div>
        <div id="title"><h1>Entraide Ecole</h1></div>
        <div id="intro">
            السلام عليكم 
            <br/>
            Besoin d'aide pour emmener ou récupérer vos enfants à l'école ? Personne pour s'en occuper le mercredi ou pendant les vacances scolaires? Vous avez besoin d'un coup de main pour le repas de midi quelques jours par semaine? Vous avez peut-être besoin d'aide pour les devoirs? D'autres parents sont certainement dans le même cas que vous! Pourquoi ne pas s'entraider entre parents de l'école? Ce formulaire à pour but de vous aider à vous mettre en relation des parents proches de votre lieu de résidence ou de travail, et vous aider à trouver des solutions pour le myapp, la garde, la cantine et les devoirs de vos enfants.
        </div>
      </div>

       <div id="content" class="container">
        <div id="form">
          <form action="form.php" method="post">
            <div class="formLayout">
              <label for="name">Vos nom et prénoms</label><input id="name" name="name">
              <label for="parente">Lien de parenté</label>
              <select id="parente" name="parente">
                  <option>Mère</option><option>Père</option><option>Grand-Mère</option><option>Grand-Père</option>
                  <option>Tante maternelle</option><option>Oncle maternel</option><option>Tante paternelle</option><option>Oncle paternel</option>
                  <option>Voisine ou amie des parents</option><option>Voisin ou amie des parents</option>
              </select>
              <br>
              <label for="email">Adresse e-mail</label><input id="email">
              <label for="telephone">N° téléphone</label><input id="telephone">
              <br>
              <label for="childFirstname">Noms et prénoms des enfants</label><input id="childFirstname" name="childFirstname">
              <label for="childrenNumber">Nombre d'enfants</label>
              <select id="childrenNumber" name="childrenNumber">
                  <option>1</option><option>2</option><option>3</option><option>4</option>
                  <option>5</option><option>6</option>
              </select>
              <br>
              <label for="childrenGrades">Classes des enfants</label>
              <label for="PS">PS</label><input id="PS" name="childrenGrades" type="checkbox">
              <label for="MS">MS</label><input id="MS" name="childrenGrades" type="checkbox">
              <label for="GS">GS</label><input id="GS" name="childrenGrades" type="checkbox">
              <label for="CP">CP</label><input id="CP" name="childrenGrades" type="checkbox">
              <label for="CE1">CE1</label><input id="CE1" name="childrenGrades" type="checkbox">
              <label for="CE2">CE2</label><input id="CE2" name="childrenGrades" type="checkbox">
              <label for="CM1">CM1</label><input id="CM1" name="childrenGrades" type="checkbox">
              <label for="CM2">CM2</label><input id="CM2" name="childrenGrades" type="checkbox">
              <br>
              <br>
              <br>
              <label for="address">Adresse résidence (approximative)</label><input id="address">
              <label for="zip">CP</label><input id="zip">
              <label for="city">Ville</label><input id="city"><br>

              <label for="address">Adresse travail (approximative)</label><input id="address">
              <label for="zip">CP</label><input id="zip">
              <label for="city">Ville</label><input id="city"><br>

              <label for="address">Autre Adresse (approximative)</label><input id="address">
              <label for="zip">CP</label><input id="zip">
              <label for="city">Ville</label><input id="city"><br>
              <br>
              <br>
              <br>

              <label>Je cherche de l'aide pour : </label>
              <label for="Lu">Lu</label>
              <label for="Ma">Ma</label>
              <label for="Me">Me</label>
              <label for="Je">Je</label>
              <label for="Ve">Ve</label>
              <label>Je propose de l'aide pour : </label>
              <label for="Lu">Lu</label>
              <label for="Ma">Ma</label>
              <label for="Me">Me</label>
              <label for="Je">Je</label>
              <label for="Ve">Ve</label>
              <br>
              <label>Covoiturage/pedibus</label>
              <input type="checkbox" id="cherheCovoiturageLu" name="cherheCovoiturageLu" >
              <input type="checkbox" id="cherheCovoiturageMa" name="cherheCovoiturageMa" >
              <input type="checkbox" id="cherheCovoiturageMe" name="cherheCovoiturageMe" >
              <input type="checkbox" id="cherheCovoiturageJe" name="cherheCovoiturageJe" >
              <input type="checkbox" id="cherheCovoiturageVe" name="cherheCovoiturageVe" >
              <label>Covoiturage/pedibus</label>
              <input type="checkbox" id="proposeCovoiturageLu" name="proposeCovoiturageLu" >
              <input type="checkbox" id="proposeCovoiturageMa" name="proposeCovoiturageMa" >
              <input type="checkbox" id="proposeCovoiturageMe" name="proposeCovoiturageMe" >
              <input type="checkbox" id="proposeCovoiturageJe" name="proposeCovoiturageJe" >
              <input type="checkbox" id="proposeCovoiturageVe" name="proposeCovoiturageVe" >
              <br>
              <label for="cantineDays">Cantine</label>
              <input type="checkbox" id="chercheCantineLu" name="chercheCantineLu" >
              <input type="checkbox" id="chercheCantineMa" name="chercheCantineMa" >
              <input type="checkbox" id="chercheCantineMe" name="chercheCantineMe" >
              <input type="checkbox" id="chercheCantineJe" name="chercheCantineJe" >
              <input type="checkbox" id="chercheCantineVe" name="chercheCantineVe" >
              <label for="cantineDays">Cantine</label>
              <input type="checkbox" id="proposeCantineLu" name="proposeCantineLu" >
              <input type="checkbox" id="proposeCantineMa" name="proposeCantineMa" >
              <input type="checkbox" id="proposeCantineMe" name="proposeCantineMe" >
              <input type="checkbox" id="proposeCantineJe" name="proposeCantineJe" >
              <input type="checkbox" id="proposeCantineVe" name="proposeCantineVe" >
              <br>
              <label for="garderieDays">Garderie</label>
              <input type="checkbox" id="chercheGarderieLu" name="chercheGarderieLu" >
              <input type="checkbox" id="chercheGarderieMa" name="chercheGarderieMa" >
              <input type="checkbox" id="chercheGarderieMe" name="chercheGarderieMe" >
              <input type="checkbox" id="chercheGarderieJe" name="chercheGarderieJe" >
              <input type="checkbox" id="chercheGarderieVe" name="chercheGarderieVe" >
              <label for="garderieDays">Garderie</label>
              <input type="checkbox" id="proposeGarderieLu" name="proposeGarderieLu" >
              <input type="checkbox" id="proposeGarderieMa" name="proposeGarderieMa" >
              <input type="checkbox" id="proposeGarderieMe" name="proposeGarderieMe" >
              <input type="checkbox" id="proposeGarderieJe" name="proposeGarderieJe" >
              <input type="checkbox" id="proposeGarderieVe" name="proposeGarderieVe" >
              <br>
              <label for="devoirDays">Devoirs</label>
              <input type="checkbox" id="chercheDevoirsLu" name="chercheDevoirsLu" >
              <input type="checkbox" id="chercheDevoirsMa" name="chercheDevoirsMa" >
              <input type="checkbox" id="chercheDevoirsMe" name="chercheDevoirsMe" >
              <input type="checkbox" id="chercheDevoirsJe" name="chercheDevoirsJe" >
              <input type="checkbox" id="chercheDevoirsVe" name="chercheDevoirsVe" >
              <label for="devoirDays">Devoirs</label>
              <input type="checkbox" id="proposeDevoirsLu" name="proposeDevoirsLu" >
              <input type="checkbox" id="proposeDevoirsMa" name="proposeDevoirsMa" >
              <input type="checkbox" id="proposeDevoirsMe" name="proposeDevoirsMe" >
              <input type="checkbox" id="proposeDevoirsJe" name="proposeDevoirsJe" >
              <input type="checkbox" id="proposeDevoirsVe" name="proposeDevoirsVe" >
              <br>
              <label for="vacancesDays">Vacances</label>
              <input type="checkbox" id="chercheGardeVacancesLu" name="chercheGardeVacancesLu" >
              <input type="checkbox" id="chercheGardeVacancesMa" name="chercheGardeVacancesMa" >
              <input type="checkbox" id="chercheGardeVacancesMe" name="chercheGardeVacancesMe" >
              <input type="checkbox" id="chercheGardeVacancesJe" name="chercheGardeVacancesJe" >
              <input type="checkbox" id="chercheGardeVacancesVe" name="chercheGardeVacancesVe" >
              <label for="vacancesDays">Vacances</label>
              <input type="checkbox" id="proposeGardeVacancesLu" name="proposeGardeLu" >
              <input type="checkbox" id="proposeGardeMa" name="proposeGardeMa" >
              <input type="checkbox" id="proposeGardeMe" name="proposeGardeMe" >
              <input type="checkbox" id="proposeGardeJe" name="proposeGardeJe" >
              <input type="checkbox" id="proposeGardeVe" name="proposeGardeVe" >
              <br>
              <br>
              <br>
              <br>
              
              <br>
              <label></label><label></label>
              <label for="submit"></label><input type="submit" id="submit" name="submit" value="Envoyer" id="ss-submit" class="jfk-button jfk-button-action "><br>
             </div>
           </form>
       </div>
       <div id="footer">
       </div>
      </div>
    </body>

</html>
