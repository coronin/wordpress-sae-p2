<?php
/*
    Template Name: All in Entry
    Use HTML to display content

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <title>TAN School of Innovation &raquo; Blank</title>
</head>
<body><p>This page is empty.</p></body>
</html>

*/
?>

<?php while (have_posts()) : the_post();

$c = new SaeCounter();
  $cc = 'page'.$post->ID;
  if ( $c->create($cc) ) {
    $c->set($cc, 1);
  } else {
    $c->incr($cc); }

  $raw_entry = get_the_content();
  echo str_replace(
    array("$$$$", "$$$"),
    array(rand(6,9), rand(0,2)),
    $raw_entry );

endwhile; ?>