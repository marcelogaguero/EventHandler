<?php
namespace event {
    use mga\event\EventHandler;

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
         * @var EventHandler $handle;
         */
        $handle = EventHandler::getInstance();
        $handle->addEvent($event);

        $handle->trigger("click");

        echo trim(implode("<br/>", $_SESSION['notify']));

    } catch(\Exception $e){
        echo $e->getMessage();
    }

}