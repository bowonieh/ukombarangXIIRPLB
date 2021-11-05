<html>

<head>

    <link rel="stylesheet" href="<?= base_url() ?>/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form id="formLogin">

                            Username:
                            <br>
                            <input type="text" name="username" id="username"/>
                            <br>
                            PASSWORD
                            <br>
                            <input type="password" name="password" id="password" />
                            <br>
                            <button type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
<script src="<?=base_url()?>/vendor/components/jquery/jquery.min.js"></script>
<script type="text/javascript">
    $('#formLogin').on('submit',function(a){
        a.preventDefault();
        //alert('Tombol d klik');
        
        $.ajax({
            type : 'POST',
            url : '<?=base_url()?>/check',
            data : {
                username : $('#username').val(),
                password : $('#password').val()
            },
            success: function(d){
                if(d.SUDAH_LOGIN){
                   // window.location.href = 'dashboard';
                }else{
                    alert('Gagal Login');
                }
            }
        });
        
    });
</script>
</html>