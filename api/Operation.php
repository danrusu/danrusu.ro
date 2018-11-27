<?php


trait Operation {

    private function calculate($n1, $n2, $operation) {

        switch ($operation) {

            case 1:

                return $n1 + $n2;

            case 2:

                return $n1 * $n2;

            case 3:

                if ($n2 == 0) {

                    return "Division by 0 is not allowed!";
                }

                return $n1 / $n2;
        }
    }


    public function getJsonResult($n1, $n2, $operation) {

        $result = '{ "numbers": [ "' . $n1

            . '", "' . $n2 . '" ],'

            . '"operation": "' . $operation . '",'

            . '"result": "'

            . self::calculate($n1, $n2, $operation)

            . '" }';

        //return json_encode($result);

        return $result;
    }

}

