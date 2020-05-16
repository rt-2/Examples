<?php

    // Init(s)
    //Includes
    require_once(__DIR__.'/seo.config.inc.php');
    //Constant(s)
    define('DOMAIN', 'Example.org');
    define('PROTOCOL', 'http');
    define('URL', PROTOCOL.'://'.DOMAIN);
    define('CONFIG', [
        'NAME' => $SEO_Name,
        'KEYWORDS' => implode(', ', $SEO_Keywords),
        'DESCRIPTION' => $SEO_Description,
    ]);
    //Var(s)

?>
