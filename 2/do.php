<?php
// Дан код:
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}

$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

/* Что он выведет на каждом шаге? Почему?
Вывод кода: 1 2 3 4. Свойство $x в классе объявлено статическим, то есть не теряет своего значения после каждого обращения
к методу объекта. Таким образом при первом обращении к методу foo() значение переменной оператором инкремента увеличивается
на единицу. Так происходит на каждом последующем шаге, независимо от того, для какого объекта вызывается метод foo().
*/

// Немного изменим п.5:
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}

class B extends A {
}

$a1 = new A();
$b1 = new B();
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();

/* Объясните результаты в этом случае.
Вывод кода: 1 1 2 2. Свойство $x по прежнему объявлено статическим, однако новые объекты создаются по-другому: первый
создается из родительского класса A, а второй - из дочернего класса B. Таким образом при первом вызове метода foo()
объекта $a1 значение свойства $x увеличивается на единицу. То же происходит при первом вызове метода foo()
объекта $b1 для его свойства $x. При повторном вызове свойство $x объекта $a1 снова увеличивается на единицу и уже
равняется 2. То же происходит при повторном вызове метода foo() объекта $b1.
*/