<?php require('partials/head.php'); ?>
    <h1>Active Password Checker</h1>

    <form method="POST" action="/badPasswords">
        <p>List of bad passwords</p>
        <textarea name="badPasswords" rows="6" cols="20">testing123 12345678 password ilikeapples dogsarecool catsarenotcool disneyland halloween happybirthday justkidding</textarea>
        <button type="submit">Click Here before submitting a pasword</button>
    </form>

    <form method="POST" action="/names">
        <input name="password"></input>
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.php'); ?>
