<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Jump</title>
    <!-- font family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">    
    <!-- TailWind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- slider CDN -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.theme.min.css" integrity="sha512-8vDOoSF7kZUYkn7BiQulRCTvpRoenljlkQDZhM6+IqDJi5jHDH9QEYH9NfMBB8LlqiYc7O17YGxbGx7dOxKrpw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.core.min.css" integrity="sha512-tYKqO78H3mRRCHa75fms1gBvGlANz0JxjN6fVrMBvWL+vOOy200npwJ69OBl9XEsTu3yVUvZNrdWFIIrIf8FLg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font-awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!-- header start -->
    <!-- navigation -->
    <nav class="sticky top-0 z-10 my-nav bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
            <span class="logo self-center text-xl font-bold whitespace-nowrap dark:text-white">A/J</span>
        </a>
      
        <div class="hidden justify-between items-center w-full md:flex md:w-auto" id="mobile-menu-2">
          <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
            <li>
              <a href="#" class="nav-item block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">On Sale</a>
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
              <a href="#" class="nav-item block py-2 pr-4 pl-3 text-gray-700 border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
            </li>
            <li>
              <a href="#" class="nav-item block py-2 pr-4 pl-3 text-gray-700 border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
            <li>
                <a href="#" class="nav-item block py-2 pr-4 pl-3 text-gray-700 border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Coming soon</a>
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
    <!-- header end -->
      <!-- main start -->
      <!-- top slider start -->
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <div class="slider-cover glide__slides">
            <div class="glide__slide inside1 flex justify-center items-center">
              <div class="main-text flex flex-col justify-center items-center">
                      <p class="text-center mb-9">Buy this amazing offer With 50% discount</p>
                      <button class="p-1 mt-9 rounded bg-[#DFF6FF] text-[#051367] font-bold hover:text-[#DFF6FF] hover:bg-[#051367]"><a href="./product.php">Shop Now</a></button>
              </div>
            </div>
            <div class="glide__slide inside2 flex justify-center items-center">
              <div class="main-text flex flex-col justify-center items-center">
                <p class="text-center mb-9">Buy this amazing offer With 50% discount</p>
                <button class="p-1 mt-9 rounded bg-[#DFF6FF] text-[#051367] font-bold hover:text-[#DFF6FF] hover:bg-[#051367]"><a href="./product.php">Shop Now</a></button>
               </div>
            </div>
            <div class="glide__slide inside3 flex justify-center items-center">
              <div class="main-text flex flex-col justify-center items-center">
                <p class="text-center mb-9">Buy this amazing offer With 50% discount</p>
                <button class="p-1 mt-9 rounded bg-[#DFF6FF] text-[#051367] font-bold hover:text-[#DFF6FF] hover:bg-[#051367]"><a href="./product.php">Shop Now</a></button>
              </div>
            </div>
          </div>
        </div>

        <div class="glide__bullets" data-glide-el="controls[nav]">
          <button class="glide__bullet" data-glide-dir="=0"></button>
          <button class="glide__bullet" data-glide-dir="=1"></button>
          <button class="glide__bullet" data-glide-dir="=2"></button>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
          <button class="arrows glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-arrow-left-long"></i></button>
          <button class="arrows glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
        </div>
<!-- top slider end -->
<!-- one sale start -->
<div class="w-full flex flex-col items-center justify-center mt-9" id="onSale">
  <h2 class="text-center font-bold text-2xl my-3">.One Sale</h2>
<div class="container flex flex-row flex-wrap gap-4 justify-center items-center " >
  <div class="shop-item md:w-96 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
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
  <div class="shop-item md:w-96 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
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
  <div class="shop-item md:w-96 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
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

<!-- one sale end -->
<!-- special price start -->
<div class="w-full flex flex-col items-center justify-center mt-9" id="specialPrice">
  <h2 class="text-center font-bold text-2xl my-3">.Special Price</h2>
  <ul class="flex justify-around items-center flex-wrap bg-blue-700 p-2 flex-row mt-4 md:space-x-8 md:mt-0 md:text-sm md:font-medium w-full">
    <li class="c-characters text-white cursor-pointer hover:text-black px-2">Characters</li>
    <li class="c-cosplay text-white cursor-pointer hover:text-black px-2">Cosplay</li>
    <li class="c-items text-white cursor-pointer hover:text-black px-2">Items</li>
    <li class="c-manga text-white cursor-pointer hover:text-black px-2">Manga Books</li> 
  </ul>
<div class="characters container flex flex-row flex-wrap gap-4 justify-center items-center " >
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-5.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-1.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-1.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  
</div>
<div class="cosplay container hidden flex-row flex-wrap gap-4 justify-center items-center " >
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-4.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-1.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-1.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  
</div>
<div class="items container hidden flex-row flex-wrap gap-4 justify-center items-center " >
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-1.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-1.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-1.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  
</div>
<div class="manga container hidden flex-row flex-wrap gap-4 justify-center items-center " >
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-6.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-1.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60 ">
    <div class="item-img bg-[url('./assets/pr-1.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Fairy tail collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">149.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-2.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Bleach collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">124.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  <div class="shop-item md:w-1/6 bg-gray-100 flex flex-col items-center p-1 pb-2 sm:w-60">
    <div class="item-img bg-[url('./assets/pr-3.jpg')] bg-cover bg-center w-full h-72"></div>
    <h2 class="item-name my-2">Naruto collection</h2>
    <p class="item-stars">
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-solid fa-star"></i></span>
      <span class="text-yellow-300"><i class="fa-regular fa-star"></i></span>
    
    </p>
    <p class="item-price font-bold">99.99$</p>
    <button class="item-button rounded border bg-blue-700 hover:bg-yellow-300 p-1 text-white hover:text-black"><a href="./product.php">Add to Cart</a></button>
  </div>
  
