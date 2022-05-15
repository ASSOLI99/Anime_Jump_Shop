<?php
  shuffle($product_shuffle);
?>
<div class="w-full flex flex-col items-center justify-center mt-9" id="specialPrice">
  <h2 class="text-center font-bold text-2xl my-3">.Special Price</h2>
  <ul class="flex justify-around items-center flex-wrap bg-blue-700 p-2 flex-row mt-4 md:space-x-8 md:mt-0 md:text-sm md:font-medium w-full">
    <li class="c-characters text-white cursor-pointer hover:text-black px-2">Characters</li>
    <li class="c-cosplay text-white cursor-pointer hover:text-black px-2">Cosplay</li>
    <li class="c-items text-white cursor-pointer hover:text-black px-2">Items</li>
    <li class="c-manga text-white cursor-pointer hover:text-black px-2">Manga Books</li> 
  </ul>
<div class="characters container flex flex-row flex-wrap gap-4 justify-center items-center " >
<?php
  shuffle($product_shuffle);
?>
<?php array_map(function($item){ ?>  
<div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('<?php echo $item["item_image"] ?? "./assets/pr-1.jpg"; ?>')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2"><?php echo $item["item_name"] ?? "unknown"; ?></h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">$<?php echo $item["item_price"] ?? "0"; ?></p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="<?php printf("%s?id=%s","./product.php",$item["item_id"]) ?>">Add to Cart</a></button>
  </div>
<?php },$product_shuffle) ?>
</div>
<div class="cosplay container hidden flex-row flex-wrap gap-4 justify-center items-center " >
<?php
  shuffle($product_shuffle);
?>
<?php array_map(function($item){ ?>  
<div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('<?php echo $item["item_image"] ?? "./assets/pr-1.jpg"; ?>')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2"><?php echo $item["item_name"] ?? "unknown"; ?></h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">$<?php echo $item["item_price"] ?? "0"; ?></p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="<?php printf("%s?id=%s","./product.php",$item["item_id"]) ?>">Add to Cart</a></button>
  </div>
<?php },$product_shuffle) ?>
</div>
<div class="items container hidden flex-row flex-wrap gap-4 justify-center items-center " >
<?php
  shuffle($product_shuffle);
?>
<?php array_map(function($item){ ?>  
<div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('<?php echo $item["item_image"] ?? "./assets/pr-1.jpg"; ?>')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2"><?php echo $item["item_name"] ?? "unknown"; ?></h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">$<?php echo $item["item_price"] ?? "0"; ?></p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="<?php printf("%s?id=%s","./product.php",$item["item_id"]) ?>">Add to Cart</a></button>
  </div>
<?php },$product_shuffle) ?>
</div>
<div class="manga container hidden flex-row flex-wrap gap-4 justify-center items-center " >
<?php
  shuffle($product_shuffle);
?>
<?php array_map(function($item){ ?>  
<div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('<?php echo $item["item_image"] ?? "./assets/pr-1.jpg"; ?>')] bg-cover bg-center w-full h-72 text-center md:text-left"><a href="<?php printf("%s?id=%s","./product.php",$item["item_id"]) ?>" class="p-2 text-white bg-blue-700 rounded-full hover:bg-blue-500">See It</a></div>
    <h2 class="item-name my-2"><?php echo $item["item_name"] ?? "unknown"; ?></h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">$<?php echo $item["item_price"] ?? "0"; ?></p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="<?php printf("%s?id=%s","./product.php",$item["item_id"]) ?>">Add to Cart</a></button>
  </div>
<?php },$product_shuffle) ?>
</div>
</div>