<?php

    // Init(s)
    //Includes
    require_once(__DIR__.'/seo.config.inc.php');
    //Constant(s)
    define('CONFIG', [
        'DOMAIN' => 'Example.org',
        'NAME' => $SEO_Name,
        'KEYWORDS' => implode(', ', $SEO_Keywords),
        'DESCRIPTION' => $SEO_Description,
    ]);
    //Var(s)

?>
