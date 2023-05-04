<?php
class FizzBuzz {
    public function fizzBuzzSequence (): void
    {
      $fizzBuzzStack = [];
  
      for ($i = 1; $i <= 100; $i++) {
      $thisLoop = [];
        if($i % 3 === 0){
          $thisLoop[] = 'Fizz';
        }
        if($i % 5 === 0){
          $thisLoop[] = 'Buzz';
        }
        $fizzBuzzStack[] = empty($thisLoop) ? $i : implode('',$thisLoop);
      }
      echo implode(',',$fizzBuzzStack);
    }
}

$sequence = new FizzBuzz();
$sequence->fizzBuzzSequence();
