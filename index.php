<!DOCTYPE html>
	
	<html>
		<head>
            <meta charset="utf-8"/>
			<title>Créer un explorateur de fichiers en PHP</title>
			<meta charset="utf-8"/>
			<meta name="description" content="description"/>
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
		</head>
		
<body id="file_explore">
    <header class=container>
        <h1 class=titre>Explorateur de fichiers serveur FTP</h1>
        
            <div class="intro" col-lg-12>
                <p class="welcome">Pour visualiser un fichier, cliquez dessus. Pour le télécharger dans le dossier téléchargement de votre ordinateur, cliquez sur le bouton "Télécharger".</p>
            </div>
            
     </header>
    
    <main class=container>

        <div class="all col-lg-12">
           
            <div class="doss col-xs-5 col-lg-6">
                <h2>► Dossiers</h2>
            </div>
            

            <div class="fich col-xs-5 col-lg-6">
                <h2>► Fichiers</h2>
            </div>
            
        </div>

        <div class="container ok col-lg-12">
            <div class="corpsdoss container col-lg-6">
                <?php include("file-explore.php"); ?>
            </div>

            <div id="ajax" class="corpsfich container col-lg-6">
                
            </div>
        </div>

    </main>
    

    <script type="text/javascript">
            
    $(document).ready(function(){

        $(".link").on("click", function(e){
            e.preventDefault();
                    
            var $x = $(this);
            var adresse = $x.attr("href");
            var splitadresse = adresse.split('?')[1];
          
            $.ajax({
            type : "GET",
            data: splitadresse,
            success : function(data){
                    $("#ajax").html(data);
                    }
            });
        });
    }); 
    
    </script> 
</body>

</html>