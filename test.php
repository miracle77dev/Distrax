<?php 


$UniqueId = substr(str_shuffle(time().rand(100000, 900000)),0,6) ;
print($UniqueId);