<?php
#---pozivanje klase---#
$eng = new ng1np();
#---varijable---#
$eng->charset = 'UTF-8';
$eng->keywords = '1111, 0110, 1001, 0000';
$eng->author = 'hightech';
$eng->description = '1111';
$eng->title = '1111';

$eng->sadrzaj = array( 
	array(
	"proces1" => "1001",
	"proces2" => "0110",
	"proces3" => "1111",
	"proces4" => "0000"
	),
	array(
	"proces1" => "0110",
        "proces2" => "1111",
        "proces3" => "1001",
        "proces4" => "0000"
	),
	array(
	"proces1" => "1111",
        "proces2" => "0000",
        "proces3" => "0110",
        "proces4" => "1001"
	)
);

$eng->strana = array( 
        array(
        "server1" => "0001",
        "server2" => "1110",
        "server3" => "1000"
        ),
        array(
        "server1" => "0010",
        "server2" => "1010",
        "server3" => "1011"
        )
);



#---render metoda---#
echo $eng->render('up/second.tpl');

