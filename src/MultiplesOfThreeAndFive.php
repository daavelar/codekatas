<?php

class MultiplesOfThreeAndFive {

    public function multiplesSumUntil( $until )
    {
        $multiplos = $this->obtendoMultiplosDe3e5Ate( $until );
        
        return array_sum( $multiplos );
    }

    /**
     * @param $until
     * @return array
     */
    protected function obtendoMultiplosDe3e5Ate( $until )
    {
        $multiplos = [];

        for( $i = 1; $i < $until; $i++ ) {
            if( $i%3 == 0 || $i%5 == 0 ) {
                $multiplos[] = $i;
            }
        }

        return $multiplos;
    }
}
