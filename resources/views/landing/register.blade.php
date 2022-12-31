<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Esteh Creative - Register</title>
            <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="images/fav-icon/favicon-esteh.ico"
        />
  </head>
  <body>
    <!-- login -->
    <div class="h-screen flex mx-40">
      <div class="flex w-1/2 bg-white justify-around items-center ">
        <div>
          <img src="images/login/login2.png" alt="bglogin" />
        </div>
      </div>
      <div class="flex w-1/2 justify-center items-center bg-white  ">
        <form class="bg-white">
          <h1 class="text-gray-800 font-bold text-3xl  mb-1">Register</h1>
          <p class="text-sm font-normal text-gray-600 mb-7">Esteh Creative</p>
          <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5l-8-5V6l8 5l8-5v2z"/></svg>
            <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Email" />
          </div>
          <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
            </svg>
            <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Username" />
          </div>
          <div class="flex items-center border-2 py-2 px-3 rounded-2xl  mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" class="h-5 w-5 text-gray-400" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M28.07 21L22 15l6.07-6l1.43 1.41L24.86 15l4.64 4.59L28.07 21zM22 30h-2v-5a5 5 0 0 0-5-5H9a5 5 0 0 0-5 5v5H2v-5a7 7 0 0 1 7-7h6a7 7 0 0 1 7 7zM12 4a5 5 0 1 1-5 5a5 5 0 0 1 5-5m0-2a7 7 0 1 0 7 7a7 7 0 0 0-7-7z"/></svg>
            <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Role" />
          </div>
          <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
            <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Password" />
          </div>
          <button type="submit" class="block w-full bg-hijau mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Simpan</button>


           
        </form>
      </div>
    </div>
    <!-- akhir login -->

    <!-- taildwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <!-- akhir -->

    <!-- config -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#FAFAFB",
              soft: "#FEECED",
              hijau: "#0de49d",
              secondary: "#F2404D",
              primary2: "#792027",
              primary3: "#F0F1F2",
            },
            fontFamily: {
              inter: "Inter, sans-serif",
            },
          },
        },
      };
    </script>
    <!-- akhir config -->
    
  </body>
</html>
