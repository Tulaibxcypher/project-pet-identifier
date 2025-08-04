<?php 
	// include('functions.php');

	// if (!isLoggedIn()) {
	// 	$_SESSION['msg'] = "You must log in first";
	// 	header('location: functions.php');
	// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<style>
        .main {
            background-image: url('img/Main.jpg');
            background-color: #000;
            background-size: cover;
            background-position: center;
        }

        .heading{
            color: white;
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            font-style: normal;
            font-weight: 900;
            justify-content: center;
            align-items: center;
            line-height: normal;   
            
        }


        .head{
            color: white;
            font-family: 'Playfair Display', serif;
            
        }

        .nav{
            position: absolute;
            padding: 1rem;
        }


        .grad1 {
            background-color: brown;
            height: 483px;
            width: 100%;
            position: absolute;
            top: 0; /* Adjusted to start from the top */
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.65) 40.00%, rgba(11, 11, 11, 0.00) 96.20%);
        }

        .grad2 {
            background-color: brown;
            height: 380px;
            width: 100%;
            position: absolute;
            bottom: 0; /* Adjusted to start from the bottom */
            background: linear-gradient(180deg, rgba(11, 11, 11, 0.00) 10.27%, rgba(0, 0,0, 0.65) 99.21%);
        }

        .grad3 {
            background-color: brown;
            height: 483px;
            width: 100%;
          
            top: 0; /* Adjusted to start from the top */
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.74) 29.39%, rgba(255, 255, 255, 0.00) 80.9%);
        }

        .grad4 {
            background-color: brown;
            height: 380px;
            width: 100%;
           
            bottom: 0; /* Adjusted to start from the bottom */
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 10.27%, rgba(255, 255,255, 0.70) 99.21%);
        }

        #subHeading{
            color: rgb(255, 255, 255);
            font-family: 'Playfair Display', serif;
        }

        .mainHeading{
            color: rgba(6, 78, 59);;
            font-family: 'Playfair Display', serif;
        }

        .OurPlans{
            color: rgba(6, 78, 59);;
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            font-size: 36px;
        }

        .OurPlans{
            transition: all 0.3s ease;
        }


        .OurPlans:hover{
            color: rgb(5, 60, 46);;
            font-family: 'Playfair Display', serif;
            font-weight: 1000;
            font-size: 40px;

        }
        
        

        .shadow-custom {
            box-shadow: 8px 10px 25px 1px rgba(6, 78, 59, 0.4);
        }

        .navi{
            border-radius: 50px;
            width: 90%;
            margin-right: 74px;
        }


        .centerNav {
            transition: top 0.5s ease; /* Smooth transition for the 'top' property */
        }
        
        .centerNav.fixed {
            top: -100px; /* Move the navigation bar off-screen by default */
        }
        
        .centerNav.visible {
            top: 0; /* Bring the navigation bar back on-screen */
        }
      

        .vision{
            color: rgba(6, 78, 59);

            font-family: 'Playfair Display', serif;
            font-size: 25px;
            font-weight: 400;


        }


        .leaf{
            
                background-image: url('img/leaf1.png');
                background-size: cover;
                background-position: center;
            
        }


        .wrapper{
            display:grid;
            height:50vh;
            place-items:center
          }

          .card1:hover {
            z-index: 2; /* Make the hovered card appear on top */
            transform: scale(1.05); /* Enlarge the hovered card */
            filter: brightness(110%); /* Increase brightness of the hovered card */
            opacity: 100%;
          }
        

          .card2:hover {
            z-index: 2; /* Make the hovered card appear on top */
            transform: scale(1.05); /* Enlarge the hovered card */
            filter: brightness(110%); /* Increase brightness of the hovered card */
            opacity: 100%;
          }

          .card3:hover {
            z-index: 2; /* Make the hovered card appear on top */
            transform: scale(1.05); /* Enlarge the hovered card */
            filter: brightness(110%); /* Increase brightness of the hovered card */
            opacity: 100%;
          }

        
          .card1,
          .card2,
          .card3 {
            transition: all 0.3s ease; /* Add smooth transition effect */
          }
    </style>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-blue-800">

