<?php
// header.php
if (isset($_GET['v'])) {
    $version = $_GET['v'];
} else {
    $version = "2025.01";
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="/good-news-collections/பவுலின்-மிஷினரி-பயணங்கள்/manifest.json?v=<?php echo $version; ?>">
    <meta name="theme-color" content="#2196f3">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/styles.css?v=<?php echo $version; ?>">
    <title>பவுலின் மிஷினரி பயணங்கள் - விரிவுரை - Missionary Journey of Paul Tamil Bible Commentary, published by Good News, hosted by Word of God Team, www.WordOfGod.in</title>
    <meta name="description" content="பவுலின் மிஷினரி பயணங்கள் - விரிவுரை - Missionary Journey of Paul Tamil Bible Commentary, published by Good News, hosted by Word of God Team, www.WordOfGod.in" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8ZYHRZG9B8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-8ZYHRZG9B8');
    </script>

</head>
