
<?php
			$_POST = json_decode(file_get_contents('php://input'), true);

			$StartDate = $_POST['StartDate'];
			$EndDate = $_POST['EndDate'];
			$NumberOfPeople = $_POST['NumberOfPeople'];
			$Category = $_POST['Category'];
			$SubCategory = $_POST['SubCategory'];
			$Comment = $_POST['Comment'];
			$FirstName = $_POST["FirstName"];
			$LastName = $_POST['LastName'];
			$Email = $_POST['Email'];
			$Phone = $_POST["Phone"];
			$Country = $_POST['Country'];
			
			$email = "john@naturguiden.se";
			$headers = "From: ".$email." \r\n";
			$headers .= "Reply-To: ".$email." \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=utf-8\r\n";

			/*Mail to NATURGUIDEN */
			$subject1 = "Naturguiden-com Inquiry";
			$mailto1 = "john@naturguiden.se";
			 
			$form_message1 = "<html><body><p>Meddelande skickat från Naturguiden.se Inquiry form\n<br/>
			<b>FirstName:</b> ".$FirstName." \n<br/>
			<b>LastName:</b> ".$LastName." \n <br/>
			<b>Email:</b> ".$Email." \n<br/>
			<b>Phone:</b> ".$Phone." \n<br/>
			<b>Country:</b> ".$_POST["Country"]." \n<br/>
			<br />
			<b>NumberOfPeople:</b> ".$NumberOfPeople." \n<br/>
			<b>StartDate:</b> ".$StartDate." \n<br/>
			<b>EndDate:</b> ".$EndDate." \n<br/>
			<b>Category:</b> ".$Category." \n<br/>
			<b>SubCategory:</b> ".$SubCategory." \n<br/>
			<br>
			<b>Comment:</b> ".$Comment." </p></body></html>"; 
	 
			$sent = mail($mailto1, $subject1, $form_message1, $headers);

			/*Mail to Guest */
			$subject2 = "Bekräftelse Naturguiden";
			$mailto2 = $Email;
			 
			$form_message2 = "<html><body><p>Tack ".$FirstName." för din förfrågan. Vi återkommer så snart som möjligt..\n<br/><br/>
			<b>Förnamn:</b> ".$FirstName." \n<br/>
			<b>Efternamn:</b> ".$LastName." \n<br/> 
			<b>Epost:</b> ".$Email." \n<br/>
			<b>Tel:</b> ".$Phone." \n<br/>
			<b>Land:</b> ".$Country." \n<br/>
			<br />
			<b>Antal:</b> ".$NumberOfPeople." \n<br/>
			<b>Startdatum:</b> ".$StartDate." \n<br/>
			<b>Slutdatum:</b> ".$EndDate." \n<br/>
			
			<b>Aktivitet:</b> ".$SubCategory." \n<br/>
			<br>
			<b>Kommentar:</b> ".$Comment." <br/>
			<br/>
			
			/John Savelid <br/>
			Naturguiden <br/>
			john@naturguiden.se <br/>
			+46 70 53 53 630

			</p></body></html>"; 
	 
			$sent2 = mail($mailto2, $subject2, $form_message2, $headers);

		/* If correct	
	   	if($sent && $sent2){
			header("Location: /about/about-contact");   
		   	echo "<p style='color: green'>Tack ".$FirstName.", ditt meddelande har skickats! Vi besvarar meddelandet så fort som möjligt.</p>"; 
		   }
		// If send error   
	   	else {
			header("Location: /about/about-contact");      
		   	echo "<p style='color: red'>Meddelandet kunde inte skickas. Vänligen försök igen eller kontakta oss via telefon eller e-post.</p>"; 
	 	} */
?>       