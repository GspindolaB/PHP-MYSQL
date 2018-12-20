<?php
/**
 * Public: Podemos acceder desde cualquierugar
 * Private: Se puede acceder a ella unicamente desde la clase que fue creada
 * Protected: Solo se puede acceder a ella dentro de la clase y las clases heredadas
 */
class Usuario{
    protected $nombre;
    private $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo(){
        return $this->correo;
    }
}

class Miembro extends Usuario{
    public function mostrarCorreo(){
        return 'Este es el correo' . $this->correo;
    }
}

$guillermo = new Usuario('Guillermo', 'gspindolab@gmail.com');
echo $guillermo->mostrarInfo();

$josh = new Miembro('Josh', 'Mickolz');
echo $josh->mostrarCorreo();