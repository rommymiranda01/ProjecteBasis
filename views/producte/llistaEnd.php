<?php
if ($_SESSION['loggedUser']['rol'] == 'admin') {
    ?>
    <div class="app">
        <h2>Llista d'endarreriments</h2>
        <table>
            <thead>
            <tr>
                <th>Referencia</th>
                <th>Dni</th>
                <th>Data LLoguer</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($llistaEnd as $ll) {
                ?>
                <tr>
                    <td><?php echo $ll['refProducte'] ?></td>
                    <td><?php echo $ll['dniClient'] ?></td>
                    <td><?php echo $ll['data'] ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <?php
}
?>