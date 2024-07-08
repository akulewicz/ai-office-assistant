<?php require base_path('App/views/partials/head.php'); ?>
<?php require base_path('App/views/partials/navigation.php'); ?>

<div class="container mt-5">

<h1 class="pb-2 border-bottom">AltGenerator</h1>
<div class="alert alert-primary mt-5" role="alert">
  Aplikacja generuje opis alternatywny dla obrazka znajdującego się pod określonym adresem URL.
</div>

<form class="mt-5" method="POST" action="/altgenerator">
  <div class="mb-3">
    <label for="url" class="form-label">Adres URL obrazka</label>
    <input type="text" class="form-control <?= $errors['url'] ? 'is-invalid' : '' ?>" id="url" name="url" value="<?= $url ?? ''; ?>">

    <?php if (isset($errors['url'])) : ?>
    <div id="url" class="invalid-feedback">
        <?= $errors['url'] ?>
    </div>
    <?php endif; ?>
  </div>
  
  <button type="submit" class="btn btn-primary">Generuj</button>
</form>



<?php require base_path('App/views/partials/footer.php'); ?>