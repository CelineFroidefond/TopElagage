
<main class="main_container">
        <section class="company_description">

            <article class="carousel_container">
                <i class="fas fa-arrow-left" id="prevBtn"></i>
                <i class="fas fa-arrow-right" id="nextBtn"></i>
                <div class="carousel_slide">
                    <img src="../public/assets/img/carousel/carousel5.png" id="lastClone" alt="slide 5 slider, travail dans l'arbre"/>
                    <img src="../public/assets/img/carousel/carousel1.png" alt="slide 1 slider, travail dans l'arbre"/>
                    <img src="../public/assets/img/carousel/carousel2.png" alt="slide 2 slider, jardin"/>
                    <img src="../public/assets/img/carousel/carousel3.png" alt="slide 3 slider, debroussaillage"/>
                    <img src="../public/assets/img/carousel/carousel4.png" alt="slide 4 slider, haie"/> 
                    <img src="../public/assets/img/carousel/carousel5.png" alt="slide 5 slider, travail dans l'arbre"/>
                    <img src="../public/assets/img/carousel/carousel1.png" id="firstClone" alt="slide 1 slider, travail dans l'arbre"/>
                </div>
            </article>

            <article class="description1">
                <p>
                    C'est en 1992 que Top Élagage voit le jour, sous la forme d'une entreprise artisanale et familiale installée à Fabrègues. Spécialistes de l'élagage, l'abattage, le débroussaillage, le dessouchage et de l'entretien des parcs et jardins, ses professionnels qualifiés œuvrent chez les particuliers et les professionnels, mais travaillent aussi beaucoup avec les collectivités publiques (Conseil départemental, municipalités...) et avec EDF.
                <p>
                <br>
                <p> 
                    
                    Équipée de matériel de qualité (nacelle, broyeur, camion, cordage et harnais...), cette équipe de professionnels se déplace dans l'Hérault, mais aussi dans le Gard et l'Aveyron. Expérimentée et qualifiée, elle s'adapte à toutes les situations, pour un chantier réalisé en toute sécurité.
                </p>
            </article>

        </section>
        <section class="blank_div">
            <div class="our_assets">
                        <h1>Nos plus :</h1>
                        <article class="our_assets_details">
                            <div class="assets">
                                <i class="fas fa-comment-medical assets_icone"></i>
                                <h1>Conseils personnalisés</h1>
                            </div>
                            <div class="assets">
                                <i class="fas fa-stopwatch assets_icone"></i>
                                <h1>Grande réactivité et ponctualité</h1>
                            </div>
                            <div class="assets">
                                <i class="fas fa-address-card assets_icone"></i>
                                <h1>Mise en relation avec un créateur paysagiste</h1>
                            </div>
                        </article>
            </div>
        </section>
        <section class="bottom_home_container">
                    

                    <section class="company_description">
                        <article class="description2">
                            <p class="description2_p">
                                D'avantage travaux que de simples services d'élagage, l'entreprise vous accompagne dans votre projet et propose études et conseils personnalisés pour vos espaces verts. Passion et compétences techniques sont les moteurs de son équipe, laquelle assure avec professionnalisme tous vos travaux d'entretien de parcs et de jardins.
                            <p>
                            <br><hr>
                            <article class="contact_proposal"> 
                               <p> Contactez Top Élagage pour profiter de ses conseils en abattage, débroussaillage ou entretien de jardins.</p>
                               <a href="contact"><button class="button">Obtenir un devis gratuit</button></a>
                            </article>
                        </article>
                    </section>      

                    <aside class="home_aside">
                        <h1>Votre avis compte beaucoup pour nous !</h1>
                        <a href="review" class="review_link"> Déposer un avis</a>
                        
                        <article class="company_location">
                            <h1>Nous situer</h1>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92496.41089541497!2d3.7372013679741154!3d43.57505186246283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6b2cf99b2c3ed%3A0x91e5bcee12b02554!2sChemin+des+Romains!5e0!3m2!1sfr!2sfr!4v1564663042409!5m2!1sfr!2sfr" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </article>

                    </aside>
        </section>

        
    </main> 

    <section class="client_review">
            <?php foreach(array_slice($comments, -3, 4, true) as $comment): ?>
                <article class="client_review_posts">
                        <p class="review_content"><?= $comment["content"]?></p>
                        <p class="review_author"><?= $comment["author"]?></p>
                        <p class="review_date"><?= $comment["published_at"]?></p>
                </article> 
            <?php endforeach ?>   
    </section>
<script src="../public/assets/scripts/carousel.js"></script>
<script src="../public/assets/notation.js"></script>
