<?php
/**
 * Created by Nemogroup.
 *
 * User: marcelo
 * Date: 01/10/14
 * Time: 07:52
 */
namespace mga\event;

use mga\event\ListenerList;
use mga\event\ListenerInterface;

abstract class EventsAbstract {
    protected $listeners;

    function __construct(){
        $this->listeners = new ListenerList();
    }

    public function addListener(ListenerInterface $listener){
        $this->listeners->addListener($listener);
    }

} 