<?php
function isLeap($year)
{
  return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);
}
//For testing  
for($year=1900; $year<=2024; $year++)
{
  If (isLeap($year))
  {
  echo "$year : LEAP YEAR<br/>\n";
}
 else
{
    echo "$year : Not a leap year<br/>\n";
  }
}
?>