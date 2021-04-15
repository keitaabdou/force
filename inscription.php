<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Minitère de l'intérieur</title>
	<link rel="icon" href="index.ico" type="image/x-ico" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	
</head>
<body>
	<main>
		<section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100"></div>
				<div class="container">
					<form action="traitement_inscription.php" method="post" class="needs-validation" novalidate>
						<div class="row jumbotron" >
							<h2 class="alert alert-primary text-center mb-5" style="margin-top: -40px;"><strong>VEUILLEZ REMPLIE OBLIGATOIREMENT TOUT LES CHAMPS AVEC (<span style="color: red">*</span>)</strong></h2>
							<h2 class="alert alert-danger text-center " style="margin-top: -20px;"><strong>Toute fausse information annulera votre demande de candidature</strong></h2>
						
						<div class="col-md-6 mb-3">
							<label>GENRE (<span style="color: red">*</span>)</label>
							<select id="genre" name="genre" class="form-control" required>
								<option value="">------ SELECTIONNEZ VOTRE GENRE ------</option>
								<option value="M">Masculin</option>
								<option value="F">Féminin</option>
							</select>
						</div>

						<div class="col-md-6">
							<label for="">N° CNI OU ATTESTATION OU PASSEPORT (<span style="color: red">*</span>)</label>
                			<input type="text" id="ncni" name="ncni" class="form-control" placeholder="CI090875546" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="col-md-6  mb-3">
							<label for="nom">NOM (<span style="color: red">*</span>)</label>
							<input type="text" class="form-control" id="nom" placeholder="" name="nom" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="col-md-6">
							<label for="prenom">PRENOM (<span style="color: red">*</span>)</label>
							<input type="text" class="form-control" id="prenom" placeholder="" name="prenom" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="col-md-6 mb-3">
							<label for="">DATE DE NAISSANCE (<span style="color: red">*</span>)</label>
							<input type="date" id="date_naissance" name="date_naissance" class="form-control " placeholder="JJ/MM/AAAA" required>
						</div>

						<div class="col-md-6">
							<label for="">AGE (<span style="color: red">*</span>)</label>
               				<input type="number" id="age" name="age" class="form-control " placeholder="Votre age" required>	
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="col-md-6 mb-3">
							<label for="">LIEU DE NAISSANCE (<span style="color: red">*</span>)</label>
                			<input type="text" id="lieu_naissance" name="lieu_naissance" class="form-control" placeholder="" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="col-md-6 ">
							<label for="">NATIONALITE (<span style="color: red">*</span>)</label>
                			<input type="text" id="nationalite" name="nationalite" class="form-control" placeholder="" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="col-md-6 mb-3">
							<label for="">DIPLOME (<span style="color: red">*</span>)</label>
							<select name="diplomd" class="form-control" id="diplome" required>
								<option value="">------ SELECTIONNEZ LE DIPLOME ------</option>
								<option value="M">BAC</option>
								<option value="F">BEPC</option>
							</select>
						</div>

						<div class="col-md-6">
							<label for="">TELEPHONE (<span style="color: red">*</span>)</label>
                			<input type="text" id="tel" name="tel" class="form-control" placeholder="0101000200" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
						

						<div class="col-md-6 mb-3">
							<label for="">N° DE l'ATTESTATION (<span style="color: red">*</span>)</label>
                			<input type="text" id="attestation" name="attestation" class="form-control" placeholder="" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="col-md-6">
							<label for="">CONTACT EN CAS D'URGENCE (<span style="color: red">*</span>)</label>
               				<input type="text" id="contact_urgence" name="contact_urgence" class="form-control" placeholder="0101000200" required>
							
						</div>

						<div class="col-md-6">
							<label for="">E_mail(<span style="color: red">*</span>)</label>
               				<input type="email" id="email" name="email" class="form-control" placeholder="" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>

						<div class="col-md-12" style="text-align:center; margin-top:20px; width: 50px;">
							<input type="submit" id="incsrire" class="btn btn-primary btn-lg" value="S'inscrire" />
						</div>
					</form>
				</div>
        </section>
	</main>


	<script>
		// Disable form submissions if there are invalid fields
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
			// Get the forms we want to add validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
			  form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
				  event.preventDefault();
				  event.stopPropagation();
				}
				form.classList.add('was-validated');
			  }, false);
			});
		  }, false);
		})();
		</script>
		
</body>
</html>