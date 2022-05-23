<style>
body {
    font-family: Calibri, sans-serif;
    font-size: 20px;
}
.container {
    height: fit-content;
    width: 100%;
    background-color: rgb(0, 0, 0, 0.3);
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border-radius: 6px;
}
li {
    float: left;
}
li a {
    display: block;
    color: rgb(0, 0, 0, 0.8);
    text-align: center;
    padding: 5px 10px;
    text-decoration: none;
}
#nav-buttons:hover {
    background-color: rgb(85, 169, 202);
}
.user-login-logout-signup-newpost-button {
    float: right;
    padding: 10px;
}
#search-box {
    line-height: 30px;
    padding-left: 20px;
    padding-right: 100px;
}
button {
    padding: 8px 8px 8px 8px;
    border-radius: 2px;
}
button:hover {
    cursor: pointer;
}
.search {
    border: 1px solid;
}
.name {
    font-size: 40px;
    overflow: hidden;
    text-decoration: none;
    color: tomato;
    margin-left: 12px;
    margin-top: -5px;
    text-decoration: underline;
}
#nav-buttons {
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>
<div class="container">
    <header>
        <nav>
            <ul>
                <li><a href="#" class="name">Woardlogs</a></li>
                <li id="nav-buttons"><a href="index.php">Home</a></li>
                <li id="nav-buttons"><a href="contact_us.php">Contact us</a></li>
                <?php
                error_reporting(E_ALL ^ E_WARNING && E_NOTICE);
                session_start();
                if (!$_SESSION['username']) {
                    echo"<div class=\"user-login-logout-signup-newpost-button\">
                            <form action=\"login.php\">
                                <button id=\"login-signup-button\" type=\"submit\">
                                    Login
                                </button>
                            </form>
                        </div>
						<div class=\"user-login-logout-signup-newpost-button\">
                            <form action=\"registration.php\">
                                <button id=\"login-signup-button\" type=\"submit\">
                                    Sign-up
                                </button>
                            </form>
                        </div>";
                } else {
                    echo "
						<div class=\"user-login-logout-signup-newpost-button\" style=\"padding-top: 14px;\">Hi, ", $_SESSION['username'], "</div>
						<div class=\"user-login-logout-signup-newpost-button\">
							<form action=\"logout.php\">
                                <button type=\"submit\">
                                    Logout
                                </button>
                            </form>
                        </div>
						<div class=\"user-login-logout-signup-newpost-button\">
                        <form action=\"new_post.php\">
                            <button type=\"submit\">New Post+</button>
                        </form>
                    </div>";
                }
                ?>
            </ul>
        </nav>
    </header>
</div>
