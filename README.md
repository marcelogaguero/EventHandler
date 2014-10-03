   ![EventHandler](user_admin.png "")
EventHandler
============
Administrador de eventos

***INSTALACIÓN***
Para instalarlo con composer

        {
            "repositories": [
                {
                    "type": "git",
                    "url": "https://github.com/marcelogaguero/EventHandler.git"
                }
            ],

            "require": {
                "mga/Events": "master"
            },

            "minimum-stability": "dev"

        }

***USO***

// Instanciamos un evento

        $event = new EventImpl("click");

// Creamos un oyente

        Para esto debemos crear una clase que implemente la interfaz ListenerInterface
        > class ListenerImpl implements ListenerInterface { }

// Instanciamos el oyentes

        $listener = New ListenerImpl(1);
        $event->addListener($listener);

// Instanciamos administrador 

        $handle = EventHandler::getInstance();
        $handle->addEvent($event);
        
// Disparamos evento

        $handle->trigger("click");