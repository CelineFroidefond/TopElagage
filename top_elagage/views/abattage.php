<main class="main_container">

    <section class="service">
        <article class="service_description">
            <h1>Abattage d'arbres à Fabrègues</h1>
            <p>
                Située à Fabrègues, Top Élagage, c'est une équipe de professionnels à votre service pour de l'abattage d'arbre, du débroussaillement et de l'entretien d'espaces verts. Elle intervient sur tous types de chantier, même les plus délicats : arbres au dessus d'une toiture, de lignes électriques, de grande hauteur...).
            </p>
            <p>
                Équipés pour l'abattage acrobatique et en hauteur, ces professionnels travaillent en harnais et nacelle pour réaliser vos travaux. Ils abattent des arbres selon plusieurs techniques, en fonction de la configuration du terrain et de l'arbre en lui-même. Ils ont notamment recours à l'abattage par démontage pour les arbres les plus hauts ou les plus dangereux. 
            </p>
        </article>
    </section>
    <section class="gallery">
        <h1>Quelques réalisations :</h1>
        <p>Abattage d'arbres dangereux, abattage par démontage</p>
        <?php foreach($pictures as $picture): ?>
            <div class="gallery_items">
                <legend class="img_legend"> <?= $picture["name"]?> </legend>
                <img class="service_img" src="<?= $picture["path"]?>"/>
            </div>
        <?php endforeach ?>
    </section>
</main>