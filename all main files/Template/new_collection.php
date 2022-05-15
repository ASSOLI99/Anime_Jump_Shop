<?php
shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['new_collection_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
?>
<div class="w-full flex flex-col items-center justify-center mt-9" id="newCollection">
  <h2 class="text-center font-bold text-2xl my-3">.New Collection</h2>
<div class="container flex flex-row flex-wrap gap-4 justify-center items-center " >
<?php foreach($product_shuffle as $item){ ?>
<div class="shop-item md:w-96 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class=" item-img bg-[url('<?php echo $item["item_image"] ?? "./assets/pr-1.jpg"; ?>')] bg-cover bg-center w-full h-72 text-center md:text-left"><a href="<?php printf("%s?id=%s","./product.php",$item["item_id"]) ?>" class="p-2 text-white bg-blue-700 rounded-full hover:bg-blue-500">See It<i class="fa-solid fa-up-right-from-square"></i></a></div>
    <h2 class="item-name my-2"><?php echo $item["item_name"]?? "Unknown"; ?></h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">$<?php echo $item["item_price"] ?? "0" ?></p>
     <form method="post">
  <input type="hidden" name="item_id" value="<?php $item["item_id"]??"1"; ?>">
  <input type="hidden" name="user_id" value="<?php 1; ?>">
  <button type="submit" name="new_collection_submit" class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black">Add to Cart</button>
  </form>
  </div>
  <?php } ?>
</div>
</div>