</div>
</div>
<!-- special price end -->
<!-- new Collection start -->

<div class="w-full flex flex-col items-center justify-center mt-9" id="newCollection">
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
<!-- new Collection end -->
<!-- latest blogs start -->
<div class="Last-blogs my-12 flex justify-center">
  <div class="container">
    <h2 class="text-center font-bold text-xl">.Latest Blogs</h2>
    <hr>
    <div class="upcoming flex flex-row justify-around my-3 gap-3 flex-wrap">
      <div class="left-side w-72">
        <p class="text-lg md:text-left text-center">Upcoming Manga</p>
        <div class="img-container bg-[url('assets/new-1.jpg')] bg-cover w-full h-60  "></div>
        <p class="text-gray-400 md:text-left text-center text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum aut dolores praesentium in repellendus minima dolore repudiandae placeat delectus totam.</p>
        <a href="#" class="block md:text-left text-center text-blue-400 hover:text-blue-500">Go Somewhere</a>
      </div>
      <div class="right-side w-72">
        <p class="text-lg md:text-left text-center">Upcoming Products</p>
        <div class="img-container bg-[url('assets/new-2.jpg')] bg-cover w-full h-60"></div>
        <p class="md:text-left text-center text-gray-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum aut dolores praesentium in repellendus minima dolore repudiandae placeat delectus totam.</p>
        <a href="#" class="block md:text-left text-center text-blue-400 hover:text-blue-500">Go Somewhere</a>
      </div>
      <div class="right-side w-72">
        <p class="text-lg md:text-left text-center">Upcoming Cosplay</p>
        <div class="img-container bg-[url('assets/new-3.jpg')] bg-cover w-full h-60"></div>
        <p class="md:text-left text-center text-gray-400 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum aut dolores praesentium in repellendus minima dolore repudiandae placeat delectus totam.</p>
        <a href="#" class="block md:text-left text-center text-blue-400 hover:text-blue-500">Go Somewhere</a>
      </div>
    </div>
  </div>
</div>
<!-- latest blogs end -->
<!-- footer start -->
<footer id="footer" class="w-full">
<div class="p-3 container gap-4 flex mx-auto flex-row flex-wrap justify-center lg:justify-between lg:gap-1">
  <div class="about  w-60 flex flex-col items-center md:items-start ">
   <h2><a href="#" class="text-center md:text-left text-white font-bold text-2xl my-1 hover:text-blue-300">A/J</a></h2>
    <p class="text-gray-300 text-center md:text-left ">Anime Jump Shop a web store that will give you a spital offers</p>
  </div>
  <div class="email w-60 flex flex-col items-center md:items-start">
    <h2 class="text-center md:text-left text-white font-bold text-2xl my-1">Newsletters</h2>
    <form action="" class="Ebox flex flex-row ">
      <input type="email" placeholder="Email*" class="w-4/6 focus:outline-none hover:bg-gray-100">
      <input type="submit" value="Subscribe" class="bg-blue-500 cursor-pointer hover:bg-blue-400 w-2/6">
    </form>
  </div>
  <div class="w-60 flex flex-col items-center md:items-start">
    <h2 class="text-center md:text-left text-white font-bold text-2xl my-1">Information</h2>
    <ul class="infoList flex flex-col items-center md:items-start">
      <li><a href="#" class="my-1 text-white text-center hover:text-blue-300">About Us</a></li>
      <li><a href="#" class="my-1 text-white text-center hover:text-blue-300">Delivery Information</a></li>
      <li><a href="#" class="my-1 text-white text-center hover:text-blue-300">Privacy Policy</a></li>
      <li><a href="#" class="my-1 text-white text-center hover:text-blue-300">Terms & Conditions</a></li>
    </ul>
  </div>
  <div class="accounts w-60 flex flex-col items-center md:items-start ">
    <h2 class="text-center md:text-left text-white font-bold text-2xl my-1">Account</h2>
    <ul class="infoList flex flex-col items-center md:items-start">
      <li><a href="#" class="my-1 text-white text-center hover:text-blue-300">My Account</a></li>
      <li><a href="#" class="my-1 text-white text-center hover:text-blue-300">Order History</a></li>
      <li><a href="#" class="my-1 text-white text-center hover:text-blue-300">Wish List</a></li>
      <li><a href="#" class="my-1 text-white text-center hover:text-blue-300">Newsletters</a></li>
    </ul>
  </div>
</div>
<p class="text-white text-center mt-3 p-1">&copy;All Copyrights <span class="text-blue-300">ABD</span> Reverse</p>
</footer>
<!-- footer end -->
<!-- js files #################-->
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
  new Glide('.glide').mount()
</script>
    <script src="js/main.js"></script>
</body>
</html>