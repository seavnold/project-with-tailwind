<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Alpine Js -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- BoxIcons -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <!-- Tailwind CSS -->
  <link href="/dist/output.css" rel="stylesheet">
</head>
<body class="antialiased min-h-screen relative lg:flex" x-data="{open: false}">
    <!-- Sidebar -->
    <?php include_once "../components/sidebar.php"; ?>

    <Main class="h-screen w-full">
        <!-- Header -->
        <?php include_once "../components/header.php"; ?>

        <!-- Page -->
        <div class="h-[calc(100vh_-_75px)]">Users</div>
    </Main>

    <!-- Script -->
    <script type="text/javascript" src="/js/index.js"></script>
</body>
</html>