<?php
class FizzBuzz {
    public function fizzBuzzSequence (): void
    {
        for ($i = 1; $i <= 100; $i++) {
          $fizzNumer = ($i % 3 === 0);
          $buzzNumber = ($i % 5 === 0);

          if($fizzNumer && $buzzNumber) {
            echo "FizzBuzz,\n";
          } elseif($fizzNumer) {
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
