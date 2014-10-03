<?php
/**
 * Created by Marcelo Agüero.
 *
 *
 * Date: 01/10/14
 * Time: 10:17
 */

namespace event;

use src\core\ListenerInterface;

class ListenerImpl implements ListenerInterface {

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