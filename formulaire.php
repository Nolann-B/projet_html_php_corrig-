<?php require "public/header.html.php"; ?>

<hr>

<main>
    <div id="main">

        <div id="titre_form">
            <h2>FORMULAIRE</h2>
        </div>

        <div id="form">
            <form action="get">

                    <div class="mid_size left">

                        <div class="padding">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" id="pseudo" name="pseudo" value=""> 
                        </div>

                        <div class="padding">
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" value=""> 
                        </div>

                        <div class="padding">
                            <label for="mot de passe">Mot de passe</label>
                            <input type="password" id="mot de passe" name="mot de passe" value=""> 
                        </div>

                        <div class="padding">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="">
                        </div>

                    </div>

                    <div class="left">

                        <div class="padding">
                            <label for="fichiers">CV</label>
                            <input type="file" id="fichiers" name="fichiers">
                        </div>
                        

                        <br>
                    </div>

                    <div id=checkbox>
                        <p>Quel sont vos fruits préférés ?</p>
                        <label for="orange">Orange</label>
                        <input type="checkbox" id="orange" name="orange"value="">
                        <label for="fraise">Fraise</label>
                        <input type="checkbox" id="fraise" name="fraise"value="">
                        <label for="poire">Poire</label>
                        <input type="checkbox" id="poire" name="poire"value="">
                        <br>
                    </div>

                    <div class="mid_size left">

                        <div class="padding">
                            <label for="code_p">Code Postal </label>
                            <input type="text" name="code_p" id="code_p">
                        </div>
                        
                    </div>

                    <div class="left">

                        <div class="padding text_area">
                            <label for="text">Message</label>
                            <textarea name="Message" id="text" rows="4"></textarea>
                            <br>
                        </div>
                        
                        <input id="padding2" type="submit" value="Envoyer"><input type="reset">
                    </div>


            </form>
        </div>
    </div>
</main>

<?php require "public/footer.html.php";?>