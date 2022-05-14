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

<!-- shopping cart start -->

<div class="shopping-cart">
    <div class="container mx-auto">
        <h2 class="text-2xl mt-5">Shopping Cart</h2>
        <div class="main flex flex-row flex-wrap justify-between">
        <div class="product-side w-full lg:w-4/6">

        <div class="product w-full flex flex-row justify-between border-t pt-3 my-3">
            
            <div class="left-side w-5/6 lg:w-1/2 flex flex-row gap-4">
                <div class="img-holder bg-[url('./assets/pr-1.jpg')] w-1/3 h-40 bg-cover"></div>
                <div class="main-text w-2/3">
                    <h3 class="text-xl mb-5">Bleach Stuff</h3>
                    <p class="text-sm">by bleaacher</p>
                    <p class="text-sm item-stars">
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
                        <span class="text-blue-400">20,564 ratings</span>
                    </p>
                    <div class="flex flex-row justify-start mt-3">
                        <button id="inc" class="h-10 px-1 bg-gray-100"><i class="hover:text-blue-500 fa-solid fa-arrow-up"></i></button>
                        <input id="quantity" value="1" class="h-10 bg-gray-100 text-center w-10" disabled  type="text">
                        <button id="dec" class="px-1 bg-gray-100 h-10"><i class="hover:text-blue-500 fa-solid fa-arrow-down"></i></button>
                        <button class="text-red-400 border-r mx-2 px-1">Delete</button>
                        <button class="text-red-400">Save for later</button>
                    </div>
                </div>
            </div>
            <div class="right-side w-1/6 lg:w-1/2 flex justify-end">
                <p class="text-red-400 text-xl">$<span id="product-price">152</span></p>
            </div>
        </div>
        <div class="product w-full flex flex-row justify-between border-t pt-3 my-3">
            
            <div class="left-side w-5/6 lg:w-1/2 flex flex-row gap-4">
                <div class="img-holder bg-[url('./assets/pr-1.jpg')] w-1/3 h-40 bg-cover"></div>
                <div class="main-text w-2/3">
                    <h3 class="text-xl mb-5">Bleach Stuff</h3>
                    <p class="text-sm">by bleaacher</p>
                    <p class="text-sm item-stars">
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
                        <span class="text-blue-400">20,564 ratings</span>
                    </p>
                    <div class="flex flex-row justify-start mt-3">
                        <button id="inc" class="h-10 px-1 bg-gray-100"><i class="hover:text-blue-500 fa-solid fa-arrow-up"></i></button>
                        <input id="quantity" value="1" class="h-10 bg-gray-100 text-center w-10" disabled  type="text">
                        <button id="dec" class="px-1 bg-gray-100 h-10"><i class="hover:text-blue-500 fa-solid fa-arrow-down"></i></button>
                        <button class="text-red-400 border-r mx-2 px-1">Delete</button>
                        <button class="text-red-400">Save for later</button>
                    </div>
                </div>
            </div>
            <div class="right-side w-1/6 lg:w-1/2 flex justify-end">
                <p class="text-red-400 text-xl">$<span id="product-price">152</span></p>
            </div>
        </div>
        <div class="product w-full flex flex-row justify-between border-t pt-3 my-3">
            
            <div class="left-side w-5/6 lg:w-1/2 flex flex-row gap-4">
                <div class="img-holder bg-[url('./assets/pr-1.jpg')] w-1/3 h-40 bg-cover"></div>
                <div class="main-text w-2/3">
                    <h3 class="text-xl mb-5">Bleach Stuff</h3>
                    <p class="text-sm">by bleaacher</p>
                    <p class="text-sm item-stars">
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
                        <span class="text-blue-400">20,564 ratings</span>
                    </p>
                    <div class="flex flex-row justify-start mt-3">
                        <button id="inc" class="h-10 px-1 bg-gray-100"><i class="hover:text-blue-500 fa-solid fa-arrow-up"></i></button>
                        <input id="quantity" value="1" class="h-10 bg-gray-100 text-center w-10" disabled  type="text">
                        <button id="dec" class="px-1 bg-gray-100 h-10"><i class="hover:text-blue-500 fa-solid fa-arrow-down"></i></button>
                        <button class="text-red-400 border-r mx-2 px-1">Delete</button>
                        <button class="text-red-400">Save for later</button>
                    </div>
                </div>
            </div>
            <div class="right-side w-1/6 lg:w-1/2 flex justify-end">
                <p class="text-red-400 text-xl">$<span id="product-price">152</span></p>
            </div>
        </div>
        <div class="product w-full flex flex-row justify-between border-t pt-3 my-3">
            
            <div class="left-side w-5/6 lg:w-1/2 flex flex-row gap-4">
                <div class="img-holder bg-[url('./assets/pr-1.jpg')] w-1/3 h-40 bg-cover"></div>
                <div class="main-text w-2/3">
                    <h3 class="text-xl mb-5">Bleach Stuff</h3>
                    <p class="text-sm">by bleaacher</p>
                    <p class="text-sm item-stars">
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
                        <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
                        <span class="text-blue-400">20,564 ratings</span>
                    </p>
                    <div class="flex flex-row justify-start mt-3">
                        <button id="inc" class="h-10 px-1 bg-gray-100"><i class="hover:text-blue-500 fa-solid fa-arrow-up"></i></button>
                        <input id="quantity" value="1" class="h-10 bg-gray-100 text-center w-10" disabled  type="text">
                        <button id="dec" class="px-1 bg-gray-100 h-10"><i class="hover:text-blue-500 fa-solid fa-arrow-down"></i></button>
                        <button class="text-red-400 border-r mx-2 px-1">Delete</button>
                        <button class="text-red-400">Save for later</button>
                    </div>
                </div>
            </div>
            <div class="right-side w-1/6 lg:w-1/2 flex justify-end">
                <p class="text-red-400 text-xl">$<span id="product-price">152</span></p>
            </div>
        </div>
    </div>
    <div class="final-price w-full lg:w-2/6 p-3">
        <div class="box w-full border flex flex-col h-60  justify-center items-center">
        <p class="p-3 mb-3 text-center border-b text-green-500"><i class="fa-solid fa-check"></i> Your order is eligible for FREE Delivery</p>
        <p class="p-3 text-center mb-3">Subtotal ( <span id="item-subtotal">4</span>item ): <span id="final-price" class="text-red-400">$152.00</span></p>
        <button class="w-2/3 text-black bg-yellow-300 hover:bg-yellow-400 p-3">Proceed to Buy</button>
    </div>
    </div>
    </div>
</div>  
</div>

<!-- shopping cart end -->

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
  <!-- footer start -->
<!-- footer file -->
<?php include("footer.php") ?>