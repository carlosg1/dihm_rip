<?php 

// esta clase es utilizada para almacenar temporalmente los valores de los campos en
// cookies locales.

class CookieHandler {
   private $cookieName;

   public function __construct($name) {
      $this->cookieName = $name;
   }

   public function setCookie($value) {
      $nombre = isset($value['nombre']) ? $value['nombre'] : 'vacio';
      $apellido = isset($value['apellido']) ? $value['apellido'] : 'vacio';
      $cuil = isset($value['cuil']) ? $value['cuil'] : 'vacio';
      $expiration = strtotime('30 December 2023');
      setcookie($this->cookieName, json_encode(compact('nombre', 'apellido', 'cuil')), $expiration);
   }

   public function getCookie() {
      $cookie = isset($_COOKIE[$this->cookieName]) ? $_COOKIE[$this->cookieName] : null;
      return $cookie ? json_decode($cookie, true) : ['nombre' => 'vacio', 'apellido' => 'vacio', 'cuil' => 'vacio'];
   }

   public function clearCookie() {
      unset($_COOKIE[$this->cookieName]);
      setcookie($this->cookieName, null, -1);
   }
}

?>

<?php
// Incluimos la clase CookieHandler
require_once 'CookieHandler.php';

// Creamos una nueva instancia de CookieHandler con el nombre de la cookie "cookie_rip"
$cookieHandler = new CookieHandler('cookie_rip');

// Establecemos la cookie con algunos valores
$cookieHandler->setCookie([
   'nombre' => 'Juan',
   'apellido' => 'Pérez',
   'cuil' => '20-12345678-9'
]);

// Obtenemos el valor actual de la cookie
$cookieValue = $cookieHandler->getCookie();
echo "Valores de la cookie:\n";
echo "Nombre: " . $cookieValue['nombre'] . "\n";
echo "Apellido: " . $cookieValue['apellido'] . "\n";
echo "CUIL: " . $cookieValue['cuil'] . "\n";

// Borramos la cookie
$cookieHandler->clearCookie();
echo "Cookie eliminada\n";
?>
