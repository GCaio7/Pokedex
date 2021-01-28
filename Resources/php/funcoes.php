<?php
  function convertToDecimal($value)
  {
    return number_format((float)($value * 0.1), 1, '.', '');
  }
?>