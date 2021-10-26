<?PHP

// Caminho absoluto para a pasta do sistema
if( !defined("ABSPATH") )
    define('ABSPATH', dirname(__FILE__) . '/') ;

// Caminho no server para o sistema
if( !defined("BASEURL") )
    define('BASEURL', ABSPATH. "_CRUD_com_php/") ;

    
// Constantes para o banco de dados
define("DB_NAME", 'db_crud_php');

define("DB_HOST", 'localhost');

define("DB_USER", 'crud_php');

define("DB_PASSWORD", "123456");

define('DB_API', ABSPATH . 'crud/Messages.php');

// CRUD MESSAGE
define('CADASTRAR_MSG', ABSPATH. 'crud/insert_msg.php');

define('LISTAR_MSG', ABSPATH. 'crud/select_msg.php');

define('EXCLUIR_MSG', ABSPATH. 'crud/delete_msg.php');

define('UPDATE_MSG', ABSPATH. 'crud/update_msg.php');



//Templates
define("TEMPLATE_HEADER", ABSPATH.'template/header.php');

define("TEMPLATE_FOOTER", ABSPATH.'template/footer.php');

define('TEMPLATE_MODAL', ABSPATH. 'template/modal.php');

?>