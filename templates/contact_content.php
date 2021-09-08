<div id="contact">
    <div id="contact_content" class="container-md">
        <div class="row">
            <div class="col-md-4">
                <h1>Date de contact:</h1>
                <?php foreach($date_contact as $i): ?>
                    <h5><?php echo array_search($i, $date_contact) . ": " ?></h5>
                    <h6><?php echo $i; ?></h6>
                <?php endforeach ?>
            </div>
            <div class="col-md-4">
                <h1>Program</h1>
                <h5>Luni - Vineri:</h5>
                <h6>9:00 - 18:00</h6>
                <h5>Weekend:</h5>
                <h6>Pana la ora 15:00</h6>
            </div>
            <div class="mapouter">
	            <div class="gmap_canvas">
                    <iframe width="250" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=Bucuresti&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies-online.net</a>
                    <br>
                    <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 250px;
                        width: 250px;
                    }
                    </style> <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                    <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none!important;
                        height: 250px;
                        width: 250px;
                    }
                    </style>
	            </div>
            </div>
        </div>
        <div id="comentariu" class="content">
            <h1>Comentariul tau!</h1>
            <?php if (isset($_SESSION['errors_msg']) && !empty($_SESSION['errors_msg'])): ?>
					<div class="alert alert-danger display-error">
						<?php echo $_SESSION['errors_msg']; ?>
					 </div>
            <?php endif;?>
            <form method="post" action="contact_post.php">
                <div class="mb-3">
                    <label for="nume" class="form-label">Nume</label>
                    <input type="text" class="form-control" name="nume" id="nume" placeholder="Nume">
                </div>
                <div class="mb-3">
                    <label for="prenume" class="form-label">Prenume</label>
                    <input type="text" class="form-control" name="prenume" id="prenume" placeholder="Prenume">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentariu</label>
                    <textarea class="form-control" name="comentariu" id="exampleFormControlTextarea1" rows="3" placeholder="Comentariu"></textarea>
                </div>
                <button id="button" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>