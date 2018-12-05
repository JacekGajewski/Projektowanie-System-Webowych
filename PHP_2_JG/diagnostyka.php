
/**
 * Created by PhpStorm.
 * User: rychl
 * Date: 04.12.2018
 * Time: 11:41
 */
<DOCTYPE html>
    <html>

    </head>
    <body>
        <p>The following data is saved in a cookie on your computer.</p>
        <?php

        foreach ($_COOKIE as $key => $value )
            print( "<p>$key: $value</p>" );
        ?><
    </body>
    </html>
