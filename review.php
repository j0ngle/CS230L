<?php 
require 'includes/dbhandler.php';
require 'includes/header.php'; 
require 'includes/review-helper.php';

    $mid = $_GET['id'];
	$sql = "SELECT * FROM movieentry WHERE id=$mid";
    $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)){
                echo 'SQL Failure';
			}
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	$row = mysqli_fetch_assoc($result);

	$sql2 = "SELECT * FROM pictures WHERE mid=$mid;";
	$picQuery = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($picQuery);

?>

<main>
    <span id="testAvg"></span>
    <div class="container" align="center">
    <link rel="stylesheet" href="css/review.css">
        <div class="my-auto">
            <form id="review-form" action="includes/review-helper.php" method="post">

            <div class="break">
                <h1><?php echo $row['title']?></h1>
                <div id="slides" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slides" data-slide-to="0" class="active"></li>
                        <li data-target="#slides" data-slide-to="1"></li>
                        <li data-target="#slides" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/movie_entry_images/<?php echo $row2['pic1']?>" class="d-block mx-auto" style="width:960px; height:540px">
                        </div>
                        <div class="carousel-item">
                            <img src="images/movie_entry_images/<?php echo $row2['pic2']?>" class="d-block mx-auto" style="width:960px; height:540px">
                        </div>
                        <div class="carousel-item">
                            <img src="images/movie_entry_images/<?php echo $row2['pic3']?>" class="d-block mx-auto" style="width:960px; height:540px">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
			    </div>
            </div>

            <div class="container">
                <i class = "fa fa-star fa-2x star-rev" data-index="1"></i>
                <i class = "fa fa-star fa-2x star-rev" data-index="2"></i>
                <i class = "fa fa-star fa-2x star-rev" data-index="3"></i>
                <i class = "fa fa-star fa-2x star-rev" data-index="4"></i>
                <i class = "fa fa-star fa-2x star-rev" data-index="5"></i>
            </div>

            <div class="break">
                <h2>Description</h2>
                <p><?php echo $row['descript']?></p>
            </div>

            <div class="break">
                <h2>Critic Review</h2>
                <p><?php echo $row['review']?></p>
            </div>

            <div class="form-group" style="margin-top: 15px;">
                <label class="title-label" for="review-title" style="font-size:16px; font-weight:bold;">Leave your own review!</label>
                <input type="text" name="review-title" id="review-title" style="width: 100%; margin-bottom: 10px;">
                <textarea class="form-control" id="review-text" name="review" cols="50" rows="3" placeholder="Enter a comment..."></textarea>
                <input type="hidden" name="rating" id="rating">
                <input type="hidden" name="item_id" value="<?php echo $_GET['id'];?>">
            </div>
            <div class="form-group">
                <button class="btn btn-outline-danger" id="review-submit" name="review-submit" type="submit" style="width:100%;">Review</button>
            </div>
            </form>
        </div>
    </div>
    <span id="review_list"></span>
</main>

<script type="text/javascript">

var rateIndex = -1;
var id = <?php echo $_GET['id']?>;
$(document).ready(function() {
    reset_star();

    // get reviews
    xhr_getter('display-reviews.php?id=', "review_list");
    //avg();
    xhr_getter('includes/get-ratings.php?id=', "testAvg");

    if (localStorage.getItem('rating') != null) {
        setStars(parseInt(localStorage.getItem('rating')));
    }
    $('.star-rev').on('click', function() {
        rateIndex = parseInt($(this).data('index'));
        localStorage.setItem('rating', rateIndex);
    });
    $('.star-rev').mouseover(function() {
        reset_star();
        var currIndex = parseInt($(this).data('index'));
        setStars(currIndex);

    });
    $('.star-rev').mouseleave(function() {
        reset_star();

        if (rateIndex != -1) {
            setStars(rateIndex);
        }
    });


    function reset_star() {
        $('.star-rev').css('color', 'grey');
    }

    function setStars(max) {
        for (var i = 0; i < max; i++) {
            $('.star-rev:eq('+i+')').css('color', 'goldenrod');
        }
        document.getElementById('rating').value = parseInt(localStorage.getItem('rating'));
        console.log(id);
    }

    //Used to interchangeably send GET requests for review display data. 
    function xhr_getter(prefix, element) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status=200) {
                document.getElementById(element).innerHTML = this.responseText;
            }
        };
        url = prefix+id;
        xhttp.open("GET", url, true);
        xhttp.send();
    }
});
</script>