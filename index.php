<?php
	$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
	$cognome = (isset($_POST['cognome'])) ? $_POST['cognome'] : '';
	$indirizzo = (isset($_POST['indirizzo'])) ? $_POST['indirizzo'] : '';
?>

<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Ciao, mondo!</title>
  </head>

  <body>

	  <div class="container" style= "margin-top: 30px">
	  	
	    <form action="index.php" method="post">
	  		<div class="form-group">
	    		<label for="nome">Nome</label>
	    		<input type="text" name="nome" class="form-control" id="nome" placeholder="Inserisci il tuo nome">
	  		</div>

	  		<div class="form-group">
	    		<label for="cognome">Cognome</label>
	    		<input  type="text" name="cognome" class="form-control" id="cognome" placeholder="Inserisci il tuo cognome">
	  		</div>
		  
			  <div class="form-group">
			    <label for="indirizzo">Indirizzo</label>
			    <textarea  class="form-control" name="indirizzo" id="indirizzo" rows="3" aria-describedby=" indirizzo"></textarea>
			    <small id="indirizzo-help" class="form-text text-muted">Inserire Via, numero civico, cap e provincia</small>
			  </div>

			  <button type="submit" class="btn btn-primary">Invia</button>
			</form>

		<div class="alert alert-primary" role="alert" style= "margin-top: 60px">

				<?php
				print $nome . '<br>';
				print $cognome . '<br>';
				print $indirizzo . '<br>';
				?>
				
		</div>

			<div class="alert alert-primary" role="alert">
				<ul>
					<?php
					foreach ($_POST as $key => $value) {
						print "<li>$value</li>";
					}
					?>
				</ul>
			</div>

			<?php if (empty($nome)): ?>
			<div class="alert alert-danger" role="alert">il nome non è stato inserito</div>
			<?php else: ?>
			<div class="alert alert-success" role="alert">il nome è stato inserito</div>
			<?php endif; ?>
			
		</div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 
