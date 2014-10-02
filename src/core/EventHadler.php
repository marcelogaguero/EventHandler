<?php
/**
 * Created by Nemogroup.
 *
 * User: marcelo
 * Date: 01/10/14
 * Time: 09:00
 */

namespace src\core;

use src\core\EventList;

class EventHadler {

    private static $instance;
    /**
     * @var EventList $events;
     */
    private static $events;

    final private function __construct(){}

    final public function __clone(){}

    public static function getInstance()
    {

        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
            self::$events = new EventList();
        }

        return self::$instance;
    }

    public function addEvent(EventInterface $event){
        /** @var EventList self::$events */
        self::$events->addEvent($event);
    }

    public function getRegisteredEvents(){
        $names = array();
        foreach(self::$events as $event){
            $names[] = $event->getName();
        }
        return $names;
    }

    public function trigger($eventName){
        try {
            /** @var EventInterface $event */
            $event = self::$events->getEventByName($eventName);
            $event->trigger($eventName);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function clear(){
        self::$events = new EventList();
    }

} 