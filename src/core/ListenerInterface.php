<?php
/**
 * Created by Marcelo Agüero.
 *
 * Date: 01/10/14
 * Time: 08:00
 *
 * @package EventHandler
 */
namespace src\core;

interface ListenerInterface {
    public function getId();
    public function notify();
} 