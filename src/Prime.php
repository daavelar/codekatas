<?php

class TheLargestPrime {

    public function generate( $prime )
    {
        $numbers = [];

        for( $i = 1; $i <= $prime; $i++ ) {
            if( $this->isPrime( $i ) )
                $numbers[] = $i;
        }

        return $numbers;
    }

    function isPrime( $n )
    {
        if( $n <= 0 ) {
            throw new InvalidArgumentException;
        }

        $prime = true;

        for( $i = 2; $i <= $n-1; $i++ ) {
            if( $n%$i == 0 ) {
                $prime = false;
            }
        }

        return $prime;
    }

}
