<div class="menu">
    <h1>Meniu</h1>
    <div class="container-md">
        <div class="row justify-content-between">
            <?php foreach ($pizza_menu as $i): ?>
                <div style="margin: 10px;" class="col-md-3">
                    <img class="img-fluid pizza" src="<?php echo "assets/" . $i["poza"]; ?>" alt="<?php echo $i["tip_pizza"] ?>">
                    <div class="column">
                        <h4> <?php echo $i["tip_pizza"]; ?> </h4>
                        <hr>
                        <h4>30 cm</h4>
                        <hr>
                        <h4> <?php echo $i["pret"] . " lei"; ?> </h4>
                        <button id="button" type="button" class="btn btn-primary" onClick="autoFill('<?php echo $i["tip_pizza"]; ?>','<?php echo $i["pret"];?>'); return false;">Comanda</button>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<div id="order" class="container-md">
    <h1>Comanda acum!</h1>
    <?php if (isset($_SESSION['errors_msg']) && !empty($_SESSION['errors_msg'])): ?>
					<div class="alert alert-danger display-error">
						<?php echo $_SESSION['errors_msg']; ?>
					 </div>
    <?php endif;?>
    <form method="post" action="post.php">
        <div class="mb-3 optionBox">
            <label for="exampleFormControlTextarea1" class="form-label">Pizza</label>
            <div class="block"></div>
        </div>

        <div class="col-md-2 mb-3">
            <label for="Suma_totala" class="form-label">Pret Total</label>
            <div class="input-group">
                <input type="text" class="form-control" name="Pret_total" id="Suma_totala" readonly>
                <span class="input-group-text">Lei</span>
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Preferinte</label>
            <textarea class="form-control" name="Preferinte" id="exampleFormControlTextarea1" rows="3" placeholder="Transmite-ne preferintele tale"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nume</label>
            <input type="text" class="form-control" name="Nume" id="exampleFormControlInput1" placeholder="Nume" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prenume</label>
            <input type="text" class="form-control" name="Prenume" id="exampleFormControlInput1" placeholder="Prenume" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Numar de telefon</label>
            <input type="text" class="form-control" name="Numar_de_telefon" id="exampleFormControlInput1" placeholder="Nr. telefon" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" name="Email" id="exampleFormControlInput1" placeholder="name@example.com" required>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Adresa</label>
            <textarea class="form-control" name="Adresa" id="exampleFormControlTextarea1" rows="3" placeholder="Adresa" required></textarea>
        </div>

        <button id="button" class="btn btn-primary" type="submit">Plaseaza comanda</button>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    var suma = 0;
    var pret_sters = 0;
    
    function autoFill(pizza_opt,pret) {
        suma = suma + parseInt(pret);
        //document.getElementById('pizza_opt').value += pizza_opt + ", ";
        $('.block:last').before('<div class="block"><div class="input-group mb-3">' + `<input type='text' class='form-control' name='Pizza[]' required readonly value='${pizza_opt}'>` + `<span id="pretId" class="input-group-text">${pret}</span>` +  '<span class="input-group-text">Lei</span>' + '</div><span class="remove">Sterge</span></div>');
        location.href = "#order";
        document.getElementById('Suma_totala').value = suma;
    }
    
    $('.optionBox').on('click','.remove',function() {
        $(this).parent().remove();

        pret_sters = $(this).parent().find('#pretId').html();
        suma -= pret_sters;

        $('#Suma_totala').val(suma);
    });
</script>
