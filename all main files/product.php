<!-- header file -->
<?php include("header.php") ?>
    
<!-- nav start -->
<nav class="sticky top-0 z-10 my-nav bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="./index.php" class="flex items-center">
        <span class="logo self-center text-xl font-bold whitespace-nowrap dark:text-white">A/J</span>
    </a>
  
    <div class="hidden justify-between items-center w-full md:flex md:w-auto" id="mobile-menu-2">
      <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
        <li>
          <a href="./index.php" class="nav-item block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">On Sale</a>
        </li>
        <li>
          <a id="dropCategory" class="cursor-pointer nav-item block py-2 pr-4 pl-3 text-gray-700 border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Category <i class="fa-solid fa-caret-down"></i></a>
          <ul id="categorys" class="z-50 hidden bg-blue-800 p-2 flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li class="text-white text-left cursor-pointer hover:text-black"><a href="#specialPrice" class="c-characters">Characters</a></li>
            <li class="text-white text-left cursor-pointer hover:text-black"><a href="#specialPrice" class="c-cosplay">Cosplay</a></li>
            <li class="text-white text-left cursor-pointer hover:text-black"><a href="#specialPrice" class="c-items">Items</a></li>
            <li class="text-white text-left cursor-pointer hover:text-black"><a href="#specialPrice" class="c-manga">Manga Books</a></li> 
          </ul>
        </li>
        <li>
          <a href="#" class="nav-item block py-2 pr-4 pl-3 text-gray-700 border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Products <i class="fa-solid fa-caret-down"></i></a>
        </li>
        <li>
          <a href="./index.php" class="nav-item block py-2 pr-4 pl-3 text-gray-700 border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
        </li>
        <li>
          <a href="./index.php" class="nav-item block py-2 pr-4 pl-3 text-gray-700 border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
        <li>
            <a href="./index.php" class="nav-item block py-2 pr-4 pl-3 text-gray-700 border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Coming soon</a>
          </li>
      </ul>
    </div>
    <button type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:focus:ring-gray-600" id="phone-drop">
      <i class="fa-solid fa-bars"></i>
</button>
    <div class="right-items flex flex-row items-center justify-center">
      <a href="./cart.php" class="flex items-center bg-gray-200 mx-2 p-2 rounded-full">
        <span class="mx-1">4</span><span><i class="fa-solid fa-cart-shopping"></i></span>
      </a>
    <div class="mx-1 flex items-center">
      <div class="flex flex-col items-center">
      <button type="button" class="flex mr-3 text-sm bg-gray-300 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
        <img class="w-8 h-8 rounded-full" src="assets/user-solid.svg" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
          <div class="py-3 px-4">
              <span class="drop-nav-item block text-sm text-gray-900 dark:text-white">abdullah</span>
              <span class="drop-nav-item block text-sm font-medium text-gray-500 truncate dark:text-gray-400">name@assoli.com</span>
            </div>
           
          <ul class="py-1" aria-labelledby="dropdown">
          <li>
            <a href="#" class="drop-nav-item block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
          </li>
          <li>
            <a href="#" class="drop-nav-item block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
          </li>
          <li>
            <a href="#" class="drop-nav-item block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
          </li>
          <li>
            <a href="#" class="drop-nav-item block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
      </div>
  </div>
   
  </div>
  
  </div>
    </div>
    
  </nav>
