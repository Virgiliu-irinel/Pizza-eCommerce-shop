<div class="comenzi">
    <h1>Feedback</h1>
    <div class="login">
        <div class="feedback">
            <?php foreach($feedback as $i): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $i["nume"] ?>
                            <?php echo $i["prenume"] ?>:
                        </h5>
                        <p class="card-text"><?php echo $i["comentariu"] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>