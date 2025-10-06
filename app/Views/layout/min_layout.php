<?php return ["layout" => function ($opt, $body, $head) { ?>
    <!doctype html>
    <html class="no-js h-100" lang="de">
        <head>
            <meta property="og:type" content="article" />

            <?php $opt["layout_essentials_head"]($opt); ?>
            <?php $head($opt); ?>
        </head>
        <body class="h-100" id="top">
            <?php $body($opt); ?>
            <?php $opt["layout_essentials_body"]($opt); ?>
        </body>
    </html>
<?php }]; ?>