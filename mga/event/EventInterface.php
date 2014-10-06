<?php
/**
 * Created by Marcelo Agüero.
 *
 * User: marcelo
 * Date: 01/10/14
 * Time: 09:04
 */

namespace mga\event;

interface EventInterface {
    public function getName();
    public function getListeners();
    public function trigger($eventName);
} 