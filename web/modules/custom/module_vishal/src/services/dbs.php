<?php

namespace Drupal\module_vishal\services;
use Drupal\Core\Database\Connection;

class dbs {
    protected $x;

    public function __construct(Connection $bb){
        $this->x = $bb;
    }

    public function fetcher($d){
        return $this->x->query('SELECT * FROM '.$d)->fetchAll();
    }

    



}