<div class="card my-4">
    <div class="card-body">
        <h5 class="card-header">Me contacter</h5>
             <p>Si vous souhaitez plus d'informations ou que vous souhaitez me proposer une offre, vous pouvez m'envoyer un message.</p>
                    <div class="input-group">
                        <div class="contact">
                            <form action="index.php?action=contact" method="post">
                                <div>
                                    <label for="name">Nom :</label>
                                    <input type="text" name="name" id="name"/>
                                    <div id="error-message"></div>
                                </div>
                                <div>
                                    <label for="email">Email :</label>
                                    <input type="text" name="email" id="email"/>
                                    <div id="error-message"></div>
                                </div>
                                <div>
                                    <label for="message">Votre message :</label>
                                    <textarea name="message" id="message"></textarea>
                                    <div id="error-message"></div>
                                </div>

                                <div>
                                    <div class="g-recaptcha" data-sitekey="6LdP83kUAAAAAEoMrKqqgXlgzAtO8Joce1fHsL9h"></div>
                                    <button type="submit" class="btn btn-primary">Envoyer le message</button>
                                </div>
                            </form>
                        </div>
                </div>
    </div>
</div>