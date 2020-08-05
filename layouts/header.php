<header>
    <div class="black-header">
        <div class="container">
            <div class="inner-black">
                <div class="mobile d-none d-md-flex">
                    <img src="../src/images/call-icon.svg" alt="">
                    <a href="#">+7 707 604 02 08</a>
                </div>
                <div class="cart-section d-md-flex">
                    <p class="luxurymebel">luxurymebel</p>
                </div>
            </div>
        </div>
    </div>
    <div class="white-header">
        <div class="container">
            <div class="inner-white d-none d-md-flex">
                <div class="left-side">
                    <img src="../src/images/big-logo.png" alt="" class="logo">
                </div>
                <div>

                    <?php
//                    $uri = explode( '/', $_SERVER['REQUEST_URI'])[0];
                    $uri = $_SERVER['REQUEST_URI'];
                    $routes = require '../config/routes.php';
                    foreach ($routes as $route => $value) {
                        $activeClass = $uri === '/'.$value['file_location'] ? "class='active'" : "";
                        echo "<a href='/{$value['file_location']}' {$activeClass}>{$value['name']}</a>";
                    }
                    ?>

                </div>
                <div class="right-side">
                    <button class="green-btn-outline" type="button" data-toggle="modal" data-target="#zayavkaModal">Оставить заявку</button>
                </div>
            </div>
            <div class="inner-white-mobile d-md-none">
                <img src="../src/images/big-logo.png" alt="" class="logo-m">
                <div class="right-side">
                    <img src="../src/images/menu-mobile-icon.svg" onclick="openNav()" alt="">
                </div>
                <div id="myNav" class="overlay">
                    <img src="../src/images/close-icon.svg" alt="" class="closebtn" onclick="closeNav()">
                    <div class="overlay-content">
                        <p class="mob-menu-logo">luxurymebel</p>

                        <?php
                        //                    $uri = explode( '/', $_SERVER['REQUEST_URI'])[0];
                        $uri = $_SERVER['REQUEST_URI'];
                        $routes = require '../config/routes.php';
                        foreach ($routes as $route => $value) {
                            $activeClass = $uri === '/'.$value['file_location'] ? "class='active'" : "";
                            echo "<a href='/{$value['file_location']}' {$activeClass}>{$value['name']}</a>";
                        }
                        ?>

                        <div class="border-line"></div>
                        <a href="">+7 777 229 88 89</a>
                        <a href="">+7 747 981 98 62</a>
                        <button class="green-btn-outline" type="button" data-toggle="modal" data-target="#zayavkaModal">Оставить заявку</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade zayavka-modal" id="zayavkaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Оставьте заявку</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><img src="../src/images/modal-close.png"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Имя</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Введите имя" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Телефон</label>
                            <input type="text" class="form-control" id="recipient-phone" placeholder="Введите телефон" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">E-mail</label>
                            <input type="text" class="form-control" id="recipient-email" placeholder="Введите e-mail" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Сообщение</label>
                            <textarea class="form-control" id="message-text" placeholder="Введите сообщение..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="green-btn detail-info-btn" type="submit"><span>Отправить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
    <!--                    <div class="dropdown">-->
    <!--                        <a class="dropbtn">Товары и услуги</a>-->
    <!--                        <div class="dropdown-content">-->
    <!--                            <a href="/iss-gazon.html">Искусственный газон</a>-->
    <!--                            <a href="/sport-areas.html">Строительство спортивных площадок</a>-->
    <!--                        </div>-->
    <!--                    </div>-->
</header>
