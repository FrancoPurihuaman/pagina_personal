<?php  namespace App\Libraries;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View {

    public static function render($fileView, array $variables = []){
        $loader = new FilesystemLoader(APP_PATH.'/resources/views');
        $twig = new Environment($loader, [
            'cache' => false,
            'debug' => true,
            //'auto_reload' => true,
            'strict_variables' => true
        ]);
        $twig->addGlobal('APP_PATH', APP_PATH);
        $twig->addGlobal('PUBLIC_PATH', PUBLIC_PATH);
        $twig->addGlobal('SITE_NAME', SITE_NAME);

        $sesion = $_SESSION ?? null;
        $twig->addGlobal('SESSION', $sesion);
        
        echo $twig->render($fileView.'.twig', $variables);
        exit;
    }

    public static function redirection($ruta){
        $redirection = "Location: ".PUBLIC_PATH."/{$ruta}";
        header($redirection);
        exit;
    }
}
