<?php

/**
 * Author: Rowan Burgess
 */
class Bzaikia_Api_Helper_Debug extends Mage_Core_Helper_Abstract
{
    private function get_callstack($delim = "\n")
    {
        $dt = debug_backtrace();
        $cs = '';
        foreach ($dt as $t) {
            $cs .= $t['file'] . ' line ' . $t['line'] . ' calls ' . $t['function'] . "()" . $delim;
        }

        return $cs;
    }

    public function toLog()
    {
        Mage::log($this->get_callstack(), null, 'disabled_product.txt');
    }

    public function toFirePhp()
    {
        $stack = $this->get_callstack();
        foreach (explode("\n", $stack) as $line) {
            Mage::helper('firephp')->send($line);
        }
    }
}