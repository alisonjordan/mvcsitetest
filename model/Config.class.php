<?php 

Class Config{

	//Basic info about the site
	const SITE_URL = "http://localhost";
	const SITE_FOLDER = "testesitemvc";
	const SITE_NAME = "Test MVC";
	const DB_LIMIT_PAGE = 5;
	const SITE_EMAIL_ADM = "admin@gmail.com";
	const SITE_CEP = '68927257';


	//Database info
	const DB_HOST = "localhost",
		  DB_USER = "root",
		  DB_PASSWORD = "",
		  DB_NAME = "mvctest",
		  DB_PREFIX = "mvc_";


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

