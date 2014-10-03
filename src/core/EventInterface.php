<?php
/**
 * Created by Marcelo Agüero.
 *
 * Date: 01/10/14
 * Time: 09:04
 *
 * @package EventHandler
 */

namespace src\core;

interface EventInterface {
    public function getName();
    public function getListeners();
    public function trigger($eventName);
} 