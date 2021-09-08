<div class="content">
    <div class="login">
        <form method="post" action="user_post.php">
            <div class="mb-3">
                <label for="pizza" class="form-label">Tip pizza</label>
                <input type="text" class="form-control" name="tip_pizza" id="pizza" placeholder="Tip pizza" required>
            </div>

            <div class="mb-3">
                <label for="pret" class="form-label">Pret</label>
                <input type="text" class="form-control" name="pret" id="pret" placeholder="Pret" required>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Poza</label>
                <input class="form-control" type="file" name="poza" id="formFile" required>
            </div>

            <button id="button" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>