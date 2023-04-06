<?php
include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];


if(!isset($user_id))
{
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<?php include 'header.php'; ?>

<div class="heading">
    <h3>About us</h3>
    <p><a href="home.php">Home</a> / About </p>
</div>

<section class="about">

<div class="flex">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>
    <div class="content">
        <h3>A Few Things You Can Do On Booktown</h3>
        <p>See what books your friends are reading.
Track the books you're reading, have read, and want to read.
Check out your personalized book recommendations. Our recommendation engine analyzes 20 billion data points to give suggestions tailored to your literary tastes.
Find out if a book is a good fit for you from our community’s reviews.</p>
        <a href="contact.php" class="btn">Contact us</a>
    </div>
</div>

</section>

<section class="reviews">
    <h1 class="title">Client's review</h1>
    <div class="box-container">
    <div class="box">
        <img src="images/pic-1.png" alt="">
        <p>Superb ! very professional. I purchased some law books. It was not possible for me to carry the books from Delhi to Mumbai as the books were of big & fat. They quickly couriered it to my Mumbai address. Must visit store.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Liam jackson</h3>
    </div>

    <div class="box">
        <img src="images/pic-2.png" alt="">
        <p>I have been a regular user of this portal for all my book needs. My experience so far has been impressive. It has both good collection and very good customer friendly service. Even though it is an online portal but still has an experice of buying from a shop. I strongly recommend this portal for anyone who wants to buy books. My request would be to add more books in English too.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Daina William</h3>
    </div>
        <div class="box">
        <img src="images/pic-3.png" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus, sunt sapiente soluta ipsam veritatis hic quae, assumenda sit odio, commodi perferendis doloremque incidunt rem nisi natus eius eveniet illo.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Nial Cooper</h3>
    </div>

    <div class="box">
        <img src="images/pic-4.png" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus, sunt sapiente soluta ipsam veritatis hic quae, assumenda sit odio, commodi perferendis doloremque incidunt rem nisi natus eius eveniet illo.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Grecy Tomlinson</h3>
    </div>
    <div class="box">
        <img src="images/pic-1.png" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus, sunt sapiente soluta ipsam veritatis hic quae, assumenda sit odio, commodi perferendis doloremque incidunt rem nisi natus eius eveniet illo.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Chris bills</h3>
    </div>
    <div class="box">
        <img src="images/pic-6.png" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae necessitatibus, sunt sapiente soluta ipsam veritatis hic quae, assumenda sit odio, commodi perferendis doloremque incidunt rem nisi natus eius eveniet illo.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Mioko Sensang</h3>
    </div>
    </div>
</section>

<section class="authors">

<h1 class="title">Greate Authors</h1>
<div class="box-container">

<div class="box">
    <img src="images/author-1.jpg" alt="">
    <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
    </div>
    <h3>Jane Aaron</h3>
</div>

<div class="box">
    <img src="images/author-2.jpg" alt="">
    <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
    </div>
    <h3>Selena geller</h3>
</div>

<div class="box">
    <img src="images/author-3.jpg" alt="">
    <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
    </div>
    <h3>Chandler bing</h3>
</div>

<div class="box">
    <img src="images/author-4.jpg" alt="">
    <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
    </div>
    <h3>Richal Green</h3>
</div>

<div class="box">
    <img src="images/author-5.jpg" alt="">
    <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
    </div>
    <h3>Joseph Trbanix  </h3>
</div>

<div class="box">
    <img src="images/author-6.jpg" alt="">
    <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
    </div>
    <h3>Susan Browns</h3>
</div>

</div>
</section>


<?php include 'footer.php';?>
<script src="js/script.js"></script>
</body>
</html>