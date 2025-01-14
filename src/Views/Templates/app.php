<?php
/** @var string $view */
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio Dev</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        red: '#E3646E',
                        purple: '#BB72E9',
                        blue: '#3996DB',
                        green: '#82BC4F',
                        yellow: '#EABD5F',
                        gray: {
                            100: '#0D0E11',
                            200: '#16181D',
                            300: '#292C34',
                            400: '#878EA1',
                            500: '#C0C4CE',
                            600: '#E2E4E9'
                        },
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-200 text-white py-4">
    <?php include_once __DIR__ . "/../../Views/$view.view.php" ?>
</body>
</html>