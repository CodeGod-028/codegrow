<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
  margin: 0;
  font-family: 'Arial', sans-serif;
  background-color: #121212;
  color: white;
}

.admin-container {
  display: flex;
}

.sidebar {
  width: 250px;
  background-color: #1e1e1e;
  height: 100vh;
  padding: 20px;
  box-sizing: border-box;
}

.sidebar h2 {
  color: #f39c12;
  margin-bottom: 30px;
  text-align: center;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar ul li {
  margin: 15px 0;
}

.sidebar ul li a {
  color: white;
  text-decoration: none;
  font-size: 16px;
  display: block;
  padding: 8px 12px;
  border-radius: 5px;
}

.sidebar ul li a:hover {
  background-color: #333;
  color: #f39c12;
}

.main-content {
  flex: 1;
  padding: 30px;
  background-color: #222;
  min-height: 100vh;
}

/* Dashboard Boxes */
.dashboard-boxes {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.box {
  flex: 1;
  background: #333;
  padding: 20px;
  border-radius: 8px;
  min-width: 200px;
  text-align: center;
}

.box h3 {
  margin: 0 0 10px;
  color: #f39c12;
}

form {
  display: grid;
  gap: 15px;
  text-align: left;
  max-width: 800px;
  margin: auto;
  background-color: #1e1e1e;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 0 10px #111;
}

label {
  font-weight: bold;
  color: #f39c12;
}

input, select {
  width: 100%;
  padding: 10px;
  font-size: 14px;
  background-color: #2c2c2c;
  color: white;
  border: 1px solid #444;
  border-radius: 5px;
}

button {
  background: #f39c12;
  color: white;
  padding: 10px 15px;
  border: none;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background: #d68910;
}

table {
  width: 100%;
  border-collapse: collapse;
  background: #222;
  margin-top: 20px;
}

table th, table td {
  padding: 10px;
  border: 1px solid #333;
  text-align: left;
}

table th {
  background-color: #333;
  color: #f39c12;
}

table td {
  color: white;
}



</style>
<body>
<div class="admin-container">
  <aside class="sidebar">
    <h2>Admin Panel</h2>
    <nav>
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="managequestions.php">Manage Question</a></li>
        <li><a href="?page=view_questions">View Questions</a></li>
        <li><a href="?page=view_submissions">Submissions</a></li>
        <li><a href="users.php">Manage Users</a></li>
      </ul>
    </nav>
  </aside>