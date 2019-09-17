<main class="main_container">
    <section class="service">
        <article class="service_description">
            <h1>Entretiens de parcs et de jardins à Fabrègues</h1>
            <p>
                Top Élagage, entreprise d'abattage et de débroussaillage à Fabrègues, propose aussi une prestation d'entretien d'espaces verts. Du grand parc au petit jardin, quelle que soit la configuration du terrain et les végétaux présents, son équipe dispose du matériel et des compétences lui permettant d'assurer les travaux paysagers voulus.
            </p>
            <p>
                Ses professionnels réalisent ainsi la tonte, la taille de haies, d'arbres et d'arbustes, ainsi que le broyage et l'évacuation des déchets végétaux. Si vous avez envie de revoir l'agencement de votre espace vert, l'entreprise peut vous mettre en relation avec des paysagistes partenaires, lesquels peuvent répondre à vos attentes dans ce domaine. 
            </p>

        </article>
    </section>
    <section class="gallery">
        <h1>Quelques réalisations :</h1>
        <p>Taille de forme olivier, entretien jardin</p>
        <?php foreach($pictures as $picture): ?>
            <div class="gallery_items">
                <legend class="img_legend"> <?= $picture["name"]?> </legend>
                <img class="service_img" src="<?= $picture["path"]?>"/>
            </div>
        <?php endforeach ?>
    </section>
</main>