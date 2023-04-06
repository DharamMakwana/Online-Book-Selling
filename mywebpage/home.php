<?php
include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];


if(!isset($user_id))
{
    header('location:login.php');
}

if(isset($_POST['add_to_cart']))
{
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $check_cart_numbers = mysqli_query($conn,"SELECT * FROM `cart` WHERE name ='$product_name' AND user_id = '$user_id'")or die('Query failed');

    if(mysqli_num_rows($check_cart_numbers)>0)
    {
        $message[] = 'Already added to cart';
    }
    else
    {
        mysqli_query($conn,"INSERT INTO `cart`(user_id, name, price, quality, image) VAlUES('$user_id','$product_name','$product_price','$product_quantity','$product_image') ") or die('Query failed');
        $message[] = 'Product added to cart!';

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<?php include 'header.php'; ?>

 <section class="home">
    <div class="content">
        <h3>Hand Picked Book to your door.</h3>
        <p>Well well! that's right. Here are all the fiction, non-fiction, adventure, whatever the hell you want :)! you will get this right in front of your door! and you know what's so exciting? seasons are about to start yaayy!! you know what is it mean. get 50% to 80% off! So checkout for sake of love</p>
        <a href="about.php" class="white-btn">Discover more</a>
    </div>
 </section>

 <section class="products">

 <h1 class="title" style="color:white ;">Latest Products</h1>

    <div class="box-container">
        <?php
            $select_products = mysqli_query($conn,'SELECT * FROM`products` LIMIT 6') or die('query failed');
            if(mysqli_num_rows($select_products)>0)
            {
                while($fetch_products = mysqli_fetch_assoc($select_products))
                {

               
        ?>
       <form action="" method="post" class="box">
            <img class='image' src="uploaded_img/<?php echo $fetch_products['image'];?>" alt="">
            <div class="name">
                <?php echo $fetch_products['name'];?>
            </div>
            <div class="price">$
                <?php echo $fetch_products['price'];?>/-
            </div>
            <input type="number" min="1" name="product_quantity" value="1" class="qty">
            <input type="hidden" name="product_name" value="<?php echo $fetch_products['name'];?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_products['price'];?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_products['image'];?>">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">


       </form>
    <?php 
     }
            }
            else{
                echo '<p class="empty">No products added yet!</p>';
            }
    ?>        
    </div>

    <div class="load-more" style="margin-top: 2rem; text-align:center">
            <a href="shop.php" class="option-btn">Load more</a>
    </div>

 </section>

<section class="about">

<div class="flex">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>
    <div class="content">
        <h3>About us</h3>
        <p>Booktown is the world's largest site for readers and book recommendations. Our mission is to help people find and share books they love. Goodreads launched in January 2007.</p>
        <a href="about.php" class="btn">Read more</a>
    </div>
</div>

</section>

<section class="home-contact">
    <div class="content">
    <h3>A Message From Our Co-Founder</h3>
    <p>When I was in second grade, I discovered the Hardy Boys series. Ever since, I've loved to read — both for fun and to improve my mind. And I'm always looking for the next great book.

One afternoon while I was scanning a friend's bookshelf for ideas, it struck me: when I want to know what books to read, I'd rather turn to a friend than any random person or bestseller list.

So I decided to build a website – a place where I could see my friends' bookshelves and learn about what they thought of all their books. Elizabeth, my co-founder (and now my wife) wrote the site copy and I wrote the code. We started in my living room, motivated by the belief that there was a better way to discover and discuss good books, and that we could build it.

Goodreads is that site. It is a place where you can see what your friends are reading and vice versa. You can create "bookshelves" to organize what you've read (or want to read). You can comment on each other's reviews. You can find your next favorite book. And on this journey with your friends you can explore new territory, gather information, and expand your mind. 

Knowledge is power, and power is best shared among readers. </p>
    <a href="contact.php" class="white-btn">Contact us</a>
    </div>
</section>

<?php include 'footer.php';?>
<script src="js/script.js"></script>
</body>
</html>