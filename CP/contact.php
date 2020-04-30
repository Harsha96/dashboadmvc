<!DOCTYPE html>
<html lang="en">
<head>

<?php include ('../content/header.php')?>
<?php  require('../Connection/dbconnection.php'); ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <div class="wrapper">
    <!-- header  include-->
    <?php include ('../content/navbar.php')?>
    <!-- left Sidebar Container -->
    <?php include ('../content/leftsidebar.php')?>
    <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Contacts</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contacts</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

    <table border="1">
        <thead>
            <tr>
                <th>Contact Name</th>
                <th>Contact Job</th>
                <th>Contact Address</th>
                <th>Contact Phone No</th>
            </tr>
        </thead>
        <tbody id="table_body">

        </tbody>
    </table>

<script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.1/firebase.js"></script>
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyATzoPL0AGfPEJnAdM5zzar27aOVGCb5kY",
      authDomain: "webstazyprojects.firebaseapp.com",
      databaseURL: "https://webstazyprojects.firebaseio.com",
      projectId: "webstazyprojects",
      storageBucket: "webstazyprojects.appspot.com",
      messagingSenderId: "394142967275",
      appId: "1:394142967275:web:ca37732568bf62d75e65ae"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
  </script>
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="newscript.js"></script>

  <button  name="ADD CONTACT" class="btn btn-success">    <a href="addcontact.php" style="color:white;">Add New</a></button>
  <!-- /.content -->
</div>
<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2020<a href="">webstazy</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.0.4
  </div>
</footer>
<script type="text/javascript">
  <?php include ('../content/footer.php')?>
</script>

</body>
</html>
