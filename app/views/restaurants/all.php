<!doctype html>
<html>
<head>
    <title>Yelp</title>
</head>
<body>
<h1>Yelp</h1>

    <?php foreach ($restaurants as $restaurant) : ?>
       <h4><?php echo $restaurant->restaurant_name; ?></h4>
        <p><?php echo $restaurant->type; ?></p>
        <p><?php echo $restaurant->city; ?></p>
        <p>Facebook Page:
            <?php
            $id = $restaurant->facebook_page;
            if(empty($id)) {
                echo "Not on Facebook";
            } else {
                $id = $restaurant->facebook_page;
                $facebook = new \Yelp\Facebook\FacebookPage($id);
                $link = $facebook->getUrl();
                $url = "<a href=";
                $url .= $link;
                $url .= ">here</a>";
                echo $url;
            }
            ?>

        </p>
        <a href="">View Reviews</a></p>
        <p>------------------------------------------</p>
        <br>
    <?php endforeach; ?>
</table>
</body>