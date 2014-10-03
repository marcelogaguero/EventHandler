<?php
/**
 * Created by Marcelo Agüero.
 *
 * Date: 01/10/14
 * Time: 07:52
 *
 * @package EventHandler
 */
namespace src\core;

use src\core\ListenerList;
use src\core\ListenerInterface;

abstract class EventsAbstract {
    protected $listeners;

    function __construct(){
        $this->listeners = new ListenerList();
    }

    public function addListener(ListenerInterface $listener){
        $this->listeners->addListener($listener);
    }

} 