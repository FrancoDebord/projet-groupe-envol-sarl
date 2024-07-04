<div class="row">
    <div class="col-12">
        <form action="">
            @csrf

            <div class="row">
                <div class="col-12 col-md-10 offset-md-1" id="div_consentement">
                    <h2 class="text-center mt-4">Formulaire de consentement pour l’immigration et le recrutement</h2>
                    
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>DECLARATION</th>
                                <th>Veuillez cocher chaque case</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>La note d’information a été claire et compréhensible et 
                                    est écrite dans une langue que je maîtrise bien. J’ai eu la possibilité de réfléchir
                                     aux informations, de poser des questions et d’obtenir une réponse complète.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control" data-size ="lg" data-offstyle="danger" data-width="80" data-height="20"  data-style="android" data-onstyle="info" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" name="consentements_options[]"/>
                                </td>
                            </tr>

                            <tr>
                                <td >
                                    Je comprends que c’est moi-même qui ai décidé de me faire
                                     représenter par le Groupe Envol SARL en sa qualité de Représentant en immigration et  recrutement.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control"  data-size ="lg" data-offstyle="danger" data-width="80" data-height="20" data-style="android" data-onstyle="info" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON"" name="consentements_options[]"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Je comprends que la procédure d’immigration et de recrutement implique quatre (4) frais que je dois complètement 
                                    solder avant la collecte de mes données biométriques auprès des centres agréés.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control"  data-width="80" data-offstyle="danger" data-height="20" data-style="android" data-onstyle="info" data-size ="lg" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" name="consentements_options[]"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Je comprends que si j’arrête moi-même la procédure d’immigration 
                                    en cours pour une quelconque raison, je ne serai remboursé d’aucun frais.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control" data-width="80" data-height="20" data-offstyle="danger"  data-style="android" data-onstyle="info" data-size ="lg" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" name="consentements_options[]"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Je comprends que mes informations personnelles peuvent être transférées par 
                                    <a href="mailto:info@groupeenvol.org">info@groupeenvol.org</a> ou en main propre à mon employeur
                                     après mon recrutement, à une ambassade ou un consulat pour l’obtention de visa.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control" data-width="80" data-height="20" data-offstyle="danger" data-style="android" data-onstyle="info" data-size ="lg" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" name="consentements_options[]"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Je donne mon accord à <strong>TOUT</strong> ce qui est écrit dans la note d’information.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control" data-width="80" data-height="20" data-offstyle="danger" data-style="android" data-onstyle="info" data-size ="lg"  data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" name="consentements_options[]"/>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Je consens que mes données personnelles soient collectées et conservées aux fins d’immigration et de recrutement.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control" data-width="80" data-height="20" data-offstyle="danger" data-style="android" data-onstyle="info" data-size ="lg" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" name="consentements_options[]"/>
                                </td>
                            </tr>

                        </tbody>
                        
                    </table>

                    <div class="w-100 mt-3">
                        <div class="form-group-sm">
                            <label for="nom_prenom_consentement">
                                <strong>Veuillez entrer votre Nom et Prénom pour la signature du consentement</strong>
                            </label>
                            <input type="text" name="nom_prenom_consentement" class="form-control" required placeholder="Nom & Prénom"/>
                        </div>
                    </div>

                    <table class="table table-bordered mt-2">
                      <thead>
                        <tr>
                            <th>Noms et Prénoms du requérant principal</th>
                            <th>Date (jj/mm/aaaa)</th>
                            <th>Signature</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-10 offset-md-1 mt-4 text-center">
                    <button type="submit" class="btn btn-outline-info" id="download-consentement-suivant">
                        <i class="fa fa-download">&nbsp;</i>
                        Valider pour signer le consentement & Continuer
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>