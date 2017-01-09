<!DOCTYPE html>
	
	<html>
		<head>
            <meta charset="utf-8"/>
			<title>Créer un explorateur de fichiers en PHP</title>
			<meta charset="utf-8"/>
			<meta name="description" content="description"/>
            <script src="script.js"></script>
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
		</head>
		
<body>
    <header class=container>
        <h1 class=titre>INDEX</h1>
    </header>
    
<main class=container>
   
    <div class="all col-lg-12">
        <div class="doss col-lg-6">
            <h2>► Dossiers</h2>
        </div>

        <div class="fich col-lg-6">
            <h2>► Fichiers</h2>
        </div>
    </div>
    
    <div class="container ok col-lg-12">
        <div class="corpsdoss container col-lg-6">
            <?php include("file-explore.php"); ?>
        </div>
        
        <div class="corpsfich container col-lg-6">
            <?php include("file-explore.php"); ?>
        </div>
    </div>
    
</main>

</html>