<?php 
    $a = [];
    foreach ($comenzi as $i) {
        $a = $i;
    }
?>

<div class="comenzi">
    <h1>Comenzi</h1>
    <div class="login">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <?php foreach($a as $i): ?>
                            <th scope="col"><?php echo array_search($i, $a); ?> </th>
                        <?php endforeach ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($comenzi as $i): ?>
                        <tr>
                            <th scope="row"><?php echo $i["id"] ?></th>
                            <td scope="col"><?php echo $i["nume"]?></td>
                            <td scope="col"><?php echo $i["prenume"]?></td>
                            <td scope="col"><?php echo $i["numar_de_telefon"]?></td>
                            <td scope="col"><?php echo $i["email"]?></td>
                            <td scope="col"><?php echo $i["adresa"]?></td>
                            <td scope="col"><?php echo $i["pizza"]?></td>
                            <td scope="col"><?php echo $i["preferinte"]?></td>
                            <td scope="col"><?php echo $i["pret_total"]?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>