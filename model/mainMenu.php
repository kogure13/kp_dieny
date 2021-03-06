<div class="header">            
    <div class="container">
        <div class="row">
            <div class="col-sm-4 hidden-sm hidden-xs">
                <div class="logo"></div>
            </div>
            <div class="col-sm-8">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar text-info"></span>
                                <span class="icon-bar text-info"></span>
                                <span class="icon-bar text-info"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">            
                            <ul class="nav navbar-nav navbar-right">
                                <?php if (isset($_SESSION['user_unnur'])) { ?>
                                    <li>                                    
                                        <a href="#" id="data-mahasiswa">Data Mahasiswa</a>
                                    </li>
                                    <li>                                    
                                        <a href="#" id="dokumen-sidang">Dokumen Sidang</a>
                                    </li>
                                    <li>                                    
                                        <a href="#" id="dokumen-wisuda">Dokumen Wisuda</a>
                                    </li>                                
                                    <li>
                                        <a href="?page=logout" id="logout">
                                            <i class="fa fa-sign-out fa-fw"></i>
                                            Logout
                                        </a>
                                    </li>
                                <?php } else { ?>
                                    <li>
                                        <a href="?page=login" id="login-menu">
                                            <i class="fa fa-sign-in fa-fw"></i>
                                            login
                                        </a>
                                    </li>
                                <?php } ?>
                                <li>                                    
                                    <a href="?page=kontak" id="hubungi-kami">Kontak Kami</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</div>

