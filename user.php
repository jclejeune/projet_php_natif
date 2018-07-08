<?php
require_once './inc/header.php';
?>

    <div class="container contenu">

        <h2 class=" m-0 mt-2 py-2 text-center">Inscrivez-vous</h2>
        <h4 class="pb-4 text-center"> et<br>recevez votre badge directement<br>sur votre smartphone!</h4>

        <form>
                <div class="col-md-6 offset-md-3 form-group">
                    <div class="form-check pb-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Madame
                        </label>
                    </div>
                    <div class="form-check pb-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Monsieur
                        </label>
                    </div>
                </div>
            
                <div class="form-group col-md-6 offset-md-3">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom">
                </div>

                <div class="form-group col-md-6 offset-md-3">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Nom">
                </div>   

                <div class="form-group col-md-6 offset-md-3">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Numéro de téléphone">
                </div>      
            
                <div class="form-group col-md-6 offset-md-3">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Numéro de portable">
                </div>

                <div class="form-group col-md-6 offset-md-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>

                <div class="form-group col-md-6 offset-md-3">
                    <input type="text" class="form-control" id="password" name="password" placeholder="Mot de passe">
                </div>

                <div class="form-group col-md-6 offset-md-3">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Société">
                </div>

                <div class="form-group col-md-6 offset-md-3">
                    <select name="poste" class="form-control">
                        <option value="" selected="selected">Fonction / Service*</option>
                        <option value="PDG-DG-Gerant"> PDG-DG-Gérant</option>
                        <option value="Dir/Resp Commercial"> Dir/Resp Commercial</option>
                        <option value="Dir/Resp des Achats"> Dir/Resp des Achats</option>
                        <option value="Dir/Resp Export"> Dir/Resp Export</option>
                        <option value="Dir/Resp Finance-Compta-Gestion"> Dir/Resp Finance-Compta-Gestion</option>
                        <option value="Dir/Resp Formation"> Dir/Resp Formation</option>
                        <option value="Dir/Resp Informatique"> Dir/Resp Informatique</option>
                        <option value="Dir/Resp Juridique"> Dir/Resp Juridique</option>
                        <option value="Dir/Resp Logistique"> Dir/Resp Logistique</option>
                        <option value="Dir/Resp Marketing-Communication"> Dir/Resp Marketing/Communication</option>
                        <option value="Dir/Resp Ressources Humaines"> Dir/Resp Ressources Humaines</option>
                        <option value="Dir/Resp Securite"> Dir/Resp Sécurité</option>
                        <option value="Dir/Resp Services Generaux"> Dir/Resp Services Généraux</option>
                        <option value="Dir/Resp Technique - Production"> Dir/Resp Technique / Production</option>
                        <option value="Service Achats"> Service Achats</option>
                        <option value="Service Commercial"> Service Commercial</option>
                        <option value="Service Direction Generale"> Service Direction Générale</option>
                        <option value="Service Export"> Service Export</option>
                        <option value="Service Finance-Compta-Gestion"> Service Finance-Compta-Gestion</option>
                        <option value="Services Generaux"> Services Généraux</option>
                        <option value="Service Informatique"> Service Informatique</option>
                        <option value="Service Juridique"> Service Juridique</option>
                        <option value="Service Logistique"> Service Logistique</option>
                        <option value="Service Marketing-Communication"> Service Marketing/Communication</option>
                        <option value="Service Ressources Humaines"> Service Ressources Humaines</option>
                        <option value="Service Technique-Production"> Service Technique / Production</option>
                        <option value="Architecte - Bureau Etude"> Architecte - Bureau d'étude</option>
                        <option value="Prof. Juridique et reglementee"> Prof. Juridique et réglementée</option>
                        <option value="Prof. Lib-Consultant"> Prof. Lib-Consultant</option>
                        <option value="Elu-Maire"> Elu/Maire</option>
                        <option value="Comite Entreprise"> Comité d'entreprise</option>
                        <option value="Autres"> Autres</option>				
                    </select>
                </div>
         
        </form>
        <div class="col-md-6 offset-md-3 mb-4">
            <a class="text-campus" href="#top"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>
<?php
require_once './inc/footer.php';
?>
