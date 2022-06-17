<?php

namespace Drupal\module_vishal\Controller;
use Symfony\Component\HttpFoundation\Request;

class vishalcontroller{
    public function yo(){
        $nids = \Drupal::entityQuery('node')->condition('type','article')->condition('status', 1)->execute();
        $nodes =  \Drupal\node\Entity\Node::loadMultiple($nids); 
        kint($nodes);
        die; 
       
        
        $response = new ResourceResponse($a);
   $response->addCacheableDependency($a);
   return $response;
    $query = \Drupal::database()->query('SELECT * FROM node_field_data');
    $a = $query->fetchAll();
    // dump($a);

    return array(
        "#theme" => "tabless",
        "#con" => $a,

    );
}

public function hello(){

    $new = [
        "name" => "vishal",
        "age" => 24,
        "Ocupation" => "software engineer"
    ];
    return array(
        "#theme" => "vishal",
        "#items" => $new,
        "#title" => "I am great"
        
    );





}

public function tyo(){
    $query = \Drupal::service('module_vishal.db');
    
    $s = $query->fetcher("node_field_data");
    return array(
        "#theme" => "tabless",
        "#con" => $s,

    );
}


}
// 1)create a custom block to display some data in table format 


