<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.9.3
 */

/**
 * Database `space_project`
 */

/* `space_project`.`users` */
$users = array(
  array('id' => '1','email' => 'test1@gmail.com','password' => 'test1'),
  array('id' => '2','email' => 'test2@gmail.com','password' => 'test2'),
  array('id' => '3','email' => 'test3@gmail.com','password' => 'test3'),
  array('id' => '4','email' => 'test4@gmail.com','password' => 'test4')
);

// Validation du formulaire
if (isset($_POST['email']) &&  isset($_POST['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
            $loggedUser = [
                'email' => $user['email'],
            ];
        } else {
            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['email'],
                $_POST['password']
            );
        }
    }
}
?>

<!--
   Si utilisateur/trice est non identifié(e), on affiche le formulaire
-->
<?php if(!isset($loggedUser)): ?>
<form action="loginpage.php" method="post">
    <!-- si message d'erreur on l'affiche -->
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
        <div id="email-help" class="form-text">Email of your account</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- 
    Si utilisateur/trice bien connectée on affiche un message de succès
-->
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Hello <?php echo $loggedUser['email']; ?> , welcome here !
    </div>
<?php endif; ?>