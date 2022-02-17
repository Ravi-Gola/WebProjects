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
    <h1>Triceps Workout</h1>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">1 Triceps press-down</h1>
            <img src="fitness_images/tricepsimg/triceps-press-down.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“Attach a straight or angled bar to a high pulley,” says Adepitan, “and
                    hold it with your palms facing down (overhand grip) and your hands shoulder-width apart. Standing
                    upright with your torso straight, bring your upper arms close to your body and perpendicular to the
                    floor. Your forearms should be pointing up towards the pulley.

                    <br>“Using your triceps to move your forearms, bring the bar down until it touches the front of your
                    thighs with your arms fully extended and perpendicular to the floor. Your upper arms should remain
                    stationary next to your torso. After holding for one second at the contracted position, bring the
                    bar slowly back up to the starting point. Exhale as you bring the bar down and breathe in as you
                    return to the start position.
                </p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">2 Cable overhead triceps
                extension</h1>
            <img src="fitness_images/tricepsimg/cable-overhead-extension.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“Attach a rope to the bottom pulley of the cable machine,” says
                    Adepitan. “Face away from the pulley and, holding the rope with both hands with palms facing each
                    other (neutral grip), extend your arms until your hands are directly above your head. Your elbows
                    should be in close to your head and the arms should be perpendicular to the floor with the knuckles
                    pointing to the ceiling.

                    <br>“Slowly lower the rope behind your head as you hold the upper arms stationary. Inhale as you
                    perform this movement and pause when your triceps are fully stretched. Breathe out as you return to
                    the starting position by flexing your triceps.”
                </p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3 Triceps kick-back</h1>
            <img src="fitness_images/tricepsimg/triceps-dumbbell-kickback.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“Position yourself on the left side of the bench with your right knee
                    and right hand resting on it,” says Adepitan. “Using a neutral grip, pick up the dumbbell with your
                    left hand. Keep your back straight and look forward. Tuck your left upper arm close to your torso
                    and bend at the elbow, forming a 90° angle with your upper arm and forearm.

                    <br>“Moving only below the elbow, raise the dumbbell behind you until your arm is fully extended. Pause,
                    and then lower the dumbbell back to the starting position. Repeat this movement for the desired
                    number of reps and then switch to your right arm.”</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">4 Dumbbell overhead triceps
                extension</h1>
            <img src="fitness_images/tricepsimg/dumbbell-overhead-extension.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">Using dumbbells rather than the cable machine works each arm
                    individually, helping to even out any strength imbalances in your triceps. The move is done in the
                    same way as with a cable machine. Start holding both dumbbells above your head with your arms
                    extended.

                    <br>“With your elbows tucked in close to your ears, hinge at the elbow to move the dumbbells behind your
                    head and then extend back fully to the top,” says Breakenridge.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">5 Bench dip</h1>
            <img src="fitness_images/tricepsimg/bench-dip.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“Place two flat benches parallel to one another, around 1-1.5m apart
                    (adjust the width to suit your height),” says Adepitan. “Place your hands on the edge of the bench,
                    around shoulder-width apart, and put your heels on the edge of the other bench.

                    <br>“Keeping your body close to the bench, slowly lower in a dip until your elbows are at the same
                    height as your shoulders. Slowly push back up, squeezing through the triceps. Do not lock out your
                    elbows at the top of the exercise.”</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">6 Single-arm floor press</h1>
            <img src="fitness_images/tricepsimg/floor-press.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">Working one arm at a time when pressing will help to isolate the triceps
                    and chest muscles, and also allows you to find out if you have any strength imbalances that you
                    might need to work on. Lie on the floor holding a weight (you can use a dumbbell or kettlebell) with
                    your upper arm at right angles to your torso and your forearm pointing straight up, then press it
                    straight above you until your arm is extended. Bring the weight back slowly until your upper arm
                    touches the floor again.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">7 Landmine press</h1>
            <img src="fitness_images/tricepsimg/landmine-press.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">This is another pressing exercise that’s less stressful for your
                    shoulders than the bench or overhead press. The landmine press hits your triceps hard, along with
                    your chest and shoulders, and can be performed using a dedicated landmine holder for the bar or
                    simply by wedging one end of the bar into a corner (if your gym won’t mind scuff marks on the wall).

                    <br>You can do the lift one- or two-handed. With the former, adopt a split stance with one foot in front
                    of the other and begin holding the weight by your shoulder. When using two hands, stand with your
                    feet shoulder-width apart and press the bar from the middle of your chest.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">8 Roman chair dip</h1>
            <img src="fitness_images/tricepsimg/roman-chair-dip.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“Position yourself on the Roman chair (find a gym staff member to help
                    you if you’ve not used one before),” says Adepitan. “Bend your knees, slowly lower yourself, then
                    press back up. Make sure to look up, keep your body straight and keep your elbows next to your body
                    so they bend back behind you, rather than out to the sides.”</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">9 Close-grip bench </h1>
            <img src="fitness_images/tricepsimg/close-grip-bench.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“Lie with your back on a flat bench,” says Adepitan. “With hands around
                    shoulder-width apart, lift the barbell from the rack and hold it straight over you with your arms
                    locked.

                    <br>“Lower the bar slowly until the bar touches the middle of your chest, inhaling as you go. Make sure
                    that, as opposed to a regular bench press, you keep the elbows close to your torso at all times in
                    order to maximise the involvement of your triceps. Pause for a second, then press the bar back to
                    the starting position using your triceps muscles, exhaling as you go. Lock your arms in the
                    contracted position, hold for a second and then start coming down slowly again. It should take at
                    least twice as long to go down than to come up.”</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">10 Diamond press-up</h1>
            <img src="fitness_images/tricepsimg/diamond-press.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“This is similar to the standard press-up, but you bring your hands
                    together and form a diamond shape with your index fingers and thumbs, which puts more emphasis on
                    the triceps as you perform the exercise,” says Breakenridge.

                    <br>Make sure you keep your elbows close to your sides as you drop down and push back up – this will
                    ensure you are hitting your triceps as hard as possible.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">11 Skullcrusher</h1>
            <img src="fitness_images/tricepsimg/skullcrusher.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed"></p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">12 Rings dip</h1>
            <img src="fitness_images/tricepsimg/rings-dip.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">If you think dips on parallel bars are tough, try doing them using
                    unstable gym rings. As well as taxing your triceps, this move promotes all-over core strength as you
                    try to hold your body steady while you dip and press back up. Start with your arms by your sides and
                    locked out, supporting your body on the rings with your legs stretched out below you, then lower
                    until your upper arms are parallel to the floor. Then press back up.</p>
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