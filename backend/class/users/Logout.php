<?php
session_start();
ob_start();
// Apaga todas as variáveis da sessão
$_SESSION = array();

// Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
// Nota: Isto destruirá a sessão, e não apenas os dados!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Por último, destrói a sessão
session_destroy();

$_SESSION['msg'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
                                    <span><i class="fas fa-check-circle fa-2x"></i></span>
                                    <div class="fw-bold ms-3">
                                        Deslogado com sucesso!
                                    </div>
                                </div>';
header("Location: ../../../frontend/content/login.php");
