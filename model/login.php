<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a>
    </li>
    <li role="presentation"><a href="#registrasi" aria-controls="registrasi" role="tab" data-toggle="tab">Registrasi</a></li>    
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="login">
        <form class="form-horizontal" id="login_form" name="login_form">
            <div class="form-group">
                <label for="nim" class="col-sm-2 control-label">NIM</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control input-sm" id="nim" name="nim">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control input-sm" id="password" name="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-sm btn-primary" id="btn-login">Login</button>
                </div>
            </div>
        </form>
    </div>
    <div role="tabpanel" class="tab-pane" id="registrasi">
        <form class="form-horizontal" id="registrasi_form" name="registrasi_form">
            <div class="form-group">
                <label for="nim" class="col-sm-3 control-label">NIM</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control input-sm" id="nim" name="nim">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control input-sm" id="password" name="password">
                </div>
            </div>
            <div class="form-group">
                <label for="con_pass" class="col-sm-3 control-label">Confirm Password</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control input-sm" id="con_pass" name="con_pass">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">E-mail</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control input-sm" id="email" name="email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                    <button type="submit" class="btn btn-sm btn-primary" id="btn-daftar">Daftar</button>
                </div>
            </div>
        </form>
    </div>    
</div>

<script src="application/login/script.js"></script>