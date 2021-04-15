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

	<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
	</script>

</head>
<body>
	<main>
		<section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100"></div>
        </section>
	</main>

	<div id="myModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	            <div class="modal-header">
	            	<img src="logo.png"  class="img-resposive text-center" height="100px" width="100px" >
	            	<img src="armoirie.png"  class="img-resposive" height="100px" width="100px" style="margin-left: 230px;">
	                
	            </div>
	            <div class="modal-body">
	            	<div class="alert alert-primary text-uppercase text-center" role="alert">
 						 Inscription au profil des forces spéciales
					</div>
	            	<div class="alert alert-danger text-center text-uppercase" >
  						Toute fausse information annulera votre demande de candidature
					</div>
						<div class="card border-danger">
						  <h5 class="card-header panel-danger text-center  border-1 border-danger alert alert-danger"><strong>Nouvelle inscription</strong></h5>
						  <div class="card-body text-center">
						    <h5 class="card-title" style="color:black;">Vous devez disposer a porter de main toutes les pièces demandé pour l'incription en ligne.</h5>
						    <a href="inscription.php" class="btn btn-primary text-uppercase">Inscription</a>
						  </div>
						</div>
	                    <div class="modal-footer">
        				  <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
     				   </div>
	           
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html>