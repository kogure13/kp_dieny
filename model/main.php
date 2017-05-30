<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <?php
        $main = new Main();
        $main->getHeader();
        ?>
    </head>
    <body>
        <?php
            $main->getMenu();
            $main->getContent();
        ?>        

        <br style="clear: both;" />
        <footer>
            <div class="footer">
                <div class="container">
                    <p style="display: inline-block;">
                        Copyright © 2017 - Universitas Nurtanio Bandung
                    </p>
                </div>
            </div>
        </footer>        
    </body>
</html>