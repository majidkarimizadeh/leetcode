<?php

class Solution {

    const BELOW_TEN = ["", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"];
    const BELOW_TWENTY = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"];
    const BELOW_HUNDRED = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"];
    
    /**
     * @param Integer $num
     * @return String
     */
    function numberToWords($num) {
        if ($num === 0) {
            return "Zero";
        }
        
        return $this->helper($num);
    }
    
    private function helper($num) {
        
        $result = "";
        if ($num < 10) {
            $result = self::BELOW_TEN[$num];
        } else if ($num < 20) {
            $result = self::BELOW_TWENTY[$num - 10];
        } else if ($num < 100) {
            $result = self::BELOW_HUNDRED[$num / 10] . " " . $this->helper($num % 10);
        } else if ($num < 1000) {
            $result = $this->helper($num / 100) . " Hundred " . $this->helper($num % 100);
        } else if ($num < 1000000) {
            $result = $this->helper($num / 1000) . " Thousand " . $this->helper($num % 1000);
        } else if ($num < 1000000000) {
            $result = $this->helper($num / 1000000) . " Million " . $this->helper($num % 1000000);
        } else {
            $result = $this->helper($num / 1000000000) . " Billion " . $this->helper($num % 1000000000);
        }
        
        return trim($result);
    }
}
