<?php
$str1='ave a#b a2b a$b a4b a5b a-b acb';
$res=preg_replace('#\S+#', '!', $str1);
echo $res . '<br>';