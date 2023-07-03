<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Omie-IODE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="width: 100%; height: 100%; background: #001E27;">
    <div class="container" style="padding: 20px">
        <img src="../img/logos/omie-logo.svg">
        <div class="card">
            <h2 style="text-align: center; color: #00E2F4">Login com Google - Omie</h2>
            <p style="text-align: center; color: #EEF8FA">Utilize sua conta do Google para fazer login.</p>
            <div style="align-self: center;">
                <div id="g_id_onload"
                    data-client_id="999962858437-h5i64rkppplrmu76r0kkcv39k54r57de.apps.googleusercontent.com"
                    data-login_uri="http://localhost:3000/omie-iode/login.php"
                    data-auto_prompt="false">
                </div>
                <div class="g_id_signin"
                    data-type="standard"
                    data-size="large"
                    data-theme="outline"
                    data-text="sign_in_with"
                    data-shape="rectangular"
                    data-logo_alignment="left">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</body>
</html>