<?PHP

// Caminho absoluto para a pasta do sistema
if( !defined("ABSPATH") )
    define('ABSPATH', dirname(__FILE__) . '/') ;

// Caminho no server para o sistema
if( !defined("BASEURL") )
    define('BASEURL', "_CRUD_com_php/") ;

    
// Constantes para o banco de dados
define("DB_NAME", 'db_crud_php');

define("DB_HOST", 'localhost');

define("DB_USER", 'crud_php');

define("DB_PASSWORD", "123456");

define('DB_API', ABSPATH . 'class/Messages.php');



//Templates
define("TEMPLATE_HEADER", ABSPATH.'parts/header.php');

define("TEMPLATE_FOOTER", ABSPATH.'parts/footer.php');
?>