<!-- NAV -->
<!-- color: rgba(146, 255, 8, 1); -->
<div class="centerNav flex items-center justify-center w-full px-10 mb-40 transition tracking-normal ease-in-out-500" style="position: sticky;">
    <div class="navi border-rounded py-4 px-8 flex justify-between items-center z-10 mt-9 hidden md:flex" style="background-color: rgb(6, 78, 59)">
        <nav class="head flex items-center justify-between opacity-75 text-center w-full">
            <div class="A">
                <h2 class="heading font-semibold pl-10">Petpal</h2>
            </div>

            <div class="B flex-grow text-center">
                <a href="#" class="home_btn hover:bg-white hover:text-gray-900 px-3 py-1 rounded text-xl">Home</a>
                <a href="#" class="menu_btn hover:bg-white hover:text-gray-900 px-3 py-1 rounded text-xl" onclick="toggleMenu()">Menu</a>
                <a href="#" class="extra_btn hover:bg-white hover:text-gray-900 px-3 py-1 rounded text-xl">Extra</a>
            </div>

            <div class="content C">
                <!-- notification message -->
                <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success">
                    <h3>
                        <?php 
                            echo $_SESSION['success']; 
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
                <?php endif ?>
                <!-- logged in user information -->
                <div class="profile_info">
                    <div style="color: rgba(146, 255, 8, 1);" class="text-xl px-4 py-1 rounded mr-10">
                        <?php  if (isset($_SESSION['user'])) : ?>
                        <strong><?php echo $_SESSION['user']['username']; ?></strong>
                        <small>
                            <a href="index.php?logout='1'" style="color: white;">logout</a>
                        </small>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<div id="menuButtons" class="hidden absolute top-36 right-1/2 transform translate-x-1/2 -translate-y-1/4 bg-green-800 p-4 rounded border w-50px border-gray-400" style="border-radius: 10px;">
    <?php 
	 echo "<button class='bg-blue-800 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-7' onclick='location.href=\"add_plant.php\";'>Add Plants</button>";
	?>
    <button class="update_btn mr-2 px-3 py-1 rounded bg-green-500 text-white">Update</button>
    <button class="search_btn px-3 py-1 rounded bg-yellow-500 text-white">Search</button>
</div>

<!-- NAV ENDED -->



<div class="max-w-3xl ml-56 bg-white rounded shadow-md mt-8 bg-green-100">
    <h1 class="text-5xl font-semibold mb-6 text-green-900">Active users</h1>

	
	
        <?php
        // Database connection parameters
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "petpal";

        // Create connection
        $connection = mysqli_connect($server, $user, $password, $database);

        // Check connection
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            
			echo "<button class='bg-green-800 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-7' onclick='location.href=\"add_plant.php\";'>Add</button>";

			echo "<table class='table-auto w-full border border-green-800 border-rounded' style='border-width:4px;'> ";

            echo "<thead>";
            echo "<tr><th class='px-4 py-2 text-green-800'>ID</th><th class='px-4 py-2 text-green-800 class='px-4 py-2 text-green-800'>name</th><th class='px-4 py-2 text-green-800'>phone</th><th class='px-4 py-2 text-green-800'>email</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr class='text-blue-800'>";
                echo "<td class='border  border-blue-800 px-4 py-2'>".$row['id']."</td>";
                echo "<td class='border  border-blue-800 px-4 py-2'>".$row['name']."</td>";
                echo "<td class='border px-4 py-2  border-blue-800'>".$row['phone']."</td>";
                echo "<td class='border px-4 py-2  border-blue-800'>".$row['email']."</td>";

				
				echo "<td class='border px-4 py-2 border-green-800'>
				<button class='btn px-4 py-1 mt-2 edit-btn' 
				data-id='".$row['id']."'
				style='background-color: rgba(146, 255, 8, 1); color:black; border-radius:5px'
				onclick='location.href=\"update_plant.php?plant_id=".$row['id']."\";'>
				<b>Edit</b> 
				</button>
     			 </td>";

				echo "<td class='border px-4 py-2 border-green-800'>
          <button class='btn px-4 py-1 mt-2 delete-btn' 
                  data-plant-id='".$row['id']."'
                  style='background-color: red; color:black; border-radius:5px'>
				  <b>Delete</b>
          </button>
      </td>";

                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            // No data exist, display a button to add 
            echo "<button class='bg-blue-800 hover:bg-blueblue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-7' onclick='location.href=\"add_plant.php\";'>Add Plants</button>";
        }

        // Close the database connection
        mysqli_close($connection);
        ?>
    </div>





<!-- delete -->
	<script>
    document.addEventListener('DOMContentLoaded', function() {
        var deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var plantId = this.getAttribute('data-id');
                if(confirm("Are you sure you want to delete this user?")) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'delete_plant.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onreadystatechange = function() {
                        if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                            // Refresh the page after successful deletion
                            location.reload();
                        }
                    };
                    xhr.send('id=' + id);
                }
            });
        });
    });

	function toggleMenu() {
        var menuButtons = document.getElementById('menuButtons');
        if (menuButtons.classList.contains('hidden')) {
            menuButtons.classList.remove('hidden');
        } else {
            menuButtons.classList.add('hidden');
        }
    }
</script>








</body>
</html>