<?php

require( '_common.php' );

$q = isset( $_GET['q'] ) ? $_GET['q'] : 'mariokart';
$tags = $instagram->searchTags( $q );


require( '_header.php' );
?>

<h2>Search for tag "<?php echo $q ?>" (<?php echo count( $tags ) ?> results)</h2>

<ol>
<?php foreach( $tags as $tag ): ?>
	<li><a href="?example=tag.php&tag=<?php echo $tag ?>"><?php echo $tag ?></a></li>
<?php endforeach ?>
</ol>

<?php require( '_footer.php' ) ?>