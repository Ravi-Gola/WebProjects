<?php
session_start();
if(!isset($_SESSION['logedin']) || $_SESSION['logedin'] != true)
{
    header("location: index.php");
    exit();
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    <title>Supplement</title>
    <link rel="stylesheet" href="fitness.css">
    <style>
    .header {
        min-height: 50vh;
        width: 100%;
        background: url('fitness_images/supplement.jpg');
        background-position: center;
        background-size: cover;
        position: relative;
    }

    .logo {
        height: 100px;
        width: 100px;
    }

    #login {
        margin-left: 20px;
        background-color: black;
        color: white;
    }

    #signup {
        background-color: black;
        color: white;
    }

    nav a {
        color: white;
    }

    body #heading {
        text-align: center;
        margin-top: 40px;
        font-size: 50px;
        color: white;
        font-weight: bold;
    }

    body h1 {
        font-weight: 500;
        text-align: center;
        margin: 20px;
        font-size: 37px;
    }

    .supplementimg {
        width: 100%;
        height: 160px;
    }

    /*Footer open/load animation*/
    .alert-footer {
        -webkit-animation: slide-in-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        animation: slide-in-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }

    /*Footer close animation*/
    .alert-footer input:checked~* {
        -webkit-animation: slide-out-bottom 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        animation: slide-out-bottom 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
    }

    @-webkit-keyframes slide-in-top {
        0% {
            -webkit-transform: translateY(-1000px);
            transform: translateY(-1000px);
            opacity: 0
        }

        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1
        }
    }

    @keyframes slide-in-top {
        0% {
            -webkit-transform: translateY(-1000px);
            transform: translateY(-1000px);
            opacity: 0
        }

        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1
        }
    }

    @-webkit-keyframes slide-out-top {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1
        }

        100% {
            -webkit-transform: translateY(-1000px);
            transform: translateY(-1000px);
            opacity: 0
        }
    }

    @keyframes slide-out-top {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1
        }

        100% {
            -webkit-transform: translateY(-1000px);
            transform: translateY(-1000px);
            opacity: 0
        }
    }

    @-webkit-keyframes slide-in-bottom {
        0% {
            -webkit-transform: translateY(1000px);
            transform: translateY(1000px);
            opacity: 0
        }

        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1
        }
    }

    @keyframes slide-in-bottom {
        0% {
            -webkit-transform: translateY(1000px);
            transform: translateY(1000px);
            opacity: 0
        }

        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1
        }
    }

    @-webkit-keyframes slide-out-bottom {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1
        }

        100% {
            -webkit-transform: translateY(1000px);
            transform: translateY(1000px);
            opacity: 0
        }
    }

    @keyframes slide-out-bottom {
        0% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1
        }

        100% {
            -webkit-transform: translateY(1000px);
            transform: translateY(1000px);
            opacity: 0
        }
    }

    @-webkit-keyframes slide-in-right {
        0% {
            -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
            opacity: 0
        }

        100% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1
        }
    }

    @keyframes slide-in-right {
        0% {
            -webkit-transform: translateX(1000px);
            transform: translateX(1000px);
            opacity: 0
        }

        100% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1
        }
    }

    @-webkit-keyframes fade-out-right {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1
        }

        100% {
            -webkit-transform: translateX(50px);
            transform: translateX(50px);
            opacity: 0
        }
    }

    @keyframes fade-out-right {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            opacity: 1
        }

        100% {
            -webkit-transform: translateX(50px);
            transform: translateX(50px);
            opacity: 0
        }
    }
    </style>

</head>

