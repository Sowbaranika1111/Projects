<?php
$linkTextPairs = array(
    array("link" => "#", "text" => "Book Your Adventure"),
    array("link" => "#", "text" => "Know About Travel Plans")
);
?>

<div class="container">
    <div class="wrapper mt-5 mb-5  border border-success border-3 shadow shadow-lg rounded">
        <div class="row">
            <div class="col-md-6">
                <div class="feature-box p-5 ">
                    <h1 class="mt-2">Welcome to our website</h1>
                    <p class="mt-4 mb-5 mx-auto ">"Embark on a journey where every step is a dance with discovery,
                        and every horizon reveals a
                        tapestry of new possibilities. With Iniya Travels, let the world be your canvas, painted
                        with the colors of adventure, culture, and the beauty of unexplored landscapes. Where the
                        destination is not just a place on the map but a chapter in your story. Join us, and let the
                        wanderlust in your heart unfold its wings. Travel, Explore, Live."</p>
                    <?php foreach ($linkTextPairs as $pair) : ?>
                        <a href="<?php echo $pair['link']; ?>" class="border border-2 rounded pt-1 pb-1 px-2 me-3"><?php echo $pair['text']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6 container-fluid">
                <img src="css/images/flightCorner.jpg" alt="Flight-Window-Image" class="Flight-Window-Image mt-5 ml-2 pt-5">
            </div>
        </div>
    </div>
</div>
