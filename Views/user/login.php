<?php require_once 'Views/header.php'; ?>

<form action="../user/login" method="post">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
    
    <label for="password">Mot de Passe</label>
    <input type="password" name="password" id="password" required>
    
    <input type="submit" value="Se Connecter">
</form>

<?php require_once 'Views/footer.php'; ?>