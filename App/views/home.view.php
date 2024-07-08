<?php require base_path('App/views/partials/head.php'); ?>
<?php require base_path('App/views/partials/navigation.php'); ?>

<div class="container mt-5">

<h1 class="pb-2 border-bottom">Strona główna</h1>
<div class="container px-4 py-5" id="hanging-icons">
   
   <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
     <div class="col d-flex align-items-start">
       
       <div>
         <h3 class="fs-2 text-body-emphasis">Alt Generator</h3>
         <p>Generuje tekst alternatywny dla obrazków na podstawie adresu url obrazka.</p>
         <a href="#" class="btn btn-primary">
           Przejdż
         </a>
       </div>
     </div>
     <div class="col d-flex align-items-start">
       
       <div>
         <h3 class="fs-2 text-body-emphasis">Korektor tekstu</h3>
         <p>Aplikacja koryguje wklejony tekst. Program poprawia błędy ortograficzne, interpunkcyjne oraz stylistyczne. Opcjonalnie może uprościć dany tekst.</p>
         <a href="#" class="btn btn-primary">
           Przejdź
         </a>
       </div>
     </div>
     <div class="col d-flex align-items-start">
       
       <div>
         <h3 class="fs-2 text-body-emphasis">Kreator</h3>
         <p>Tworzy nowy artykuł na podstawie treści podanej przez użytkownika (np. informacji z innej strony WWW).</p>
         <a href="#" class="btn btn-primary">
           Generuj
         </a>
       </div>
     </div>
   </div>
</div>


<?php require base_path('App/views/partials/footer.php'); ?>