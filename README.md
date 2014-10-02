   ![EventHandler](user_admin.png "")
EventHandler
============
Administrador de eventos

***USO***

// Creamos el evento

        $event = new EventImpl("click");

// Creamos los oyentes

        $listener = New ListenerImpl(1);
        $event->addListener($listener);

// Instanciamos administrador 

        $handle = EventHandler::getInstance();
        $handle->addEvent($event);
        
// Disparamos evento

        $handle->trigger("click");