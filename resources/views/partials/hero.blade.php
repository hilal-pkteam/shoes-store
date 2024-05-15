<div class="container flex flex-col-reverse md:flex-row overflow-x-hidden text-center md:text-start">

      <div class="child w-full md:w-3/5 lg:w-2/5 md:my-auto md:mx-12 px-8">
      
         <h1 class="text-3xl md:text-4xl md:w-full md:font-medium">Buy Shoes At Your Comfort</h1>
         <p class="my-3 text-gray-700 font-medium">Trusted platform for buying and selling laptops. Direct customer-to-customer interactions. Find your perfect laptop now</p>
         <button id="buy-button" class="my-2 bg-white hover:bg-blue-600 hover:text-white text-gray-800 font-semibold py-2 px-4 border border-gray-500 rounded shadow">Buy Now</button>
         <a href="#" onclick="redirectToPost()"><button class="my-2 bg-white hover:bg-slate-800 hover:text-white text-gray-800 font-semibold py-2 px-6 border border-gray-500 rounded shadow">Sell</button></a>
      </div>
      <img class="w-full md:w-2/5 lg:w-3/5" src="{{ asset('images/main-laptop-image.png') }}" alt="laptop-image" loading="lazy">
</div>


<script>

  const button = document.getElementById("buy-button");

  button.addEventListener("click", function() {
    window.scrollTo({
      top: 700,
      behavior: "smooth"
    });
  });


</script>