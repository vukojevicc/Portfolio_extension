<?php
    require __DIR__ . '/partials/header.php';
    require_once __DIR__ . '/tabele/poruka.php';
    $poruke = Poruka::izlistajPoruke();
?>
<table id="email-table">
    <tr>
        <th>id</th>
        <th>ime</th>
        <th>imejl</th>
        <th>poruka</th>
    </tr>
    <?php
        foreach($poruke as $poruka){
            ?>
            <tr>
                <td><?php echo $poruka->id ?></td>
                <td><?php echo $poruka->ime ?></td>
                <td><?php echo $poruka->email ?></td>
                <td><?php echo $poruka->poruka ?></td>
            </tr>
            <?php
        }
    ?>
</table>