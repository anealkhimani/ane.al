<?php

  $html = file_get_contents("https://ycharts.com/companies/AAPL/enterprise_value");
  $dom = new DOMDocument();
  @$dom->loadHTML($html);

  $element = $dom->getElementById('pgNameVal');
  $value = $element->nodeValue;
  $exploded = explode(" ", $value);
  echo "<html>";
  echo "<body>";
  echo "<ul><li>" . $exploded[0] . "</li></ul>";
  echo "</body>";
  echo "</html>";
?>
