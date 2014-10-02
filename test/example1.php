<?php
namespace event {
    use src\core\EventHadler;

    require_once (__DIR__."/../src/autoload.php");
    require_once("EventImpl.php");
    require_once("ListenerImpl.php");
    require_once("ListenerImpl2.php");

    try {
        // Creamos el evento
        $event = new EventImpl("click");
        // Creamos los oyentes
        $listener = New ListenerImpl(1);
        $event->addListener($listener);

        $listener2 = new ListenerImpl2(2);
        $event->addListener($listener2);

        /**
         * @var EventHadler $handle;
         */
        $handle = EventHadler::getInstance();
        $handle->addEvent($event);

        $handle->trigger("click");

    } catch(\Exception $e){
        echo $e->getMessage();
    }

}