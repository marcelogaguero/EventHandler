<?php
/**
 * Created by Nemogroup.
 *
 * User: marcelo
 * Date: 01/10/14
 * Time: 08:00
 */
namespace src\core;

interface ListenerInterface {
    public function getId();
    public function notify();
} 