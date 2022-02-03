<?php

// la classe peut être instanciée même si elle est finale
final class Application // final indique que la classe ne peut pas être hérité
{
    public function lancementApplication()
    {
        return "L'appli se lance comme cela !";
    }
}

//class Extension extends Application {}

$app = new Application;

class Application2
{
    final public function lancementApplication() // une méthode finale ne peut pas être redéfinie ou surcharger 
    {
        return "L'appli se lance comme cela ! ";
    }
}

class Extension2 extends Application2
{
    // public function lancementApplication() { }
    // Cela provoque une erreur car on ne peut pas surcharger ou redéfinir la méthode
    // lancementApplication() car elle est final dans la classe mère (Application 2)
}

$ext2 = new Extension2();
echo $ext2->lancementApplication();
