<?php
//définition du namespace de class B

namespace Application\Models;

//insertion du namespace de la classA pour utiliser ses méthode dans la classB
//l'utilisation du use namespace remplace reauire_once qui utilise beaucoup plus de ressources

use Application\Models\classA;

class ClassB
{
    public function hello()
    {
        $classA = new ClassA();
        $classA->test();
    }
}