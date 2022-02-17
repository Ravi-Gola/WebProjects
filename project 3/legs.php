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
    <h1>Legs Workout</h1>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">1 Goblet squat</h1>
            <img src="fitness_images/legsimg/goblet-squat.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“Any lower-body programme should be built on the ability to squat,” says
                    Page, “and the goblet squat is the ideal way to perfect the movement before moving on to its more
                    complex cousins.

                    <br>“Hold a kettlebell or dumbbell close to your chest, push your hips back and squat down slowly
                    until
                    your thighs are parallel to the ground. From this position, drive up to standing, leading with your
                    chest. Working in front of a mirror will help to keep your knees in line with your feet and torso
                    upright.”
                </p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">2 Dumbbell step-up</h1>
            <img src="fitness_images/legsimg/dumbbell-step-up.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“The step-up is an ideal introduction to the world of single-leg
                    exercises.” says Page. “Set the step at a height that means the thigh on your leading leg doesn’t go
                    beyond parallel to the floor.

                    <br>“Holding dumbbells at your side, plant your foot on the step securely and drive up powerfully,
                    focusing on contracting the glute muscles on the same side as your leading leg. Bring the opposite
                    knee up and stand on the step to complete the movement.”
                </p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3 Leg curl</h1>
            <img src="fitness_images/legsimg/leg-curl.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">The leg curl requires the use of a dedicated weights machine, so it’s
                    one to do in the gym unless your house is unusually well kitted out with a multigym. The reason for
                    doing leg curls is simple – it’s one of the most effective ways to strengthen your hamstrings. To do
                    a seated leg curl (some gyms also have machines you lie on to perform the move), sit on and set up
                    the machine so the padded lever sits just below your calves (also refer to the instructions on the
                    specific machine you’re using). Raise your legs in front of you, then pull the lever back down using
                    your legs.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">4 Leg extension</h1>
            <img src="fitness_images/legsimg/leg-extension.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">This weights machine exercise isolates your quads and is simple to
                    perform, but it’s best done with light weights at first to avoid any risk of damaging your knees.
                    Sit on the leg extension machine with your back straight against the backrest and adjust the pad so
                    it sits on your shins just above the ankles. Hold the side bars and extend your legs out in front of
                    you, making sure you’re powering the movement with your quads rather than kicking up with your feet.
                </p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">5 Leg press</h1>
            <img src="fitness_images/legsimg/leg-press.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">The leg press is another machine move, but unlike the leg extension and
                    leg curl it doesn’t just focus on one muscle group: it works the quads, glutes and hamstrings in one
                    fell swoop. Sit back on the machine with your feet on the plate shoulder-width apart. Release the
                    handles so your legs take the weight, then lower your legs towards your chest slowly. Drive them
                    back up, but don’t lock out your knees.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">6 Walking lunge with dumbbells
            </h1>
            <img src="fitness_images/legsimg/walking-with-dumbbell.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">“The ability to lunge with good form has great carryover benefits to
                    many other sporting movements as well as strengthening your hamstrings, quads, glutes and hips,”
                    says Page. “With a dumbbell in each hand, lunge forwards and bend your front knee until your back
                    knee is just above the ground, then drive back up. Bring the back leg through to initiate the next
                    lunge and walk forwards to continue the movement. Focus on keeping your torso upright.”</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">7 Box jump</h1>
            <img src="fitness_images/legsimg/box_jump.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">While some leg exercises increase your strength, this plyometric
                    exercise will improve your power and can be a real pulse-raiser too. Find your gym’s plyo box – pick
                    a height that you’re sure you can land comfortably on – and stand facing it square on. Looking at
                    the box, pick a spot that you want to land on, squat down to half depth to help generate power then
                    explode up, swinging your arms forwards as you do to ensure that your jump takes you onto the box.
                    Land softly, bending your knees to absorb the shock, then stand. For your knees’ sake, step down
                    from the box rather than jumping.</p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">8 Thruster</h1>
            <img src="fitness_images/legsimg/thruster.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">This is a combination of a front squat and an overhead press, and brings
                    the benefits of both moves to the table. A barbell is the ideal free weight to use for the move if
                    you have one, but it can also be done with a couple of dumbbells or a single kettlebell held in both
                    hands.

                    <br>Hold the weight at your chest with your elbows pointing straight down and your palms up. Lower
                    into a squat, then drive back up and use that momentum to push the weight straight above your head.
                    Lower it under control to your chest, then drop into another squat.
                </p>
            </div>
        </div>
        <div class="container mx-auto flex px-5 py-15 items-center justify-center flex-col">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">9 Squat jump</h1>
            <img src="fitness_images/legsimg/jump-squat.jpg" alt="" class="exerciseimg">
            <div class="text-center lg:w-2/3 w-full">
                <p class="mb-8 leading-relaxed">Stand with your feet hip-width apart and your toes pointing out
                    slightly. Keeping your back straight, bend your knees and sit back until your thighs are parallel
                    with the floor (or as close as you can get). Then explode straight up, pushing through your heels,
                    into a jump. Land softly and go straight into the next rep. Aim to do either three sets of ten reps
                    or three sets of 30 seconds.</p>
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