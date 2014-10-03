<?php
/**
 * Created by Nemogroup.
 *
 * User: marcelo
 * Date: 01/10/14
 * Time: 07:55
 */
namespace mga\event;

use mga\event\EventsException;
use IteratorAggregate;
use Countable;
use mga\event\ListenerIterator;

class ListenerList implements  IteratorAggregate, Countable {

    protected $listeners = array();

    public function addListener(ListenerInterface $new){
        if($this->checkListener($new->getId()) !== false){
            throw new EventsException("Ya existe el oyente con id " . $new->getId() . ".");
        }
        $this->listeners[] = $new;
    }

    /**
     * @param ListenerInterface $new
     * @param $this
     * @throws Exception
     */
    public function checkListener($id)
    {

        foreach ($this->listeners as $key => $listener) {
            if ($listener->getId() == $id) {
                return $key;
            }
        }

        return false;
    }

    public function getListener($pos){
        if(count($this->listeners) == 0) throw new EventsException("No existen oyentes.");
        return $this->listeners[$pos];
    }

    public function count(){
        return count($this->listeners);
    }

    public function issetListener($pos){
        return isset($this->listeners[$pos]);
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
        return new ListenerIterator($this);
    }

}