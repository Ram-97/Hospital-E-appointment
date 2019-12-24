<?php

$msg="your mail is";
$headers="From:tgram031197@gmail.com";

$s=mail("ram031197@gmail.com","my sub",$msg,$headers);
if($s)
{
echo "success";
}
else
{
echo "fail";
}
?>