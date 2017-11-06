<?php
 // design pattern : Modèle de conception : c'est la réponse trouvée par des développeurs pour répondre à une prroblématique rencontrée par la communauté

 // singleton : c'est un DP qui répond répond à la question comment créer une classe qui soit instanciable UNE SEULE FOIS (un unique objet existera de cette classe)

 class Singleton{
     private static $instance = NULL;  // deviendra un objet de Singleton

     private function __construct(){} // class non instanciable

     private function __clone(){} // class non clonable

     public static function getInstance(){
         if (is_null(self::$instance)){
             self::$instance = new Singleton;
            //  self::$instance = new self;
         }
         return self::$instance;
     }
 }

$singleton  = Singleton::getInstance(); // contient l'unique objet de la classe Singleton
