<?php

class Fibonacci {

    public function generate( $total )
    {
        $sequence[0] = 1;
        $sequence[1] = 2;

        for( $i = 2; $i <= $total-1; $i++ ) {
            $sequence[$i] = $sequence[$i-2]+$sequence[$i-1];
        }

        return $sequence;
    }
}
