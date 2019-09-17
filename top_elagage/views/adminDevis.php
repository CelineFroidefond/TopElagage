
<table>
    <tr>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Mail</td>
        <td>Téléphone</td>
        <td>Objet</td>
        <td>Demande</td>
    </tr>
    <?php foreach ($projects as $project): ?>
    <tr>
        <td><?= $project["clientFirstName"]?></td>
        <td><?= $project["clientLastName"]?></td>
        <td><?= $project["clientMail"]?></td>
        <td><?= $project["clientPhone"]?></td>
        <td><?= $project["subject"]?></td>
        <td><?= $project["content"]?></td>
    </tr>
    <?php endforeach ?>
</table>