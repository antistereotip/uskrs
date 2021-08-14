<?php
#---pozivanje klase---#
$eng = new ng1np();

#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = '0000, 0110, 1001, 1111';
$eng->author = 'antistereotip';
$eng->description = '0000';
$eng->title = '0000';

$eng->sadrzaj = array( 
	array(
	"proces1" => "1111",
	"proces2" => "0110",
	"proces3" => "1001",
	"proces4" => "0000"
	),
	array(
	"proces1" => "1001",
  	"proces2" => "1111",
  	"proces3" => "0000",
  	"proces4" => "0110"
	),
	array(
	"proces1" => "0110",
  	"proces2" => "1001",
  	"proces3" => "0000",
  	"proces4" => "1111"
	)
);

$eng->strana = array( 
        array(
        "server1" => "0111",
        "server2" => "1000",
        "server3" => "0001"
        ),
        array(
        "server1" => "0101",
        "server2" => "0100",
        "server3" => "1101"
        )
);




#---metoda render---#
echo $eng->render('up/fourth.tpl');
