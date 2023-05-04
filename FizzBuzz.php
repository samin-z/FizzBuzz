<?php
class FizzBuzz {
    public function fizzBuzzSequence (): void
    {
        for ($i = 1; $i <= 100; $i++) {
          $fizzNumber = ($i % 3 === 0);
          $buzzNumber = ($i % 5 === 0);

          if($fizzNumber && $buzzNumber) {
            echo "FizzBuzz,\n";
          } elseif($fizzNumber) {
            echo "Fizz,\n";
          } elseif($buzzNumber) {
            echo "Buzz,\n";
          } else {
            echo $i.",\n";
          }
        }
    }
}

$sequence = new FizzBuzz();
$sequence->fizzBuzzSequence();
