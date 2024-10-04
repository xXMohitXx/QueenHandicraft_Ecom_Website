<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
 <style>
   .home-bg{
   background:url(images/banner.png) no-repeat;
   background-size: cover;
   background-position: center;
}

</style>
</head>
<body style="background-color:#DDD0C8;">
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">
<!-- sliderr code here -->
<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="Bags/b1/Picsart_23-03-05_14-39-29-124.png" alt="">
         </div>
         <div class="content">
            <span>Upto 50% off</span>
            <h3 style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(5,101,120,1) 100%);">Latest Purses</h3>
            <a href="shop.php" class="btn">Shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="Bags/b2/Picsart_23-03-05_15-00-45-616.png" alt="">
         </div>
         <div class="content">
            <span>Upto 50% off</span>
            <h3 style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(5,101,120,1) 100%);">Latest ChainBags</h3>
            <a href="shop.php" class="btn">Shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="Bags/b3/Picsart_23-03-05_15-14-42-421.png" alt="">
         </div>
         <div class="content">
            <span>Upto 50% off</span>
            <h3 style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(5,101,120,1) 100%);">Latest Sidebags</h3>
            <a href="shop.php" class="btn">Shop now</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>
<section style="width: 100%;"> 
   <h1 class="heading" style="color:black;">The Glorious History of Kachchhi Art</h1>

<div>
   <img src="images/stories.jpg" style="float: left; height:400px; width:500px; margin-right:10px; border-radius:5px;"><p style="font-size:16pt; margin:10px;text-align:justify;">Kachchhi art, also known as Kutchi art, is a form of traditional folk art that originated in the Kutch region of Gujarat, India. The art is known for its vibrant colors, intricate designs, and use of various materials such as cloth, leather, and wood.
<br><br>
The history of Kachchhi art can be traced back to the ancient times when the region was inhabited by various tribes such as the Ahirs, Rabaris, and Jats. These tribes had their unique artistic traditions, which were passed down from generation to generation.
<br><br>
In the 16th century, Kutch came under the rule of the Jadeja dynasty, who were great patrons of the arts. They encouraged the development of various art forms, including Kachchhi art, which flourished under their patronage.</p>
</div>
<br><br><br>
<div style="margin-bottom:60px;">
   <img src="images/KutchEmbroidery.jpg" style="float: right; height:400px; width:500px; margin-left:10px; border-radius:5px;"><p style="font-size:16pt; margin:10px;text-align:justify;">During the British colonial period, Kachchhi art faced a decline due to the introduction of modern methods of production and the lack of patronage. However, with the rise of the Indian independence movement, there was a renewed interest in traditional arts and crafts, and Kachchhi art saw a revival.<br><br>

Today, Kachchhi art is still practiced by artisans in the Kutch region and has gained recognition both nationally and internationally. The art form has diversified, and now includes a wide range of products such as clothing, accessories, and home decor items, all with their unique designs and techniques.</p>
</div>

</section>
<!-- product category to be shown here  -->
<section class="category">

   <h1 class="heading" style="color:black; align-self:left;">shop by category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper" >

   <a href="category.php?category=laptop bag" class="swiper-slide slide" style="background-color: #C6BBB4;">
      <img src="Bags/b21/Picsart_23-03-05_16-27-23-265.png" alt="">
      <h3>laptop bag</h3>
   </a>

   <a href="category.php?category=backpack" class="swiper-slide slide"style="background-color: #C6BBB4;">
      <img src="Bags/b22/Picsart_23-03-05_16-44-43-525.png" alt="">
      <h3>backpack</h3>
   </a> 

   <a href="category.php?category=handbag" class="swiper-slide slide" style="background-color: #C6BBB4;">
      <img src="Bags/b5/Picsart_23-03-05_15-20-48-032.png" alt="">
      <h3>handbag</h3>
   </a>

   <a href="category.php?category=shoppingbag" class="swiper-slide slide" style="background-color: #C6BBB4;">
      <img src="Bags/b4/Picsart_23-03-05_15-16-22-265.png" alt="">
      <h3>shoppingbag</h3>
   </a>

   <a href="category.php?category=sidebag" class="swiper-slide slide" style="background-color: #C6BBB4;">
      <img src="Bags/b3/Picsart_23-03-05_15-14-04-773.png" alt="">
      <h3>sidebag</h3>
   </a>

   <a href="category.php?category=purses" class="swiper-slide slide" style="background-color: #C6BBB4;">
      <img src="Bags/b1/Picsart_23-03-05_14-54-31-436.png" alt="">
      <h3>purses</h3>
   </a>

   <a href="category.php?category=chainbags" class="swiper-slide slide" style="background-color: #C6BBB4;">
      <img src="Bags/b2/Picsart_23-03-05_15-09-12-383.png" alt="">
      <h3>chainbags</h3>
   </a>


   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>
<section style="width: 100%;"> 
   <h1 class="heading" style="color:black;">Glimpse of artwork</h1>

<div>
   <img src="images/art.jpg" style="float: left; height:400px; width:49%; border-radius:5px;"><img src="images/Shopping-in-Kutch.jpg" style="float: right; height:400px; width:49%; border-radius:5px;"><p style="font-size:16pt; margin:10px;text-align:justify;">Kachchhi art is not just limited to decorative items but also includes practical items such as clothing, bags, and home decor items. The art form has gained recognition both nationally and internationally and is a source of livelihood for many artisans in the Kutch region.
<br><br>
The most popular form of Kachchhi art is embroidery, which is done on cloth using colorful threads. The embroidery work is known for its intricate designs, which are inspired by nature, mythology, and daily life. The most commonly used stitches in Kachchhi embroidery are chain stitch, satin stitch, and mirror work. Mirror work is a distinctive feature of Kachchhi embroidery, where small pieces of mirrors are sewn onto the cloth to create a glittering effect.
<br><br>
</p>
</div>


</section>


<section class="home-products">

<br><br><br><h1 class="heading" style="color:black;">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <!-- products to be shown here -->
   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide" style="background-color: #C6BBB4">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="" style="border:0.5px solid grey;">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price" style="color:black;"><span>₹</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>




</div>
   <div class="swiper-pagination"></div>
   </div>
</section>
<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>