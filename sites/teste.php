<?php
define('mDir', "sites");
//cena a alterar
define('mLocalFilepath', $_SERVER['SCRIPT_NAME']);
define('mRoot', $_SERVER["DOCUMENT_ROOT"].substr(mLocalFilepath, 0, strrpos(mLocalFilepath, mDir)));

// $lastSlash = strrpos(MROOT,"/");
echo mLocalFilepath . "<br />";
echo mDir . "<br />";
echo mRoot . "<br />";

// $doc_root = $_SERVER["DOCUMENT_ROOT"];
// echo $doc_root;

// $files = glob($doc_root.mRoot."images/portfolio/cozinhas/branco/*.jpg*");
$files = glob(mRoot."images/portfolio/cozinhas/branco/*.jpg*");
// echo $doc_root.mRoot."images/porfolio/portas/*.*";


echo count($files);
natsort($files);
print_r($files);


// for ($i = 1; $i < count($files); $i++) {
// 
	// $image = $files[$i];
// 
	// print $image . "<br />";
	// echo '<img src="' . $image . '" alt="Random image" />' . "<br /><br />";
// }

//
// $dirname = mRoot. "images";
// echo $dirname."<br />";
// $images =  glob("{$dirname}.*");
// echo count($images);
// foreach ($images as $image) {
// echo '<img src="' . $image . '" /><br />';
// echo "string";
// }

// $some_relative_path = "sites";
// $server_url = $_SERVER["SERVER_NAME"];
// $doc_root = $_SERVER["DOCUMENT_ROOT"];
// echo $doc_root;
// echo $url = $server_url.'/'. $some_relative_path."<br />";
// echo $dir = $doc_root.'/'. $url;
   ?>
