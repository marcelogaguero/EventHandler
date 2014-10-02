<?php
/**
 * Created by Nemogroup.
 *
 * User: marcelo
 * Date: 01/10/14
 * Time: 09:04
 */

namespace src\core;

interface EventInterface {
    public function getName();
    public function getListeners();
    public function trigger($eventName);
} 