<!-- nav end -->
<!-- product start -->

  <div class="product w-full my-10">
      <div class="container mx-auto flex flex-col justify-center items-center md:justify-start md:flex-row flex-wrap">
          <div class="left-side p-5 w-5/6 md:w-1/2 h-96 flex flex-col ">
            <div class="img-holder w-6/6 md:w-4/6 h-96 bg-center bg-[url('./assets/pr-2.jpg')] bg-cover" ></div>
            <div class="flex flex-row w-6/6 md:w-4/6">
                <button class="p-2 bg-red-500 hover:bg-red-600 text-white w-1/2"><a href="./cart.php">Proceed To Buy</a></button>
                <button class="p-2 bg-yellow-300 hover:bg-yellow-400 text-black w-1/2">Add To Cart </button>
            </div>
          </div>
          <div class="right-side  w-5/6 md:w-1/2 flex flex-col">
            <h2 class="text-xl">Bleach Stuff</h2>
            <p class="text-sm">bleach anime</p>
            <p class="item-stars">
                <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
                <span class="text-blue-400">20,564 ratings | 1000+ answered question</span>
            </p>
            <hr>
            <p>M.R.P <del> $162.00 </del></p>
            <p>Deal Price <span class="text-red-400">$152.00</span> include of taxes</p>
            <p>You Save: <span class="text-red-400">$10.00</span></p>
            <div class="icons flex flex-row  flex-wrap justify-between mt-4 gap-4">
                <div class="flex flex-col justify-center md:justify-start">
                    <p class="text-center md:text-left text-blue-400"><i class="p-3 mb-4 rounded-full bg-gray-100 text-blue-400 fa-solid fa-retweet"></i></p>
                    <p class="text-center md:text-left text-blue-400">10 Days</p>
                    <p class="text-center md:text-left text-blue-400">Replacement</p>
                </div>
                <div class="flex flex-col justify-center md:justify-start">
                    <p class="text-center md:text-left text-blue-400"><i class="p-3 mb-4 rounded-full bg-gray-100 text-blue-400 fa-solid fa-truck-fast"></i></p>
                    <p class="text-center md:text-left text-blue-400">Daily Tuition</p>
                    <p class="text-center md:text-left text-blue-400">Delivered</p>
                </div>
                <div class="flex flex-col justify-center md:justify-start">
                    <p class="text-center md:text-left text-blue-400"><i class="p-3 mb-4 rounded-full bg-gray-100 text-blue-400 fa-solid fa-check-double"></i></p>
                    <p class="text-center md:text-left text-blue-400">1 Year</p>
                    <p class="text-center md:text-left text-blue-400">Warranty</p>
                </div>
            </div>
            <hr class="my-3">
            <p>Delivery by Mar 29-Apr 1</p>
            <p>Sold by <span>Bleaacher</span>(4.5 out of 5 | 18.198 ratings)</p>
            <p><i class="text-blue-400 fa-solid fa-location-dot"></i> Delivered to Customer -42232 </p>
            <div class="flex flex-col md:flex-row justify-between">
                <div class="flex flex-row gap-2 justify-center m-1 w-1/2">
                    <p>color:</p>
                    <ul class="flex flex-row gap-2 justify-between">
                        <li class="bg-blue-700 p-5 w-5 h-5 rounded-full cursor-pointer"></li>
                        <li class="bg-red-700 p-5 w-5 h-5 rounded-full cursor-pointer"></li>
                        <li class="bg-yellow-500 p-5 w-5 h-5 rounded-full cursor-pointer"></li>
                    </ul>
                </div>
                <div class="flex flex-row gap-2 justify-center m-2 w-1/2">
                    <p>Qty:</p>
                    <div class="flex flex-row justify-center items-center">
                        <button id="inc" class="px-1 bg-gray-100"><i class="hover:text-blue-500 fa-solid fa-arrow-up"></i></button>
                        <input id="quantity" value="1" class="bg-gray-100 text-center w-10" disabled  type="text">
                        <button id="dec" class="px-1 bg-gray-100"><i class="hover:text-blue-500 fa-solid fa-arrow-down"></i></button>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </div>
<!-- product end -->
<!-- new collection start -->
<div class="w-full flex flex-col items-center justify-center my-9" id="newCollection">
    <h2 class="text-center font-bold text-2xl my-3">.New Collection</h2>
  <div class="container flex flex-row flex-wrap gap-4 justify-center items-center " >
    <div class="shop-item md:w-70 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
      <div class="item-img bg-[url('./assets/pr-1.jpg')] bg-cover bg-center w-full h-72"></div>
      <h2 class="item-name my-2">Fairy tail collection</h2>
      <p class="item-stars">
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
      
      </p>
      <p class="item-price font-bold"><del class="font-light text-gray-500">  $200</del> 150$</p>
      <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
    </div>
    <div class="shop-item md:w-70 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
      <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
      <h2 class="item-name my-2">Bleach collection</h2>
      <p class="item-stars">
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
      
      </p>
      <p class="item-price font-bold"><del class="font-light text-gray-500">  $200</del> 150$</p>
      <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
    </div>
    <div class="shop-item md:w-70 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
      <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
      <h2 class="item-name my-2">Naruto collection</h2>
      <p class="item-stars">
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
      
      </p>
      <p class="item-price font-bold"><del class="font-light text-gray-500">  $200</del> 150$</p>
      <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
    </div>
    <div class="shop-item md:w-70 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
      <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
      <h2 class="item-name my-2">Naruto collection</h2>
      <p class="item-stars">
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
        <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
      
      </p>
      <p class="item-price font-bold"><del class="font-light text-gray-500">  $200</del> 150$</p>
      <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
    </div>
  </div>
  </div>
<!-- new collection end -->
<!-- footer file -->
<?php include("footer.php") ?>