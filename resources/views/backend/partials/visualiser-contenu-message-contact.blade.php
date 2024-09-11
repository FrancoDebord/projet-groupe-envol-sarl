<!-- Modal -->
<div class="modal fade" id="modal_visualiser_detail_contenu_message_contact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modal_visualiser_detail_contenu_message_contact_label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header " style="background-color: #c10202">
                <h5 class="modal-title fs-5 " id="modal_visualiser_detail_contenu_message_contact_label" style="color: white">Voir le contenu du message
                </h5>
                <button type="button" class="btn-close close-modal " data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 mt-2" >
                       <strong>Nom & Prénom : </strong> <span id="contact_name"></span>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mt-2" >
                        <strong>Email : </strong> <span id="contact_email"></span>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mt-2" >
                        <strong>Date & Heure : </strong> <span id="date_heure_contact"></span>
                    </div>

                    <div class="col-12 mt-3">
                        <p class="alert alert-light" id="contact_message"></p>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-modal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
