<?php
#---pozivanje klase---#
$eng = new ng1np();

#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = '0000, 0110, 1001, 1111';
$eng->author = 'uskrs';
$eng->description = '0000';
$eng->title = '0000';

$eng->sadrzaj = array( 
	array(
	"proces1" => "0000",
	"proces2" => "0110",
	"proces3" => "1001",
	"proces4" => "1111"
	),
	array(
	"proces1" => "1111",
  	"proces2" => "1001",
  	"proces3" => "0000",
  	"proces4" => "0110"
	),
	array(
	"proces1" => "0110",
  	"proces2" => "1001",
  	"proces3" => "1111",
  	"proces4" => "0000"
	)
);

$eng->strana = array( 
        array(
        "server1" => "1110",
        "server2" => "0001",
        "server3" => "1000"
        ),
        array(
        "server1" => "1101",
        "server2" => "0100",
        "server3" => "0101"
        )
);




#---metoda render---#
echo $eng->render('up/fifth.tpl');
