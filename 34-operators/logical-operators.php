<?php
  /*
    Example           Name          Result
    -------------------------------------------------------------------
    $a and $b	        And	          true if both $a and $b are true.
    $a or $b	        Or	          true if either $a or $b is true.
    $a xor $b	        Xor	          true if either $a or $b is true, but not both.
    ! $a	            Not	          true if $a is not true.
    $a && $b	        And	          true if both $a and $b are true.
    $a || $b	        Or	          true if either $a or $b is true.
  */

  echo "<h2>And</h2>";
  var_dump( true && true );
  var_dump( false and true );
  var_dump( false and false );
  echo "<hr>";

  echo "<h2>Or</h2>";
  var_dump( true || true );
  var_dump( false or true );
  var_dump( false or false );
  echo "<hr>";

  echo "<h2>Not</h2>";
  var_dump( ! true );
  var_dump( ! false );
  echo "<hr>";

  echo "<h2>XOR / Exlusive OR</h2>";
  var_dump( true xor true );
  var_dump( false xor true );
  var_dump( false xor false );
  echo "<hr>";

  echo "<h2>NAND / Not AND</h2>";
  var_dump( ! (false and true) );
  echo "<hr>";

  echo "<h2>NOR / Not OR</h2>";
  var_dump( ! (false or true) );
  echo "<hr>";