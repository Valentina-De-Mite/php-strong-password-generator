<?php


/* Creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password.

Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. 

Scriviamo tutto (logica e layout) in un unico file index.php

*/

include __DIR__ . '/layout/head.php';


session_start();



?>

<main>
  <div class="container py-5">

    <div class="col-8 mx-auto">
      <div class="card bg-white p-3">
        <h3>Generatore di Password</h3>


        <?php if (!empty($_SESSION['password'])) : ?>
          <div class="alert alert-info" role="alert">
            <strong>Password</strong> <?= $_SESSION['password']; ?>
          </div>
        <?php endif; ?>


        <form action="server.php" method="GET">
          <div class="mb-3">
            <label for="pass_length" class="form-label">Quanti caratteri vuoi nella tua password?</label>
            <input type="number" name="pass_length" id="pass_length" class="form-control" placeholder="10" aria-describedby="passwordLengthHelper">
            <small id="passwordLengthHelper" class="text-muted">La tua password</small>
          </div>
          <button type="submit" class="btn btn-primary">Genera</button>
        </form>
      </div>

    </div>
  </div>
</main>


<?php

