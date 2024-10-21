<?php
// Define the current page. In a real application, you'd determine this dynamically.
$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Function to check if a nav item is active
function is_active($page)
{
    global $current_page;
    return $current_page === $page ? 'bg-white/20' : '';
}

$minPurchase = 3500;
$couponCode = 'SITARA60';
$couponCode1 = 'SITARA50';
$couponCode2 = 'SITARA30';
$expirationDate = '20-12-2024'; // Replace with actual date
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitarabuks Navigation</title>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sitarabuk-brown': '#310E05',
                    },
                    fontFamily: {
                        'poiret': ['"Poiret One"', 'cursive'],
                        'montserrat': ['Montserrat', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="font-montserrat bg-white">
    
<?php include_once("./nav.php") ?>

    <!-- Main Content Area -->
    <main class="ml-48 p-4">
        <h1 class="text-center text-4xl font-poiret mb-8">OFFERS</h1>
        <section class="flex-col" id="of1">
            <div id="content " class="flex">
                <img class="w-96" src="./stocks/OF3 1.png" alt="">
                <div id="content-div" class="bg-white h-[250px] w-[535px] rounded-lg" 
                style="box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);">
                <h2 class="text-3xl font-bold text-center mb-4 text-sitarabuk-brown font-poiret">
                        OVER SPENDER
                    </h2>
                    
                    <p class="text-center mb-4 text-black font-montserrat text-sitarabuk-brown font-bold ">
                        Spend Over ₹<?php echo $minPurchase; ?> and Unlock a Special Discount!
                    </p>
                    
                    <div class="flex items-center justify-center mb-4">
                        <span class="mr-2 text-black font-montserrat">Use Code:</span>
                        <span class="font-mono bg-gray-200 px-2 py-1 rounded mr-2 text-sitarabuk-brown"><?php echo $couponCode; ?></span>
                        <button class="px-2 py-1 rounded text-sm bg-sitarabuk-brown text-white" id="copyBtn">
                            COPY
                        </button>
                    </div>
                    
                    <!-- Terms and conditions -->
                    <div class="text-sm text-black font-montserrat ml-14 ">
                        <h3 class="font-semibold mb-2">Terms & Conditions:</h3>
                        <ol class="list-decimal list-inside">
                            <li>Minimum purchase of ₹<?php echo $minPurchase; ?> required.</li>
                            <li>Coupon code must be applied at checkout.</li>
                            <li>Valid until <?php echo $expirationDate; ?>.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

 <!--------------------------------- OFFER 2 ----------------------->

        <section class="flex-col mt-5" id="of2">
            <div id="content " class="flex">
                <img class="w-96" src="stocks/OF2.png" alt="">
                <div id="content-div" class="bg-white h-[250px] w-[535px] rounded-lg" 
                style="box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);">
                <h2 class="text-3xl font-bold text-center mb-4 text-sitarabuk-brown font-poiret">
                        COFFEE PLEASE
                    </h2>
                    
                    <p class="text-center mb-4 text-black font-montserrat text-sitarabuk-brown font-bold ">
                        Spend Over ₹<?php echo $minPurchase; ?> and Unlock a Special Discount!
                    </p>
                    
                    <div class="flex items-center justify-center mb-4">
                        <span class="mr-2 text-black font-montserrat">Use Code:</span>
                        <span class="font-mono bg-gray-200 px-2 py-1 rounded mr-2 text-sitarabuk-brown"><?php echo $couponCode1; ?></span>
                        <button class="px-2 py-1 rounded text-sm bg-sitarabuk-brown text-white" id="copyBtn">
                            COPY
                        </button>
                    </div>
                    
                    <!-- Terms and conditions -->
                    <div class="text-sm text-black font-montserrat ml-14 ">
                        <h3 class="font-semibold mb-2">Terms & Conditions:</h3>
                        <ol class="list-decimal list-inside">
                            <li>Minimum purchase of ₹<?php echo $minPurchase; ?> required.</li>
                            <li>Coupon code must be applied at checkout.</li>
                            <li>Valid until <?php echo $expirationDate; ?>.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--------------------------------- OFFER 3 ----------------------->
        <section class="flex-col mt-5" id="of2">
            <div id="content " class="flex">
                <img class="w-96"  src="stocks/OF1.png" alt="">
                <div id="content-div" class="bg-white h-[250px] w-[535px] rounded-lg" 
                style="box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);">
                <h2 class="text-3xl font-bold text-center mb-4 text-sitarabuk-brown font-poiret">
                HALLOWEEN OFFER
                    </h2>
                    
                    <p class="text-center mb-4 text-black font-montserrat text-sitarabuk-brown font-bold ">
                        Spend Over ₹<?php echo $minPurchase; ?> and Unlock a Special Discount!
                    </p>
                    
                    <div class="flex items-center justify-center mb-4">
                        <span class="mr-2 text-black font-montserrat">Use Code:</span>
                        <span class="font-mono bg-gray-200 px-2 py-1 rounded mr-2 text-sitarabuk-brown"><?php echo $couponCode2; ?></span>
                        <button class="px-2 py-1 rounded text-sm bg-sitarabuk-brown text-white" id="copyBtn">
                            COPY
                        </button>
                    </div>
                    
                    <!-- Terms and conditions -->
                    <div class="text-sm text-black font-montserrat ml-14 ">
                        <h3 class="font-semibold mb-2">Terms & Conditions:</h3>
                        <ol class="list-decimal list-inside">
                            <li>Minimum purchase of ₹<?php echo $minPurchase; ?> required.</li>
                            <li>Coupon code must be applied at checkout.</li>
                            <li>Valid until <?php echo $expirationDate; ?>.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

    </main>
    </div>
    </main>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        
        const copyButtons = document.querySelectorAll('#copyBtn');

       

        // Add functionality to all COPY buttons
        copyButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                const couponCode = '<?php echo $couponCode; ?>'; // You can adjust this to be dynamic if needed
                navigator.clipboard.writeText(couponCode).then(function () {
                    alert('Coupon code copied to clipboard!');
                });
            });
        });
    });
</script>

</body>

</html>