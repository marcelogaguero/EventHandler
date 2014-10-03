<?php
/**
 * Created by Nemogroup.
 *
 * User: marcelo
 * Date: 03/10/14
 * Time: 09:32
 */

namespace mga\event;

use mga\event\EventsAbstract;
use mga\event\EventInterface;
use mga\event\EventsException;

class EventImpl extends EventsAbstract implements EventInterface {
    private $id;
    private $name;

    function __construct($name){
        $this->id = uniqid();
        $this->name = $name;
        parent::__construct();
    }

    final public function getId(){
        return $this->id;
    }

    final public function setId(){
        throw new EventsException("No se pude cambiar el identificador");
    }

    final public function setName(){
        throw new EventsException("No se pude cambiar el nombre");
    }

    final public function getName()
    {
        return $this->name;
    }

    public function getListeners()
    {
        return $this->listeners;
    }

    public function trigger($eventName)
    {
        foreach($this->listeners as $listener){
            $listener->notify();
        }
    }
} 