<main class="main_container">
<a href="logout">Se deconnecter</a>

<article class="add_picture">
    <h1>Ajouter une image à la collection</h1>
    <form method="post" class="submit_pictures">
        <label>Nom de l'image (en minuscules sans accents et sans espaces) - Ex: "abattageArbre1" </label>
        <input name="name"/>
        <label>Catégorie</label>
        <input name="category" placeholder="elagage/abattage/debroussaillage/entretien"/>
        <label>Chemin de l'image - Ex: ../public/assets/img/photos/abattage/ </label>
        <input name="path"/>
        <button class="button">Envoyer</button>
    </form>
</article>

<section class="edit_pictures">
    <article>
        <table>
            <tr>
                <td>Titre</td>
                <td>Catégorie</td>
                <td>Chemin</td>
                <td>Image</td>
            </tr>
            <?php foreach ($pictures as $picture): ?>
            <tr>
                <td><?= $picture["name"]?></td>
                <td><?= $picture["category"]?></td>
                <td><?= $picture["path"]?></td>
                <td><img src="<?= $picture["path"]?>"/></td>
                <td><a href="pictures/edit?id_picture=<?=$picture["id"]?>">Modifier</a></td>
                <td><a href="pictures/delete?id_picture=<?=$picture["id"]?>">Supprimer</a></td>
            </tr>
            <?php endforeach ?>
        </table>

    </article>
    <a href="..\admin/home">Retour à la page d'accueil administrateur</a>
</section>

</main>