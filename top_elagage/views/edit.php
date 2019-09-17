
<main class="main_container">
    <a href="logout">Se deconnecter</a>

    <article class="add_picture">
        <h1>Modifier image</h1>
        <form method="post" class="submit_pictures">
            <label>Modifier titre (en minuscules sans accents et sans espaces) - Ex: "abattageArbre1" </label>
            <input name="name" value="<?= $picture["name"]?>"/>
            <label>Modifier catégorie</label>
            <input name="category" placeholder="elagage/abattage/debroussaillage/entretien" value="<?= $picture["category"]?>"/>
            <label>Modifier chemin de l'image</label>
            <input name="path" value="<?= $picture["path"]?>"/>
            <button class="button">Envoyer</button>
        </form>
    </article>

</main>