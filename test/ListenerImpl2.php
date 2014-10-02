<?php
/**
 * Created by Nemogroup.
 *
 * User: marcelo
 * Date: 01/10/14
 * Time: 14:04
 */

namespace event;

use src\core\ListenerInterface;

class ListenerImpl2 implements ListenerInterface {

    private $id;

    function __construct($id){
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function notify()
    {
        $_SESSION['notify'][$this->id] = "Evento capturado ".__CLASS__;
    }

} 