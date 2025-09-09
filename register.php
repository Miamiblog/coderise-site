<?php
$servername = "localhost";
$username = "root";  // default XAMPP username
$password = "";      // default XAMPP password is empty
$dbname = "coderise_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$level = $_POST['level'];

// Insert into DB
$sql = "INSERT INTO registrations (name, email, level) VALUES ('$name', '$email', '$level')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>✅ Registration Successful!</h2>";
    echo "<a href='register.html'>Go Back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register — CodeRise by Miami FX</title>

  <!-- SEO -->
  <meta name="description" content="Register for CodeRise by Miami FX and start learning coding step by step with a supportive community." />
  <meta name="author" content="Miami FX" />

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>html { scroll-behavior: smooth; }</style>
</head>
<body class="font-sans text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto flex justify-between items-center p-4">
      <h1 class="text-xl font-bold text-indigo-600">CodeRise</h1>
      <nav class="hidden md:flex space-x-6 text-gray-700 font-medium">
        <a href="index.html" class="hover:text-indigo-600 transition">Home</a>
        <a href="about.html" class="hover:text-indigo-600 transition">About</a>
        <a href="courses.html" class="hover:text-indigo-600 transition">Courses</a>
        <a href="how.html" class="hover:text-indigo-600 transition">How It Works</a>
        <a href="register.html" class="text-indigo-600 font-semibold">Register</a>
        <a href="contact.html" class="hover:text-indigo-600 transition">Contact</a>
      </nav>
      <button id="menu-btn" class="md:hidden text-gray-700">☰</button>
    </div>
    <div id="menu" class="hidden md:hidden flex flex-col bg-white shadow-md p-4 space-y-3">
      <a href="index.html">Home</a>
      <a href="about.html">About</a>
      <a href="courses.html">Courses</a>
      <a href="how.html">How It Works</a>
      <a href="register.html" class="text-indigo-600 font-semibold">Register</a>
      <a href="contact.html">Contact</a>
    </div>
  </header>

  <!-- Hero -->
  <section class="bg-indigo-50 py-16 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-indigo-700">Register Now</h2>
    <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
      Join CodeRise today and start your journey to becoming a developer.
    </p>
  </section>

  <!-- Registration Form -->
  <section class="max-w-lg mx-auto py-16 px-6">
   <form action="register.php" method="POST" class="bg-white p-8 rounded-2xl shadow space-y-6">
  <div>
    <label class="block text-gray-700 font-medium mb-2">Full Name</label>
    <input type="text" name="name" required class="w-full border border-gray-300 rounded-lg p-3">
  </div>
  <div>
    <label class="block text-gray-700 font-medium mb-2">Email</label>
    <input type="email" name="email" required class="w-full border border-gray-300 rounded-lg p-3">
  </div>
  <div>
    <label class="block text-gray-700 font-medium mb-2">Preferred Level</label>
    <select name="level" required class="w-full border border-gray-300 rounded-lg p-3">
      <option>Beginner</option>
      <option>Intermediate</option>
      <option>Advanced</option>
    </select>
  </div>
  <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-3 rounded-lg">Submit</button>
</form>
    <p class="text-center mt-6 text-sm text-gray-500">
      After registering, you’ll be redirected to WhatsApp to join the learning group.
    </p>
  </section>

  <!-- Footer -->
  <footer class="bg-indigo-600 text-white py-6 text-center">
    <p>&copy; 2025 CodeRise by Miami FX. All rights reserved.</p>
  </footer>

  <!-- Mobile Menu Script -->
  <script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>

</body>
</html>

