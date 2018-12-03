<div class="card my-4">
    <div class="card-body">
        <h5 class="card-header">Me contacter</h5>
             <p>Si vous souhaitez plus d'informations ou que vous souhaitez me proposer une offre, vous pouvez m'envoyer un message.</p>
                    <div class="input-group">
                        <div class="contact">
                            <form action="index.php?action=contact" method="post">
                                <div class="form-group">
                                    <label>Nom :</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom"  required>
                                    <div id="error-message"></div>
                                </div>
                                <div class="form-group">
                                    <label>Email :</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Votre email"  required>
                                    <div class="error-message"></div>
                                </div>
                                <div class="form-group">
                                    <label>Votre message : </label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Votre message" rows="10" required></textarea>
                                    <div class="error-message"></div>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary">Envoyer le message</button>
                                </div>
                            </form>
                        </div>
                </div>
    </div>
</div>