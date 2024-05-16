<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$env = $_ENV['APP_ENV'];

$config = [
    'development' => [
        'baseUrl' => "http://localhost:3000/",
    ],

    'staging' => [
        'baseUrl' => "https://thedomaindesigners.com/staging/",
    ],
    'production' => [
        'baseUrl' => "http://localhost:3000/",
    ]
];

$currentConfig = $config[$env];
?>


<!-- Give all scripts access to global config -->
<script type="text/javascript">
  const config = <?php echo json_encode($currentConfig); ?>;
</script>