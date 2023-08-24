<?php 

Class Config{

	//Basic info about the site
	const SITE_URL = "http://localhost";
	const SITE_FOLDER = "testesitemvc";
	const SITE_NAME = "Teste MVC";
	const SITE_EMAIL_ADM = "admin@gmail.com";


	//Database info
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_PASSWORD = "",
		  BD_BANCO = "testemvc",
		  BD_PREFIX = "";


	//PHP Mailer info
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "admin@gmail.com";
	const EMAIL_NAME = "Email Contact";
	const EMAIL_PASSWORD = "nothingtoseehere";
	const EMAIL_PORT = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPY = "admin@gmail.com";



}
 ?>

