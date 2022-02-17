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


    <title>Exercise</title>
    <link rel="stylesheet" href="exercise.css">
    <style>
    .exerciseimg {
        height: auto;
        width: auto;
    }

    body h1 {
        font-weight: 500;
        text-align: center;
        margin: 20px;
        font-size: 37px;
    }

    footer.text-gray-600.body-font {
        background-color: black;
    }

    nav a {
        color: white;
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
        <h1 id="heading">Exercise</h1>

    </div>
    <!-- exercise start -->
    <!-- session 1 -->
    <h1>Back Workout - Session 1</h1>
    <!-- superset1 -->
    <h2 style="font-size: xx-large;
    font-weight: 600;
    margin-left: 32px;">Superset 1:</h2>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">1A.Pull Up</h1>
            <img src="fitness_images/backimg/pull-up.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p style="color: black;
    font-weight: bold;
    font-size: larger;">Set 5 Reps 5 Rest 30sec</p>
                <p class="mb-8 leading-relaxed">How Hang from a bar with an overhand, shoulder-width grip. Brace your
                    abs and glutes, engage your lats, then pull your chin up and over the bar. Pause at the top, then
                    lower yourself back to the start under control.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">1B.Hammer Grip Pull Up</h1>
            <img src="fitness_images/backimg/hammer-grip-pull-up.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p style="color: black;
    font-weight: bold;
    font-size: larger;">Sets 5 Reps 5 Rest 60sec</p>
                <p class="mb-8 leading-relaxed">Why Changing your hand position makes the move slightly easier so you
                    can hit your back muscles harder.

                    How Hang with a hands-facing, shoulder-width grip. Brace your abs and glutes, engage your lats, then
                    pull your chin up and over the bar. Pause at the top, then lower yourself back to the start under
                    control.</p>
            </div>
        </div>
        <!-- superset2 -->
        <h2 style="font-size: xx-large;
    font-weight: 600;
    margin-left: 32px;">Superset 2:</h2>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">2A.Prone Dumbbell Row</h1>
            <img src="fitness_images/backimg/prone-dumbbell-row.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p style="color: black;
    font-weight: bold;
    font-size: larger;">Sets 4 Reps 8-10 Rest 30sec</p>
                <p class="mb-8 leading-relaxed">Why It allows you to lift heavy – and hit your mid-back muscles – in
                    safety.

                    How Lie chest-down on an incline bench, holding a dumbbell in each hand with palms facing. Keeping
                    your chest against the bench, row the weights up, leading with your elbows. Pause briefly at the
                    top, then lower the weights.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">2B.Prone Dumbbell Flye</h1>
            <img src="fitness_images/backimg/prone-dumbbell-flye.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p style="color: black;
    font-weight: bold;
    font-size: larger;">Sets 4 Reps 12-15 Rest 60sec</p>
                <p class="mb-8 leading-relaxed">Why It hits your upper back as well as the back of your shoulders.

                    How Lie chest-down on the bench holding light dumbbells. With a slight bend in your elbows, raise
                    the weights to shoulder height, then lower them back to the start.</p>
            </div>
        </div>
    </section>
    <!-- superset3 -->
    <h2 style="font-size: xx-large;
    font-weight: 600;
    margin-left: 32px;">Superset 3:</h2>
    <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3A. Underhand Lat Pull-Down</h1>
        <img src="fitness_images/backimg/underhand-lat-pull-down.jpg" alt="" class="exerciseimg">
        <div class="text-center lg:w-2/3 w-full">
            <p style="color: black;
    font-weight: bold;
    font-size: larger;">Sets 4 Reps 8-10 Rest 30sec</p>
            <p class="mb-8 leading-relaxed">

                Why This brings your biceps into play to help out your tiring lats.

                How Sit supported on the machine, holding a straight bar with an underhand shoulder-width grip. Keeping
                your chest up, pull the bar down to below chin height. Pause, then return to the start.</p>
        </div>
    </div>
    <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3B.Seated Row</h1>
        <img src="fitness_images/backimg/seated-row.jpg" alt="" class="exerciseimg">
        <div class="text-center lg:w-2/3 w-full">
            <p style="color: black;
    font-weight: bold;
    font-size: larger;">Sets 4 Reps 12-15 Rest 60sec</p>
            <p class="mb-8 leading-relaxed">

                Why It works your upper back and your biceps again help out.

                How Sit at the machine holding the handle with a palms-facing grip. Keeping your chest up and your core
                braced, pull the handle in towards your bellybutton, leading with your elbows. Pause briefly then return
                to the start position.</p>
        </div>
    </div>
    </section>
    <!-- session2 -->
    <h1>Back Workout - Session 2</h1>
    <!-- superset1 -->
    <h2 style="font-size: xx-large;
    font-weight: 600;
    margin-left: 32px;">Superset 1:</h2>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">1A.Bent-Over Row</h1>
            <img src="fitness_images/backimg/bent-over-row.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p style="color: black;
    font-weight: bold;
    font-size: larger;">Sets 4 Reps 8 Rest 30sec</p>
                <p class="mb-8 leading-relaxed">

                    Why The classic lift for a big back.

                    How Hold the bar with a shoulder-width overhand grip. Hinge forwards from the hips, then row the bar
                    towards you, leading with your elbows. Pause at the top for a one-count, then lower the bar.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">1B.Upright Row</h1>
            <img src="fitness_images/backimg/upright-row.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p style="color: black;
    font-weight: bold;
    font-size: larger;">Sets 4 Reps 12 Rest 60sec</p>
                <p class="mb-8 leading-relaxed">

                    Why It hits your traps to create a wider frame.

                    How Stand tall with your chest up and abs and core braced, holding a barbell with a shoulder-width
                    overhand grip. Row the bar up towards your chin, leading with your elbows. Pause at the top for a
                    one-count, then slowly lower the bar back to the start.</p>
            </div>
        </div>
        <!-- superset2 -->
        <h2 style="font-size: xx-large;
    font-weight: 600;
    margin-left: 32px;">Superset 2:</h2>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">2A.Wide-Grip Lat Pull-Down
            </h1>
            <img src="fitness_images/backimg/wide-grip-lat-pull-down.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p style="color: black;
    font-weight: bold;
    font-size: larger;">Sets 4 Reps 10 Rest 30sec</p>
                <p class="mb-8 leading-relaxed">

                    Why A wide grip works your lats more.

                    How Sit on the machine and take a wide overhand grip on the bar. Keeping your chest up, pull the bar
                    down to chin level. Hold that position for a one-count, then slowly return the bar to the start,
                    keeping tension on your lats throughout.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">2B.Seated Cable Row</h1>
            <img src="fitness_images/backimg/seated-cable-row.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p style="color: black;
    font-weight: bold;
    font-size: larger;">Sets 4 Reps 10 Rest 60sec</p>
                <p class="mb-8 leading-relaxed">

                    Why It works the muscles of the middle of your upper back.

                    How Grip the handle with both hands. Sit back and with your chest up, pull that handle towards your
                    bellybutton. Pause, then return to the start position.</p>
            </div>
        </div>
    </section>
    <!-- superset3 -->
    <h2 style="font-size: xx-large;
    font-weight: 600;
    margin-left: 32px;">Superset 3:</h2>
    <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3A.Prone Dumbbell Row</h1>
        <img src="fitness_images/backimg/prone-dumbbell-row2.jpg" alt="" class="exerciseimg">
        <div class="text-center lg:w-2/3 w-full">
            <p style="color: black;
    font-weight: bold;
    font-size: larger;"> Sets 4 Reps 12 Rest 30sec</p>
            <p class="mb-8 leading-relaxed">



                Why It works each side of your back independently.

                How Lie chest-down on an incline bench holding a dumbbell in each hand. Row the weights up, leading with
                your elbows. Hold for a one-count at the top, then lower them slowly.</p>
        </div>
    </div>
    <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3B.Prone Dumbbell Flye</h1>
        <img src="fitness_images/backimg/prone-dumbbell-flye2.jpg" alt="" class="exerciseimg">
        <div class="text-center lg:w-2/3 w-full">
            <p style="color: black;
    font-weight: bold;
    font-size: larger;">Sets 4 Reps 12 Rest 60sec</p>
            <p class="mb-8 leading-relaxed">



                Why It’s one of the best moves for hitting the rear delts.

                How Lie chest-down on an incline bench holding a light dumbbell in each hand. Keeping a slight bend in
                your elbows, raise the weights out to the sides until they reach shoulder height. Pause for a one-count,
                then lower them under control.</p>
        </div>
    </div>
    </section>


    <!-- exercise end -->

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