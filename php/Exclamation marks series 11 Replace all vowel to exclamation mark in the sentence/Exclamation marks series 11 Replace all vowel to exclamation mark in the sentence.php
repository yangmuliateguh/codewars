<?php

function replace(string $s): string {
  $vowels = "aeiouAEIOU";

  for ($i = 0; $i < strlen($s); $i++) {
      if (strpos($vowels, $s[$i]) !== false) {
          $s[$i] = '!';
      }
  }
  
  return $s;
}