<?php
//$Library = "c:\\users\\john\\source\\repos\\fiction\\Library\\";
$Library = "c:\\sbbs\\webv4\\root\\library\\mylibrary\\";
$AuthorDir = $_GET["author"] ;
$book = $_GET["book"];
$path = "/library/mylibrary/" . $AuthorDir . "/" . $book . "/";
?>
<html>
<head>
<title>Calibre Library List</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/darkly/bootstrap.min.css">
<script src="https://kit.fontawesome.com/79aa4f4cb7.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid clearfix">	
	<div class="row justify-content-md-center">
		<div class="col-md-auto bg-primary">
			<div>&nbsp;</div>
			<div class="card">
                    <div class="card-header">
<h1 class="text-center">Book</h1></div>
<div class="card-body">
<p class="text-center"><img src="<?=$path?>cover.jpg" /></p>

<?php 
$iterator = new FilesystemIterator($Library . $AuthorDir . "\\". $book);
$filelist = array();
foreach($iterator as $entry) {
    if (strpos($entry->getFilename(), "epub") == 0) {
       // $filelist[] = $entry->getFilename();
        // Do nothing for now
    } else { ?>
        <p class="text-center"><a href="<?=$path . $entry->getFileName();?>"><?=$entry->getFileName();?></a></p>
    <?php }
} 
?>

<h3 class="text-center">Meta Data</h3>
<?php
// Load and Parse metadata
// $file= simplexml_load_file($Library . $AuthorDir . $book . 'metadata.opf');
?>
</div>
</div>
<div>&nbsp;</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>