

<?php
/*$cb = new Couchbase("127.0.0.1:8091", "", "", "default");
$cb->set("a", 1);
var_dump($cb->get("a"));*/

/*echo '<pre>';
print_r(get_loaded_extensions());
echo '</pre>';*/


 
$connection = new Couchbase("127.0.0.1:8091");
/*for($i=0;$i<10;$i++) {
    $doc = array(
        'title' => "This is Post $i"
    );
    $connection->set("post_$i", json_encode($doc));
}*/
 
/*echo "<ul>";
for($i=0;$i<10;$i++) {
    $post = json_decode($connection->get("post_$i"));
    echo "<li>" . $post->title .  "</li>";
}
echo "</ul>";*/

echo "\nRead file\n";
$image = file_get_contents('3.png');
$image_data = base64_encode($image);
$connection->set("img", $image_data, 10);

$to_save = base64_decode(  $connection->get("img") );

file_put_contents("./output.jpg", $to_save);


?>