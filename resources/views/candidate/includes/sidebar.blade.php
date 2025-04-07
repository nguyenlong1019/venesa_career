<!-- Sidebar -->
<aside class="sidebar">
  <div class="sidebar-header">
    <h2>Venesa Career</h2>
  </div>
  <ul class="sidebar-menu">
    <li class="active"><a href="#">Profile</a></li>
    <li><a href="/">Jobs</a></li>
    <li><a href="/candidate/cv-list">CV</a></li>
    <li><a href="/company/logout">Logout</a></li>
  </ul>
</aside>
<style>
  .sidebar {
  width: 220px;
  height: 100vh;
  background-color: #222;
  color: #fff;
  position: fixed;
  top: 0;
  left: 0;
  padding: 20px 15px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  z-index: 1000;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
}

.sidebar-header {
  text-align: center;
  margin-bottom: 30px;
}

.sidebar-header h2 {
  margin: 0;
  font-size: 20px;
}

.sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar-menu li {
  margin: 10px 0;
}

.sidebar-menu li a {
  color: #fff;
  text-decoration: none;
  display: block;
  padding: 8px 12px;
  border-radius: 4px;
}

.sidebar-menu li.active a,
.sidebar-menu li a:hover {
  background-color: #444;
}

.logout-form {
  margin-top: 30px;
}

.logout-form button {
  width: 100%;
  padding: 10px;
  background-color: #ff4d4d;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.logout-form button:hover {
  background-color: #e60000;
}
</style>