<?php
/**
 * Created by Nemogroup.
 *
 * User: marcelo
 * Date: 01/10/14
 * Time: 10:11
 */

namespace event;


use src\core\EventInterface;
use src\core\EventsAbstract;

class EventImpl extends EventsAbstract implements EventInterface {

    private $name;

    function __construct($name){
        $this->name = $name;
        parent::__construct();
    }

    public function getName()
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