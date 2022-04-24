<form method="post" action="form.php" role="form">
  <input type="text" name="name" placeholder="Nom" value="<?php echo $name; ?>" required>
  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
  <textarea type="text" name="text" placeholder="Message" required><?php echo $text; ?></textarea>
  <input type="submit" name="Envoyer" value="Envoyer ma demande">
</form>
