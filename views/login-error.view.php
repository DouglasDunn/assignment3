<?php require('partials/head.php'); ?>
    <h1>Active Password Checker</h1>
    <h1>Error!</h1>
    <p><?= $errorMessage; ?></p>

    <form method="POST" action="/submit">
        <input name="password"></input>
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php'); ?>
