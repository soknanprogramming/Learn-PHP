    <style>
    body{
        margin : 0px;
    }
    #image_on_top{
        width: 50%;
        display: block;
        margin: 0 auto;
    }
    </style>
    <img id="image_on_top" src="image_on_top.webp">

    <!-- menu items -->
    <style>
        #ul_menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        .li_menu {
            float: left;
        }

        .li_menu a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        .li_menu a:hover {
            background-color: #111;
        }
        .main {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }
    </style>
    <ul id="ul_menu">
        <li class="li_menu" id="home_li"><a href="home_page_all.php">Home</a></li>
        <li class="li_menu" id="about_page"><a href="about_page.php">About</a></li>
        <li class="li_menu" id="contact_page_menu"><a href="contact_page.php">Contact</a></li>
    </ul>