<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            color: #fff;
        }

        /* Contact page section styling */
        #contact_page {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* Contact card styling */
        .contact-card {
            background-color: #333;
            padding: 30px 40px;
            border-radius: 10px;
            text-align: center;
            max-width: 350px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .contact-card h1 {
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #ffd700;
        }

        .contact-links a {
            display: block;
            margin: 15px auto;
            padding: 12px 0;
            width: 80%;
            border-radius: 5px;
            color: #333;
            background-color: #ffd700;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .contact-links a:hover {
            background-color: #fff;
        }

        /* Social Icons */
        .social-icon {
            margin-right: 10px;
            vertical-align: middle;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <?php include "top_menu.php"; ?>

    <div id="contact_page">
        <div class="contact-card">
            <h1>Contact Me</h1>
            <p>Feel free to reach out via Telegram or Facebook!</p>
            <div class="contact-links">
                <a href="https://t.me/Soknan523" target="_blank">
                    <span class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                        </svg>
                    </span>Telegram
                </a>
                <a href="https://web.facebook.com/poch.soknan.231103" target="_blank">
                    <span class="social-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                    </span>Facebook
                </a>
            </div>
        </div>
    </div>
</body>
    <style>
        #contact_page_menu{
            background-color: blue;
        }
    </style>
</html>
