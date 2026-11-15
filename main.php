<?php
function calculatePrice(int|float $qty, int|float $price) {
return ($qty * $price) - 15000;
}