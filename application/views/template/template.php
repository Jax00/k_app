<html>
<head>
<title>Employees</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
    <div id="menu">
        <?php if (isset($menu)) echo $menu; ?>
    </div>
    <div id="content">
        <?php if (isset($content)) echo $content; ?>
    </div>
    <div id="profiler">
        <?php // echo View::factory('profiler/stats'); ?>
    </div>
</body>
</html>