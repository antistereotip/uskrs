<?php
#---pozivanje klase---#
$eng = new ng1np();

#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = '0000, 0110, 1001, 1111';
$eng->author = 'admin';
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
	"proces1" => "1001",
        "proces2" => "1111",
        "proces3" => "0110",
        "proces4" => "0000"
	),
	array(
	"proces1" => "0000",
        "proces2" => "1111",
        "proces3" => "0110",
        "proces4" => "1001"
	)
);

$eng->strana = array( 
        array(
        "server1" => "1000",
        "server2" => "0111",
        "server3" => "0000"
        ),
        array(
        "server1" => "1101",
        "server2" => "0101",
        "server3" => "1111"
        )
);




#---metoda render---#
echo $eng->render('up/default.tpl');

