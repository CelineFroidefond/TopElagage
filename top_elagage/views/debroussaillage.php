<main class="main_container">
    <section class="service">
        <article class="service_description">
            <h1>Débroussaillage ou débrousaillement, à Fabrègues</h1>
            <p>
                Le débroussaillage, aussi appelé débroussaillement, est l'une des prestations de Top Élagage, avec l'entretien de parcs et jardins et les travaux d'élagage. Quel que soit le type de terrain, sa configuration et les végétaux concernés (ronces, broussailles, arbustes, arbres...), son équipe intervient avec efficacité et professionnalisme.
            </p>
            <p>
                L'entreprise effectue pour vous les travaux de débroussaillage de votre terrain, une obligation légale pour éviter la propagation de feux. Étant prestataire de service à la personne, l'intervention de Top Élagage vous permet de prétendre à une réduction ou un crédit d'impôt (cf . <a href="https://www.legifrance.gouv.fr/affichCodeArticle.do;jsessionid=81B46F193DE4B0E4A8401E0E384EFF4C.tpdjo14v_3?idArticle=LEGIARTI000022517721&cidTexte=LEGITEXT000006069577&dateTexte=20101025" target="_blank">article 199 sexdecies du Code Général des Impôts</a>). Cette aide s'élève à 50% du montant total des dépenses engagées, avec un plafond de 3 000 € par an et par foyer. 
            </p>
        </article>
    </section>
    <section class="gallery">
        <h1>Quelques réalisations :</h1>
        <?php foreach($pictures as $picture): ?>
            <div class="gallery_items">
                <legend class="img_legend"> <?= $picture["name"]?> </legend>
                <img class="service_img" src="<?= $picture["path"]?>"/>
            </div>
        <?php endforeach ?>
    </section>
</main>