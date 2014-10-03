<?php
/**
 * Created by Marcelo Agüero.
 *
 * Date: 01/10/14
 * Time: 09:26
 *
 * @package EventHandler
 */

namespace src\core;

use IteratorAggregate;
use Countable;
use Traversable;
use src\core\EventInterface;
use src\core\EventsException;

class EventList implements  IteratorAggregate, Countable {

    protected $events = array();

    public function addEvent(EventInterface $new){
        if($this->checkEvent($new) === true){
            throw new EventsException("Ya existe el evento " . $new->getName() . ".");
        }
        $this->events[] = $new;
    }

    public function getEvent($pos){
        if($this->issetEvents($pos)){
            return $this->events[$pos];
        }
        throw new EventsException("No existe el evento en la posicion " . $pos . ".");
    }

    protected function checkEvent(EventInterface $search){

        foreach($this->events as $event){
            if($event->getName() == $search->getName()) {
                return true;
            }
        }
        return false;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     */
    public function getIterator()
    {
        return new EventIterator($this);
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count()
    {
        return count($this->events);
    }

    public function issetEvents($pos){
        return isset($this->events[$pos]);
    }

    public function getEventByName($name){

        foreach($this->events as $event){
            if($event->getName() == $name) {
                return $event;
            }
        }

        return new EventsException("No existe el evento.");
    }
}