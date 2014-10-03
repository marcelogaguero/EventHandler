<?php
/**
 * Created by Marcelo Agüero.
 *
 *
 * Date: 01/10/14
 * Time: 10:11
 */

namespace event;


use mga\event\EventInterface;
use mga\event\EventsAbstract;

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