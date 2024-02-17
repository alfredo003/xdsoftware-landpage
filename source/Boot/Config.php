<?php

define("CONF_DB_HOST", "conviktus.co.ao");
define("CONF_DB_USER", "conviktu_leto528");
define("CONF_DB_PASS", "SAmYQVvDmXDF");
define("CONF_DB_NAME", "conviktu_website");
/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.xd.conviktus.co.ao");
define("CONF_URL_TEST", "https://www.localhost/xdsoftware-landpage");
define("CONF_URL_ADMIN", "/admin");

/**
 * SITE
 */ 
define("CONF_SITE_NAME", "Conviktus");
define("CONF_SITE_TITLE", "Engenharia e Tecnologias");
define("CONF_SITE_DESC",
    "A Conviktus tem como principal objectivo, compreender as necessidades dos clientes, fornecendo-lhes serviços de vendas de 
    produtos informáticos, eléctricos e prestação de serviços nas áreas, que vão ao encontro das suas necessidades.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "www.conviktus.co.ao");
define("CONF_SITE_ADDR_STREET", "dos Comando");
define("CONF_SITE_ADDR_NUMBER", "(+244) 942624343");
define("CONF_SITE_ADDR_COMPLEMENT", "--------");
define("CONF_SITE_ADDR_CITY", "Cazenga - Luanda");
define("CONF_SITE_ADDR_STATE", "-----");
define("CONF_SITE_ADDR_ZIPCODE", "-------------");

define("CONF_NUMBER_PHONE", "(+244) 942 624 343");
define("CONF_EMAIL_SITE", "geral@conviktus.co.ao");
define("CONF_ADDR_SITE", "Rua dos Comando, Cazenga - Luanda");
/**
 * SOCIAL   
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "conviktus");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "conviktus");
define("CONF_SOCIAL_FACEBOOK_APP", "1144665229853833");
define("CONF_SOCIAL_FACEBOOK_PAGE", "conviktus");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "alfredomanuel.dev");
define("CONF_SOCIAL_GOOGLE_PAGE", "-------");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "-------------");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "conviktus");
define("CONF_SOCIAL_YOUTUBE_PAGE", "https://www.youtube.com/@CONVIKTUS-bj8sp");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "convikWeb"); 

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "mail.conviktus.co.ao");
define("CONF_MAIL_PORT", "465");
define("CONF_MAIL_USER", "alfredo@conviktus.co.ao");
define("CONF_MAIL_PASS", "-;Y2hYF;MWN-");
define("CONF_MAIL_SENDER", ["name" => "Conviktus-Engenharia e Tecnologia", "address" => "geral@conviktus.co.ao"]);
define("CONF_MAIL_SUPPORT", "geral@conviktus.co.ao");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");