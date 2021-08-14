<?php
include 'set/fnc.php';
#--------pocetak kompresije---------#
ob_start("kompresija");
?>

<?php include 'inc/header.php'; ?>
<?php include 'inc/meni.php'; ?>
<?php
echo '<p>';
$folder = 'inc/';
echo '&#8594; Size of folder /inc: ' . folderSize($folder) . ' bytes';
echo '</p>';
?>

<?php
echo '<p>';
$file = 'up/fifth.tpl';
echo '&#8594; Size of file /up/fifth.tpl: ' . $filesize = filesize($file) . ' bytes';
echo '</p>';
?>

<section>
<?php foreach ($this->sadrzaj as $row) { ?>
	<div>
	<h1> Proces 1: <?php echo $row['proces1']; ?></h1>
	<h2> Proces 2: <?php echo $row['proces2']; ?><h2>
	<h3> Proces 3: <?php echo $row['proces3']; ?></h3>
	<h4> Proces 4: <?php echo $row['proces4']; ?></h4><br /><b> &#8592;</b>
	</div>		
<?php } ?>
</section>

<aside>
<?php foreach ($this->strana as $row) { ?>
        <div>
        <h1> Server 1: <?php echo $row['server1']; ?></h1>
        <h2> Server 2: <?php echo $row['server2']; ?><h2>
        <h3> Server 3: <a href="<?php echo '?route='.$row['server3']; ?>"><?php echo $row['server3']; ?></a></h3><br ><b> &#8592;</b>
        </div>
<?php } ?>
</aside>

<?php include 'inc/footer.php'; ?>
