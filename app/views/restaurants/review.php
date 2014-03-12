<!doctype html>
<html>
<head>
    <title>Yelp</title>
</head>
<body>
<h1>Yelp</h1>

<h3>Reviews for <?php echo $restaurant->restaurant_name; ?></h3>
<?php if(!empty($restaurant->facebook_page)) {
    echo "<b>Facebook Activity</b> <br>";
    $id = $restaurant->facebook_page;
    $facebook = new \Yelp\Facebook\FacebookPage($id);
    $fb = $facebook->get();
    echo "Likes: " . $fb->likes . "<br>";
    echo "Checkins: " . $fb->checkins . "<br>";
} ?>

<?php foreach ($reviews as $review) : ?>
       <?php
    for($i = 0; $i < $review->rating; $i++) {
        echo "<img src='http://upload.wikimedia.org/wikipedia/commons/f/f0/Star_Ouro.gif' height='10px' width='10px'>";
    } ?>
    <p><?php echo $review->review_description; ?></p>
    <p>------------------------------------------</p>
    <br>
<?php endforeach; ?>

</table>
</body>