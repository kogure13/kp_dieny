<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <?php
        $main = new Main();
        $main->getHeader();
        ?>
    </head>
    <body>
        <?php $main->getMenu(); ?>        
        <div class="content">
            <div class="top">
                <div class="container">
                    <h2 class="titletop">
                        Pendaftaran Sidang<br />
                        <span>Universitas Nuratnio Bandung</span>
                    </h2>
                </div>                
            </div>
            <div class="container">
                <br style="clear: both;" />
                <div class="row">
                    <div class="col-md-8">
                        <div class="right-box">
                            <?= $main->getPage(); ?>
                            
                        </div>                        
                    </div>
                    <div class="col-md-4">                            
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Informasi Sidang dan Wisuda
                            </div>
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>            
            <br style="clear: both;" />
        </div>
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