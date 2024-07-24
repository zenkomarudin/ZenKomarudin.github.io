<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .not-found-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
            text-align: center;
            color: #333;
            padding: 20px;
            box-sizing: border-box;
        }

        .not-found-container h1 {
            font-size: 5em;
            margin: 0;
            color: #ff7e5f;
        }

        .not-found-container h2 {
            font-size: 2em;
            margin: 20px 0;
            color: #feb47b;
        }

        .not-found-container p {
            font-size: 1.2em;
            color: #777;
        }

        .not-found-container a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff7e5f;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .not-found-container a:hover {
            background-color: #feb47b;
        }

        @media (max-width: 768px) {
            .not-found-container h1 {
                font-size: 3em;
            }

            .not-found-container h2 {
                font-size: 1.5em;
            }

            .not-found-container p {
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            .not-found-container {
                padding: 10px;
            }

            .not-found-container h1 {
                font-size: 2.5em;
            }

            .not-found-container h2 {
                font-size: 1.2em;
            }

            .not-found-container p {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="not-found-container">
        <h1>404</h1>
        <h2>Halaman Tidak Ditemukan</h2>
        <p>Maaf, halaman yang Anda cari <b><i> sedang dalam pengembangan</i></b>. Silakan kembali ke halaman utama.</p>
        <a href="index.php">Kembali ke Halaman Utama</a>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
