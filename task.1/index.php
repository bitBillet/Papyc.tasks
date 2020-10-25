<?php
    function brackets(string $text): bool
    {
        $openIndex   = 0;
        $closedIndex = 0;
        for ($i = 0; $i < mb_strlen($text); $i++) {
            $symbol = $text[$i];
            if ($symbol === '(') {
                $openIndex++;
            } else if($symbol === ')') {
                $closedIndex++;
            }
        }

        if ($openIndex === $closedIndex) {
            return true;
        } else return false;
    }
    brackets('5 * (4 - 2)');
?>