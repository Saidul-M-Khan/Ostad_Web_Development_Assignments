<?php
$success = '';
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ||  isset($_POST['submit'])) {

  if ( empty( $_POST['nickname'] ) || empty( $_POST['email'] ) || empty( $_POST['subject'] ) || empty( $_POST['message'] ) ) {
      die(header( 'Location: fail.html' ));
      
  } else{
      header( 'Location: success.html' );
  }

  $name       = $_POST['nickname'];
  $email      = $_POST['email'];
  $subject    = $_POST['subject'];
  $message    = $_POST['message'];


  $file = fopen( 'contacts.csv', 'a' );
  $data = array( $name, $email, $subject, $message );
  if ( fputcsv( $file, $data ) === false ) {
      die( 'Error writing to file.' );
  }

  fclose( $file );

  exit();
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Us</title>
    <style>
        html, body {
            background: linear-gradient(to top, rgb(55, 65, 81), rgb(17, 24, 39), rgb(0, 0, 0));
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
        }
    </style>
</head>
<body class="">
  <header class="p-4 dark:bg-gray-800 text-cyan-300 p-4 dark:bg-gray-800">
    <div class="container flex justify-between h-16 mx-auto">
        <a rel="" href="./home.html" aria-label="Back to homepage" class="flex items-center p-2">
            <img src="./logo.png" alt="">
        </a>
        <ul class="items-stretch hidden space-x-3 md:flex">
            <li class="flex">
                <a rel="" href="./home.html" class="flex items-center px-4 -mb-1 border-b-2 border-transparent">Home</a>
            </li>
            <li class="flex">
                <a rel="" href="./blog.html" class="flex items-center px-4 -mb-1 border-b-2 border-transparent">Blog</a>
            </li>
            <li class="flex">
                <a rel="" href="./contact-us.php" class="flex items-center px-4 -mb-1 border-b-2 border-transparent text-violet-400 border-violet-400">Contact Us</a>
            </li>
        </ul>
    </div>
</header>


    <main>
        <form class="w-full max-w-lg mt-20 mx-auto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <h1 class="my-10 h-16 text-center text-4xl">Contact Us</h1>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="grid-password">
                Nickname
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-800 border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-transparent focus:text-gray-100 focus:border-cyan-500" id="nick" type="text" name="nickname">
              <!-- <p class="text-gray-600 text-xs italic">Remove if not needed</p> -->
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="grid-password">
                E-mail
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-800 border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-transparent focus:text-gray-100 focus:border-cyan-500" id="email" type="email" name="email">
              <!-- <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p> -->
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="grid-subject">
                Subject
              </label>
              <input class="appearance-none block w-full bg-gray-200 text-gray-800 border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-transparent focus:text-gray-100 focus:border-cyan-500" id="subject" type="subject" name="subject">
              <!-- <p class="text-gray-600 text-xs italic">Some tips - as long as needed</p> -->
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-300 text-xs font-bold mb-2" for="grid-password">
                Message
              </label>
              <textarea class="appearance-none block w-full bg-gray-200 text-gray-800 border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-transparent focus:text-gray-100 focus:border-cyan-500 h-48 resize-none" id="message" name="message"></textarea>
              <!-- <p class="text-gray-600 text-xs italic">Re-size can be disabled by set by resize-none / resize-y / resize-x / resize</p> -->
            </div>
          </div>
          <div class="md:flex md:items-center">
            <div class="md:w-1/3">
              <input class="shadow bg-teal-400 hover:bg-gray-900 hover:text-cyan-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" value="Submit" name="submit">
            </div>
            <div class="md:w-2/3"></div>
          </div>
        </form>
    </main>

    <footer class="bg-transparent text-gray-300 border border-gray-500 rounded-lg dark:bg-gray-800 dark:border-gray-700 shadow-lg m-4">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://www.facebook.com/saidul.khan2000/" class="hover:underline">Saidul Mursalin Khan</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
        </div>
    </footer>
</body>
</html>