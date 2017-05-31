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
                                <span class="text-muted">Jadwal Sidang T.A 2016/2017</span>
                                <ol style="margin-left: -25px">
                                    <li>Gelombang 1 : 19 April 2017</li>
                                    <li>Gelombang 1 : 19 April 2017</li>
                                    <li>Gelombang 1 : 19 April 2017</li>
                                    <li>Gelombang 1 : 19 April 2017</li>
                                </ol>
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