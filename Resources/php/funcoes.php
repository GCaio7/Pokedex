<?php
  function formatHeight($height)
  {
    return number_format((float)($height * 0.1), 2, '.', '');
  }

  function formatWeight($weight)
  {
    return number_format((float)($weight * 0.1), 2, '.', '');
  }
?>