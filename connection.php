<?php

		//*******METHODE_1//*******
		//$conn = mysqli_connect('localhost', 'root', '', 'gestion');
		
		//*******METHODE_2//*******
		// try {
		// 	$conn = new PDO("mysql:host=localhost;dbname=gestion;port=3306;charset=utf8", 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		// } catch (Exception $e) {
		// 	echo 'Erreur de connexion: ' . $e->getMessage();
		// }

		//*********************AFFICHAGE*********************//

		//$contenuClient = $conn->query('SELECT * FROM client WHERE id_client = 5');

		// $contenuClient = $conn->prepare('SELECT * FROM client');
		// $contenuClient->execute();

		// while($ligne = $contenuClient->fetch()){
		// 	echo $ligne['id_client'] . ' ';
		// }

		// $contenuClient->closeCursor();

		// echo '<Br>';

		// $contenuClient = $conn->prepare('SELECT * FROM client WHERE id_client < 4');

		// $contenuClient->execute();

		// while($ligne = $contenuClient->fetch()){
		// 	echo $ligne['id_client'] . ' ';
		// }


		// if(isset($_POST['idClient'])){
		// 	if(!empty($_POST['idClient'])){
		// 		$idClient = htmlspecialchars($_POST['idClient']);

		// 		$contenuClient = $conn->prepare('SELECT * FROM client WHERE id_client < ?');
		// 		$contenuClient->execute(array($idClient));

				// $contenuClient = $conn->prepare('SELECT * FROM client WHERE id_client < :idClient AND adresse = :adresse');
				// $contenuClient->execute(array("idClient" => $idClient,
				// 							  "adresse" => "Fes"));


				// $contenuClient = $conn->prepare('SELECT * FROM client WHERE id_client < :idClient AND adresse = "Fes"');
				// $contenuClient->execute(array("idClient" => $idClient));

		// 		echo '<table>';

		// 		while($ligne = $contenuClient->fetch()){
		// 			echo '<tr>';

		// 				echo '<td>';
		// 					echo $ligne['id_client'];
		// 				echo '</td>';

		// 				echo '<td>';
		// 					echo $ligne['nomC'];
		// 				echo '</td>';

		// 				echo '<td>';
		// 					echo $ligne['numTel'];
		// 				echo '</td>';

		// 				echo '<td>';
		// 					echo $ligne['adresse'];
		// 				echo '</td>';

		// 			echo '</tr>';
		// 		}

		// 		echo '</table>';
		// 	}
		// }

		//*********************INSERTION*********************//

		// if(isset($_POST['nomC']) && isset($_POST['numTel']) && isset($_POST['adresse'])){
		// 	if(!empty($_POST['nomC']) && !empty($_POST['numTel']) && !empty($_POST['adresse'])){
				
		// 		$nomC = htmlspecialchars($_POST['nomC']);
		// 		$numTel = htmlspecialchars($_POST['numTel']);
		// 		$adresse = htmlspecialchars($_POST['adresse']);

		// 		$insertionClient = $conn->prepare('INSERT INTO client(nomC,numTel,adresse) VALUES(?,?,?)');
		// 		$insertionClient->execute(array($nomC,$numTel,$adresse));

		// 		echo 'Le Client a été bien ajouté !!';
		// 	}else{
		// 		echo 'Attention, Tous Les Champs Sont Obligatoires !!';
		// 	}
		// }

		//*********************MODIFICATION*********************//


		// if(isset($_POST['idClient']) && isset($_POST['nomC']) && isset($_POST['numTel']) && isset($_POST['adresse'])){
		// 	if(!empty($_POST['idClient']) && !empty($_POST['nomC']) && !empty($_POST['numTel']) && !empty($_POST['adresse'])){
				
		// 		$idClient = htmlspecialchars($_POST['idClient']);
		// 		$nomC = htmlspecialchars($_POST['nomC']);
		// 		$numTel = htmlspecialchars($_POST['numTel']);
		// 		$adresse = htmlspecialchars($_POST['adresse']);

		// 		if(filter_var($idClient,FILTER_VALIDATE_INT)){

		// 			$testId = $conn->prepare('SELECT * FROM client WHERE id_client = ?');
		// 			$testId->execute(array($idClient));

		// 			$nbLignes = $testId->rowCount();

		// 			if($nbLignes != 0){
		// 				$modificationClient = $conn->prepare('UPDATE client SET nomC = :nomC , numTel = :numTel , adresse = :adresse WHERE id_client = :idClient');

		// 				$modificationClient->execute(array("nomC" => $nomC,
		// 												   "numTel" => $numTel,
		// 												   "adresse" => $adresse,
		// 												   "idClient" => $idClient));

						
		// 				echo 'Le Client a été bien modifié !!';
		// 			}else{
		// 				echo 'Cet id n\'existe pas !!';
		// 			}
				

		// 		}else{
		// 			echo 'Cet id est non valable !!';
		// 		}
				
		// 	}else{
		// 		echo 'Attention, Tous Les Champs Sont Obligatoires !!';
		// 	}
		// }

			
		//*********************SUPPRESSION*********************//
		
		// if(isset($_POST['idClient'])){
		// 	if(!empty($_POST['idClient'])){
				
		// 		$idClient = htmlspecialchars($_POST['idClient']);
	
		// 		if(filter_var($idClient,FILTER_VALIDATE_INT)){

		// 			$testId = $conn->prepare('SELECT * FROM client WHERE id_client = ?');
		// 			$testId->execute(array($idClient));

		// 			$nbLignes = $testId->rowCount();

		// 			if($nbLignes != 0){
						
		// 				$suppressionClient = $conn->prepare('DELETE FROM client WHERE id_client = ?');
		// 				$suppressionClient->execute(array($idClient));
						
		// 				echo 'Le Client a été bien supprimé !!';
		// 			}else{
		// 				echo 'Cet id n\'existe pas !!';
		// 			}
				

		// 		}else{
		// 			echo 'Cet id est non valable !!';
		// 		}
				
		// 	}else{
		// 		echo 'Attention, Ce Champ est Obligatoire !!';
		// 	}
		// }



?>