<body>
    <!-- header start -->
    <div class="header">
        <!-- navigation start -->
        <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <img src="fitness_images/fitnesslogo1.png" class="logo" alt="">
                    <span class="ml-3 text-xl">fitness</span>
                </a>
                <nav
                    class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-gray-900" href="index.php">Home</a>
                    <a class="mr-5 hover:text-gray-900" href="supplement.php">Supplement</a>
                    <a class="mr-5 hover:text-gray-900" href="exercise.php">Exercise</a>
                    <a class="mr-5 hover:text-gray-900" href="blog.php">Blog</a>
                    <a class="mr-5 hover:text-gray-900" href="contact.php">contact</a>

                </nav>
                <?php
    if(isset($_SESSION['logedin']) || $_SESSION['logedin'] == true){
        echo '<p>'.$_SESSION['email'].'</p>
        <a href="logout.php" style="
        background-color: black;
        color: white;
        padding: 6px;
        margin-left: 15px;
        border-radius: 9px;">logout</a>';
       
    }
    
    ?>
            </div>
        </header>
        <!-- navigation end -->

        <h1 id="heading">Supplement</h1>
    </div>
    <!-- header end -->


    <!-- product start -->

    <h1>OUR PRODUCT</h1>

    <!-- protien -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">BUY YOUR FAVOURITE
                        PROTIEN</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Protein powder is a popular nutritional
                    supplement. Protein is an essential macronutrient that helps build muscle, repair tissue, and make
                    enzymes and hormones. Using protein powder may also aid weight loss and help people tone their
                    muscles.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/muscleblazeP.jpg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">PROTIEN</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">MuscleBlaze Whey Protein </h2>
                        <p class="leading-relaxed text-base"> MuscleBlaze Whey protein is made using premium quality raw
                            materials imported from top-notch international sources to maintain high quality.this is
                            really good protien in affordable price.it also good for beginner.it purely veg andcomes in
                            top ranked protien in india.</p>
                        <p style="color: blue;">pricing: 2k - 7k(According to quantity)</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/ONprotien.jpg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">PROTIEN</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Optimum Nutrition (ON) Gold
                            Standard (Primary Source Isolate) </h2>
                        <p class="leading-relaxed text-base"> Whey Protein Isolates WPI are the purest form of whey
                            protein that currently exists. WPIs are costly to use, but rate among the best proteins that
                            money can buy. That's why they're the first ingredient you read on the Gold Standard Whey
                            label.</p>
                        <p style="color: blue;">pricing: 2.7k - 11k(According to quantity)</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/nitrotechP.jpg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">PROTIEN</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Muscletech Performance Series
                            Nitrotech Whey Protein </h2>
                        <p class="leading-relaxed text-base"> It is enhanced with the most studied form of creatine for
                            even better gains in muscle and strength Using these proteins on a daily basis is vital in
                            helping to increase muscle protein synthesis for more muscle size and strength. </p>
                        <p style="color: blue;">pricing: 4k - 10k(According to quantity)</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/GNCp.jpg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">PROTIEN</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">GNC Pro Performance 100% Whey
                            Protein </h2>
                        <p class="leading-relaxed text-base"> Pro performance 100 percent whey protein (blend of whey
                            concentrate and whey isolate) delivers an ultra-high quality macronutrient protein formula
                            with high amounts of naturally occurring amino acids the body needs every day.</p>
                        <p style="color: blue;">pricing: 2k - 4k(According to quantity)</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- weight gainer -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">BUY YOUR FAVOURITE WEIGHT
                        GAINER</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">For people who struggle to eat enough to gain
                    weight, mass gainer supplements are an effective way to increase your calorie intake.A mass gainer
                    is a sports nutrition supplement that offers a huge dose of calories in the form of carbs, protein,
                    and fats. Generally, it comprises protein and carbs in a ration of 3:1 or 2:1, implying every
                    serving of mass gainer offers 30gms of protein and 60gms of carbs.

                    A huge portion of calories gained from mass gainers comes from carbs that are an amalgamation of
                    glucose and maltose.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/MBgainer.jpg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">GAINER</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">MuscleBlaze Super Gainer XXL
                            Weight Gainer </h2>
                        <p class="leading-relaxed text-base"> MuscleBlaze Super Gainer XXL Chocolate is crafted
                            especially for hardcore fitness enthusiasts who work hard to gain big and sturdy muscles and
                            a sculpted physique
                            This advanced formula offers 15g protein per 100g serving. It has a blend of fast and
                            slow-releasing proteins </p>
                        <p style="color: blue;">pricing: 0.9k - 3.5k(According to quantity)</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/ONgainer.jpg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">GAINER</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Optimum Nutrition (ON) Serious
                            Mass </h2>
                        <p class="leading-relaxed text-base"> Serious Mass is the ultimate in weight gain formulas. With
                            1,250 calories per serving and 50 grams of protein for muscle recovery support, this
                            instantized powder makes the ideal post-workout and between meals shake for sizing up your
                            goals</p>
                        <p style="color: blue;">pricing: 1.3k - 5k(According to quantity)</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/NTgainer.jpg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">GAINER</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Muscletech Performance Series Tech
                            Extreme 2000 Weight Gainers </h2>
                        <p class="leading-relaxed text-base"> Designed for active men and women who struggle to build
                            size and are looking to increase their dietary protein, carbohydrate and overall calorie
                            intake. 100% whey protein with zero inferior protein sources. Builds muscle & support muscle
                            protein synthesissss </p>
                        <p style="color: blue;">pricing: 2.7k - 7k(According to quantity)</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/LBgainer.jpg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">GAINER</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Labrada Muscle Mass Gainer </h2>
                        <p class="leading-relaxed text-base">This mass gainer makes it easy for you to get lots of
                            calories along with the highest quality muscle-building protein, so you can gain weight fast
                            Muscle mass gainer makes a delicious shake containing a highly- concentrated 1930 calories
                            and 84 grams of protein when mixed with 32oz of whole milk! </p>
                        <p style="color: blue;">pricing: 1k - 5.7k(According to quantity)</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- multi-vitamins -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">BUY YOUR FAVOURITE
                        MULTIVITAMINS TABLETS</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Multivitamin are one of the most important
                    supplement for any bodybuilder. When bodybuilding the body is consuming the available resources at
                    the much faster pace. Thereby it is possible that certain vitamin deficiency can set in place.

                    Another reason why multivitamins are an essential supplement for bodybuilders is due to the dynamic
                    nature of their diet plans. Like if one is on a restrictive diet, it can make the body fall short on
                    levels of vitamins and minerals hence the need for multivitamins arises to ensure that your body
                    gets enough essential nutrients.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/MBmutivitamins.jpeg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">MULTIVITAMINS</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">MUSCLEBLAZE VITE Multivitamin (90
                            No)</h2>
                        <p class="leading-relaxed text-base">
                            MB-vite is a potent blend of 25 vital vitamins and minerals with immunity-boosting
                            ingredients that work towards enhancing your immunity levels.The all new MB-Vite contains
                            100% RDA of immunity boosters such as Vitamin C, Vitamin D, Vitamin E, Folic Acid, Zinc,
                            Copper, Selenium that support the immune functions of your body to enhance your overall
                            health </p>
                        <p style="color: blue;">pricing: up to 600Rs</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/NBmultivitamins.jpeg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">MULTIVITAMINS</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Nutrabay Pro Multivitamin for men
                            - 500mg, 60 Capsules (60 No)</h2>
                        <p class="leading-relaxed text-base">
                            Nutrabay
                            Quantity 60 No,
                            Type Multi Vitamin,
                            Form Capsules,
                            Dietary Preference No Artificial Flavor, Gluten Free,
                            Composition Energy 0.57Kcal, Protein 0.02g, Carbohydrate 0.1g, Fat 0.01g,
                            Ayurvedic No,
                            Maximum Shelf Life 18 Months ,
                            Container Type Bottle,
                            Food Preference Vegetarian,
                            Serving Size 1 No Consume 1 capsule per day before or after meal or as advised by the
                            dietician.</p>
                        <p style="color: blue;">pricing: up to 400Rs</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/BMmultivitamins.jpeg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">MULTIVITAMINS</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">BIGMUSCLES NUTRITION The Real
                            Vitamin Advanced | Multivitamins, Multiminerals (90 Tablets)</h2>
                        <p class="leading-relaxed text-base">Brand
                            BIGMUSCLES NUTRITION
                            Model Name
                            The Real Vitamin Advanced | Multivitamins, Multiminerals,
                            Quantity
                            90 Tablets,
                            Type
                            Multi Vitamin,
                            Form
                            Tablet,
                            Maximum Shelf Life
                            18 Months,
                            Food Preference
                            Vegetarian,
                            please read the label on the physical product carefully for complete information provided by
                            the manufacturer.</p>
                        <p style="color: blue;">pricing: 399Rs</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/HKvitamins.jpeg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">MULTIVITAMINS</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">HEALTHKART MultiVitamin with
                            Ginseng Extract (90 No)</h2>
                        <p class="leading-relaxed text-base">Healthkart Multivitamin is a comprehensive multivitamin for
                            18 plus men that helps them supplement key missing nutrients in their everyday diet to
                            support an active lifestyle. The premium blend of vitamins, minerals and ginseng in
                            Healthkart Multivitamin is helpful in promoting overall well being in men and keeps them
                            mentally alert and physically active </p>
                        <p style="color: blue;">pricing: up to 500Rs</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- other -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">BUY YOUR OTHER FAVOURITE
                        PRODUCT </h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Eating protein-rich foods and taking
                    supplements may help people feel fuller for longer. Feeling full tends to result in smaller portion
                    sizes and less frequent snacking, which can help a person maintain a healthy weight or lose weight
                    if necessary.

                    A 2017 review reported that supplementing with whey protein might reduce body weight and total fat
                    mass in people who are overweight or obese.

                    It may also reduce blood pressure, total cholesterol, and other risk factors for cardiovascular
                    diseases.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/peanutbutter.jpeg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">OTHER</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">ALPINO Natural Peanut Butter
                            Crunch 2 KG | Unsweetened | Made with 100% Roasted Peanuts | 30% Protein | No Added Sugar |
                            No Added Salt | No Hydrogenated Oils | Non GMO | Gluten Free | Vegan | 1 KG Pack of 2 | 2000
                            g (Pack of 2)</h2>
                        <p class="leading-relaxed text-base"> Unsweetened,
                            30% Protein,
                            100% Roasted Peanuts,
                            No Added Sugar,
                            No Added Salt,
                            No Hydrogenated Oils,
                            Non GMO,
                            Gluten Free,
                            Vegan
                            it is best product. more detail provided by seller ,please read carefully</p>
                        <p style="color: blue;">pricing: 730Rs</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/badamRogan.jpeg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">OTHER</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Gmore Cold Pressed - Extra Virgin
                            - Almond Oil / Badam Rogan / Badam Tail for Hair, Skin & Eating - 100% Pure & 100% Natural.
                            Hexane Free, No Chemicals, No Preservatives(100 ml) </h2>
                        <p class="leading-relaxed text-base">For Men & Women
                            Applied For Stress Relief, Lustre & Shine, Anti-hair Fall, Split-ends, Conditioning, Hair
                            Thickening, Removing Lice, Hair Strengthening, Anti-dandruff, Hair Growth, Prevents Greying,
                            Healthy Scalp,
                            Sulfate Free</p>
                        <p style="color: blue;">pricing: 350Rs</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/oats.jpeg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">OTHER</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Saffola Oats (1 kg, Pouch) </h2>
                        <p class="leading-relaxed text-base"> Eat and live healthy Saffola oats. It
                            saves plenty of your early morning time as it requires minimal preparation. It also
                            satisfies your hunger pangs at any time of the day. All it takes is three minutes to prepare
                            this yummy, nutritious breakfast.
                            Saffola Oats are made of 100% natural whole grain oats, thus giving you plenty of health
                            benefits. Snack for All Times Not just as breakfast, evening or even at night.  healthy intake of fibre and proteins.</p>
                        <p style="color: blue;">pricing: 200Rs</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <img src="fitness_images/peanut.jpeg" alt="" class="supplementimg">
                        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">OTHER</h3>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">B&B Organics Brown Peanut (Whole)  (500 g)</h2>
                        <p class="leading-relaxed text-base"> Peanuts can energize your workout contain “good” fats, which is part of why they're referred to as an “energy-dense” food.  monounsaturated kind Peanuts are an especially good source of healthful fats, protein, and fiber. They also contain plenty of potassium, phosphorous, magnesium, and B vitamins. Despite being high in calories, peanuts are nutrient-rich and low in carbohydrates.</p>
                        <p style="color: blue;">pricing: 250Rs</p>
                        <a href="" style="cursor: pointer; color: red; font-weight: bold;">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product end -->

    <!-- question and answer -->
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-15 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Ask me anything about Gym
                    Supplement</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">If you have any doubt of any type then suggest
                    me.we must try to solve your problem</p>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <form action="_SupplementQuestionHandel.php" method="post">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea id="message" name="message"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button
                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">SUBMIT</button>
                        </div>
                        <div class="p-2 w-full pt-0 mt-0 border-t border-gray-200 text-center">
                            <a class="text-indigo-500">example@email.com</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
    if(isset($_GET['messagesave']) && $_GET['messagesave'] == "true")
    {
        echo ' <div class="alert-footer w-full fixed bottom-0">
        <input type="checkbox" class="hidden" id="footeralert">
    
        <div class="flex items-center justify-between w-full p-2 bg-blue-500 shadow text-white">
          You have successfully send your message. We will reply you soon with in three days ! Thank you have a nice day:
          
          <label class="close cursor-pointer" title="close" for="footeralert">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </label>
        </div>
      </div>';
    }
    ?>

    <!-- about start -->
    <h1>About us</h1>
    <footer class="text-gray-600 body-font">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img src="fitness_images/mypic.jpg" alt="" style="
    height: 80px;
    width: 80px;
    border-radius: 41px;">
                    <span class="ml-3 text-xl">MR. Ravi(Owner)</span>
                </a>
                <p class="mt-2 text-sm text-gray-500">I have created this website for fitness .</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Explore</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Company</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Nutrabay</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Amazon</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">security</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">SUBSCRIBE</h2>
                    <?php
        if(isset($_GET['alreadysubscribe']) && $_GET['alreadysubscribe'] == "true"){
                   echo '<p style="color: white;
                   border: 2px solid;
                   text-align: center;
                   border-radius: 21px;">Already Subscribed</p>';
        }
  if(isset($_GET['subscribe']) && $_GET['subscribe'] == "true")
  {
    echo '<p style="color: white;
    border: 2px solid;
    text-align: center;
    border-radius: 21px;">Successfully <br>Subscribed</p>';
  }
  else
  {
    echo '<form action="subscribe.php" method="post">
    <div class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
      <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">subscribe</button>   
    </div>
    </form>
    <p class="text-gray-500 text-sm mt-2 md:text-left text-center">subscribe our websites for latest updates ';
  }
  ?>


                    <br class="lg:block hidden">Thank you!
                    </p>
                </div>
            </div>
        </div>
        </div>
        </div>

        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
                        target="_blank">@knyttneve</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    <!-- about end -->
</body>

</html>