<?php
  $product_shuffle=$product->getData();
  shuffle($product_shuffle);
?>
<div class="w-full flex flex-col items-center justify-center mt-9" id="onSale">
  <h2 class="text-center font-bold text-2xl my-3">.One Sale</h2>
<div class="container flex flex-row flex-wrap gap-4 justify-center items-center " >
  <?php foreach($product_shuffle as $item){ ?>
<div class="shop-item md:w-96 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('<?php echo $item["item_image"] ?? "./assets/pr-1.jpg"; ?>')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2"><?php echo $item["item_name"]?? "Unknown"; ?></h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold"><del class="font-light text-gray-500">$<?php echo $item["item_price"]+50 ?? "0" ?>$</del> $<?php echo $item["item_price"]?? "0" ?></p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <?php } ?>
</div>
</div>
