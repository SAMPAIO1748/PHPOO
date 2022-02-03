<?php
//  Transitivité : si B hérite de A et C hérite de B alors C hérite de A;
class A
{
    public function test1()
    {
        return 'test 1';
    }

    protected function test()
    {
        return 'test';
    }
}

class B extends A
{
    public function test2()
    {
        return 'test 2';
    }
}

class C extends B
{
    public function test3()
    {
        return 'test 3';
    }

    public function superTest()
    {
        return $this->test(); // On peut appeler une méthode protected de A même si la classe A n'est pas son parent direct.
    }
}

$c = new C;
echo $c->test1() . '<br>';
echo $c->test2() . '<br>';
echo $c->test3() . '<br>';
echo $c->superTest() . '<hr>';
print "<pre>";
print_r(get_class_methods("C")); // Retourne toutes les méthodes de la classe C
print "<pre>";
