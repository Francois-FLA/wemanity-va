<!DOCTYPE html>
<html lang="en">
<?php
    print_r($_POST);
?>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap.css" >
    <link rel="stylesheet" href="style.css">  
      
  </head>
    
  <body>
      
              
      
      <nav class="navbar navbar-toggleable-xl navbar-inverse bg-primary">
          <a class="navbar-brand" href="http://www.wemanity.com/fr/index.html">
                <img src="wemlogo.png" width="40" height="30" class="d-inline-block align-top" alt="">
                emanity
          </a>
          <div class="collapse navbar-collapse  justify-content-center" id="navbarText">
            
            <span class="navbar-text">
              <h1>Synthèse de validation technique / Agile</h1>
            </span>
          </div>
        </nav>
      <hr class="bg-info">
      
<!--          Informations générales-->
      <div class="bg-primary text-white">
      <div id="block1" class="media  bg-primary text-white">
      
      <div id="infos1" class="media-body container bg-primary text-white">
          <br>
          <form method="post" id="infosInput">     
              <div class="form-group">
                  <label for="candidat-name" class="">Candidat :</label>
                  <div class="">
                    <input class="form-control" type="text" id="candidat-name" name="candidat-name">
                  </div>
              </div>
              <div class="form-group">
                  <label for="candidat-skills" class="">Technologie / Méthodologie évaluée :</label>
                  <div class="">
                    <input class="form-control" type="text" id="candidat-skills" name="candidat-skills">
                  </div>
              </div>
              <div class="form-group">
                  <label for="candidat-val" class="">Coopérateur :</label>
                  <div class="">
                    <input class="form-control" type="text" id="candidat-val" name="candidat-val">
                  </div>
              </div>
            </form>
        </div>
      
      <div id="infos2" class="d-flex align-self-center mr-3 bg-primary text-white">
          
          <div class="form-group">
              <form method="post" name="dateVaVt" id="dateVaVt">
              <label for="dateVa" class="">Date :</label>
              <div class="">
                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="dateVa" name=" dateVa">
              </div>
              </form>
            </div>
          
      </div>
    </div>
          <br>
<hr class="bg-info">
    </div>
    
<!--      Section 2-->
      
    <div class=" bg-primary text-white">
    <div class="container  bg-primary text-white">      
        <br>        
        <h4 class="sectionTitle">Récapitulatif : Technologies / Agilité</h4>        
        <br>
            <form method="post" name="skills">
                
                <div class="form-group row">
                    <label class="col-3 col-form-label" for="textTechno">Technologies / Agilité :</label>
                    <div class="col-9">
                        <textarea class="form-control" id="textTechno" rows="3" name="techno"></textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-3 col-form-label" for="textManquements">Manquements :</label>
                    <div class="col-9">
                        <textarea class="form-control" id="textManquements" rows="3" name="manquements"></textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-3 col-form-label" for="textConnaissances">Connaissances pratiques :</label>
                    <div class="col-9">
                        <textarea class="form-control" id="textConnaissances" rows="3" name="connaissances"></textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-3 col-form-label" for="textPotentiel">Potentiel :</label>
                    <div class="col-9">
                        <textarea class="form-control" id="textPotentiel" rows="3" name="potentiel"></textarea>
                    </div>
                </div>  
                
            </form> 
        
    </div>
      <br>
        
        <hr class="bg-info">
    </div>
      
<!--      Section 3 : commentaires-->
      <div class="bg-primary text-white">
      <div class="container bg-primary text-white">      
        <br>        
        <h4 class="sectionTitle">Commentaires et Avis</h4> 
        <br>
          
          <form method="post" name="comments">
            <div class="form-group">
                <textarea class="form-control" id="comment" rows="7" name="comment"></textarea>
              </div>
          
          
          </form>
      </div>
    <br>
        <hr class="bg-info">
          <br>
    </div>
          
          
<!--      envoyer à un recruteur-->
      
      <div id="btnSection" class="bg-primary text-white">
      <div class=" bg-primary text-white">
          <form class="form-inline justify-content-center" name="comment">
              <label class="mr-sm-2" for="inlineFormCustomSelect">Envoyer à </label>
              <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                <option selected>Choisissez</option>
                <option value="1">François LAFFON</option>
                <option value="2">Kevin CONTICELLO</option>
                <option value="3">Adrien PAQUEREAU</option>
                <option value="4">Yann CORITON</option>
              </select>
              <button id="submit" type="submit" class="btn btn-info" form="totalPage">Envoyer</button>
          </form>
          
      </div>
          <br>
          <hr class="bg-info">
          <br>
    </div>
      
<!--Copyright -->
      
    <div class="container-fluid row bg-primary text-info">
        <br>
        <div class="col-sm-4">
            <p class="copyText">WEMANITY</p>
        </div>
        <div class="col-sm-4">
            <p class="copyText">17 rue Bouchardon 75010 Paris</p>
        </div>
        <div class="col-sm-4">
            <p class="copyText">Document interne et confidentiel</p>
        </div>
    </div>
      
      
      
      
      


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="jquery.js" ></script>
    <script src="tether.min.js" ></script>
    <script src="bootstrap.js"></script>
      
    <script type="text/javascript">
        
        
        
      
      </script>
      
    
  </body>
</html>