<main class="main_container">

<section class="service">
        <article class="service_description">
            <h1>Élagage de vos arbres à Fabrègues</h1>
            <p>
                D'avantage travaux que de simples services d'élagage, l'entreprise vous accompagne dans votre projet et propose études et conseils personnalisés pour vos espaces verts. Passion et compétences techniques sont les moteurs de son équipe, laquelle assure avec professionnalisme tous vos travaux d'entretien de parcs et de jardins.
            <p>
            <p> 
                Contactez Top Élagage pour obtenir un <span class="button">devis gratuit</span> et profiter de ses conseils en abattage, débroussaillage ou entretien de jardins.
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