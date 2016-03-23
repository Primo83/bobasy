<!--==============================content================================-->
        <section id="content">
            <div class="container_12">
                    <article class="grid_6">
                    	<div class="inner-block">
                        <h2 class="aqua">Dane kontaktowe</h2>
                        <h3></h3><div class="przerwa"></div>
                        
            <div class="adress">
            
            			<h2 class="blue"> Akademia Pływania Malucha</h2>
            			<h3 style="font-weight: normal; color: #000066;">Karolina Maciałek</h3>
                                
                                <p>
                                Telefon: <span  style="color:purple; font-weight: bold">+48 518 508 843</span></br></br>
                                E-mail: <span  style="color:purple; font-weight: bold"><a href="mailto:apm.bydgoszcz@gmail.com">apm.bydgoszcz@gmail.com</a></span></br></br>
                                Nr konta: <span  style="color:purple; font-weight: bold">23 1090 1896 0000 0001 2344 2034</span></br>
                               </p>
            
            
            
                         <!--  <dt>Akademia Pływania Malucha</dt>
                          <dt>Karolina Maciałek</dt>
                          <dd><span>Telefon:</span>+48 518 508 843</dd>
                          <dd>E-mail: <a href="mailto:apm.bydgoszcz@gmail.com">apm.bydgoszcz@gmail.com</a></dd>
                          <dt>Nr konta: 23 1090 1896 0000 0001 2344 2034</dt>-->
                        </div>
                      </div>
                    </article>
                    
                    
                    <article class="grid_6">
                    	<div class="inner-block">
                        <h2 class="aqua">Formularz Kontaktowy</h2>
                        <h3></h3>
                        
                      
                      
                       <p><font color="black"><strong>
<?php
$imie=$_POST['imie'];
$email=$_POST['email'];
$potw_email=$_POST['potw_email'];
$tel=$_POST['tel'];
$tresc=$_POST['tresc'];
$m2=$_POST['m2'];

if($m2 == 5)
{
	if ($email == $potw_email and $email !='')
	{
		$message = "Imię: $imie\nE-mail: $email\nTel.: $tel\nTreść wiadomości:\n\n$tresc";
		$header = "From: $imie <$email>";
		@mail("apm.bydgoszcz@gmail.com","Kontakt z AKADEMIA PŁYWANIA MALUCHA!","$message","$header")
		or die();

		
		echo '<div class="success"><div class="success_txt">Wiadomość została wysłana poprawnie!<br /><strong> Wkrótce otrzymasz odpowiedź.</strong></div></div>';
                         

		$message2 = "Prśba wysłania e-maila ze strony CARNAJM.pl\nzakończyła się powodzeniem.\nWkrótce otrzymasz od nas odpowiedź.\n\nUWAGA\nZ przyczyn niezależnych od AKADEMII PŁYWANIA MALUCHA, sporadycznie\nwiadomości wysyłane przez formularz\nnie docierają do adresata. Jeśeli w ciągu 48 godzin\nnie uzyskasz odpowiedzi, oznacza to,\nże najprawdopodobniej nie otrzymaliśmy\nTwojego zapytania.\n\nW takiej sytuacji wyślij zapytanie ponownie.\n\nŻyczymy miłego dnia\nAKADEMIA PŁYWANIA MALUCHA";
		$header2 = "From: CARNAJM <apm.bydgoszcz@gmail.com>";
		@mail("$email","Wysłano zapytanie mailowe przez AKADEMIA PŁYWANIA MALUCHA!","$message2","$header2")
		or die();

		$czy_ok=1;
	}
	else
	{
		
		echo '<div class="success"><div class="success_txt">Nie wysłano wiadomości. Błędny adres e-mail!<br /></div></div>';
	}
}

if($czy_ok!=1)
{
	echo '        <form method="post" action="index2.php" id="contact-form">
                  <fieldset>
          
              
              	<label class="name">
                        <input type="text" name="imie" value="Imię'.$imie.'" class="c" />
                      </label>
                      <label class="email">
                        <input type="text" name="email" value="E-mail'.$email.'" class="c" />
                      </label>
                      <label class="email">
                        <input type="text" name="potw_email" value="Potwierdź e-mail'.$potw_email.'" class="c" />
                      </label>
                      <label class="phone">
                        <input type="text" name="tel" value="Telefon'.$tel.'" class="c" />
                      </label>
                    
                    <label class="message">
                      <textarea name="tresc" value="Treść">'.$tresc.'</textarea>
					</label> 
	';
}
if($czy_ok==1)
{
	echo '        <form method="post" action="index2.php" id="contact-form">
                  <fieldset>
          
				
				<label class="name">
                        <input type="text" name="imie" value="" class="c" />
                      </label>
                      <label class="email">
                        <input type="text" name="email" value=""  class="c" />
                      </label>
                      <label class="email">
                        <input type="text" name="potw_email" value=""  class="c" />
                      </label>
                      <label class="phone">
                        <input type="text" name="tel" value="" class="c" />
                      </label>
                    
                    
                       <label class="message">
                      <textarea name="tresc" value=""></textarea>
					</label> 
	';
}
?>
                      <input type="hidden" name="m2" value="5" />
                      <div class="buttons2">
                        <input type="submit" value="Wyślij" class="button1 aqua_but" />&nbsp;
                        
                      </div>
                  
                  </fieldset>
                </form>

</strong></font></p>
                      
                      
                      
                      </div>
                    </article>
                    
                    
                    
                   
                    
                    
                    
                <div class="clear"></div>
            </div>
        </section>
</div>