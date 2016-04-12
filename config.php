<?php
	/* OPEN APP STORE - config.php */
    /* SET OPTIONS FOR OPENAPPSTORE */
    /* This is where you put the URL of your website */\
    /* It must end with a slash, like this '/' */
	define("URL", "http://www.example.com/"); 
    /* The title of your website */
    /* It is shown on the menu bar, homepage, and various places across your website */
	define("TITLE", "OpenAppStore");
    /* Subtitle is shown below the title on the homepage */
	define("SUBTITLE", "Download apps for PC");
    /* This feature is not currently active - You may ignore this */
	define("PREFIX", "ignore ");
    /* Your administrator email, will be shown in the contact menu */
	define("CONTACT", "admin@example.com");
    /* This defines the background color of the title part at the top of the homepage */
    /* it should be in hexadecimal format */
    /* If you are unsure of what color to use, go to color.adobe.com to help you choose */
	define("COLOR", "#005070"); 
    /*This is the same as above but for the text not the background */
    /* NOTE: For COLOR and TEXTCOLOR, the default value works fine if you don't know what to do */
	define("TEXTCOLOR", "#FFBD00"); 
    /* If your website has an SSL certificate, set this to true */
    /* otherwise leave it false b/c it will direct users to an SSL connection their browsers may reject */
	define("SSL", false); //true or false
?>