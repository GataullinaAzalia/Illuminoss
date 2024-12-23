<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <header class="header _container _container768 _container1200">
            <div class="header__content">
                <a class="header_logo" href="index.php"></a>
                <div class="menu-list__index">
                    <a class="text-mon18__bold" href="descriptionFilm.php">Фильмы</a>
                    <a class="text-mon18__bold" href="news.php">Новости</a>
                    <a class="text-mon18__bold" href="aboutUs.php">О нас</a>
                    <a class="text-mon18__bold" href="reviews.php">Отзывы</a>
                    <a class="text-mon18__bold" href="discounts.php">Скидки</a>
                    <a class="text-mon18__bold" href="favoriteProjects.php">История</a>
                </div>
                <div class="icon-header__index display__none320 display__flex">
                    <div class="icon1-text__index">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1249 12.25C20.1249 13.2842 19.9212 14.3082 19.5255 15.2636C19.1297 16.2191 18.5497 17.0872 17.8184 17.8185C17.0871 18.5497 16.219 19.1298 15.2636 19.5256C14.3081 19.9213 13.2841 20.125 12.2499 20.125C11.2158 20.125 10.1917 19.9213 9.23631 19.5256C8.28087 19.1298 7.41274 18.5497 6.68148 17.8185C5.95021 17.0872 5.37015 16.2191 4.97439 15.2636C4.57864 14.3082 4.37494 13.2842 4.37494 12.25C4.37494 10.1614 5.20463 8.15839 6.68148 6.68154C8.15833 5.20469 10.1614 4.375 12.2499 4.375C14.3385 4.375 16.3416 5.20469 17.8184 6.68154C19.2953 8.15839 20.1249 10.1614 20.1249 12.25ZM18.6899 20.545C16.5801 22.183 13.9253 22.9553 11.2661 22.7048C8.60685 22.4542 6.14305 21.1996 4.37625 19.1964C2.60946 17.1933 1.67251 14.592 1.75613 11.9223C1.83975 9.25261 2.93766 6.71512 4.82636 4.82642C6.71506 2.93773 9.25255 1.83981 11.9223 1.75619C14.592 1.67257 17.1932 2.60952 19.1964 4.37632C21.1996 6.14311 22.4541 8.60691 22.7047 11.2662C22.9552 13.9254 22.1829 16.5802 20.5449 18.69L25.4274 23.5725C25.5564 23.6927 25.6598 23.8376 25.7316 23.9986C25.8033 24.1596 25.8419 24.3334 25.845 24.5096C25.8481 24.6858 25.8157 24.8609 25.7497 25.0243C25.6836 25.1877 25.5854 25.3362 25.4608 25.4608C25.3361 25.5855 25.1877 25.6837 25.0242 25.7497C24.8608 25.8157 24.6858 25.8481 24.5095 25.845C24.3333 25.8419 24.1595 25.8034 23.9985 25.7316C23.8375 25.6599 23.6926 25.5565 23.5724 25.4275L18.6899 20.545Z" fill="#7C8685" />
                        </svg>
                        <a class="text-mon18__bold" href="search.php">Поиск</a>
                    </div>
                    <div class="icon1-text__index">
                        <a href="support.php">
                            <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6 25.6V22.8H23.8V12.86C23.8 10.13 22.8494 7.81442 20.9482 5.91322C19.047 4.01202 16.7309 3.06096 14 3.06002C11.2691 3.05909 8.95347 4.01016 7.0532 5.91322C5.15293 7.81629 4.20187 10.1319 4.2 12.86V21.4H2.8C2.03 21.4 1.37107 21.1261 0.8232 20.5782C0.275333 20.0304 0.000933333 19.371 0 18.6V15.8C0 15.31 0.122733 14.8494 0.3682 14.4182C0.613667 13.987 0.9576 13.6426 1.4 13.385L1.505 11.53C1.69167 9.94336 2.15273 8.47336 2.8882 7.12002C3.62367 5.76669 4.54533 4.58836 5.6532 3.58502C6.76107 2.58169 8.03227 1.80002 9.4668 1.24002C10.9013 0.680024 12.4124 0.400024 14 0.400024C15.5876 0.400024 17.0926 0.680024 18.515 1.24002C19.9374 1.80002 21.2091 2.57609 22.33 3.56822C23.4509 4.56036 24.3726 5.73262 25.095 7.08502C25.8174 8.43742 26.2841 9.90742 26.495 11.495L26.6 13.315C27.0433 13.525 27.3877 13.84 27.6332 14.26C27.8787 14.68 28.0009 15.1234 28 15.59V18.81C28 19.2767 27.8777 19.72 27.6332 20.14C27.3887 20.56 27.0443 20.875 26.6 21.085V22.8C26.6 23.57 26.3261 24.2294 25.7782 24.7782C25.2303 25.327 24.5709 25.601 23.8 25.6H12.6ZM9.8 15.8C9.40333 15.8 9.07106 15.6656 8.8032 15.3968C8.53533 15.128 8.40093 14.7958 8.4 14.4C8.39907 14.0043 8.53347 13.672 8.8032 13.4032C9.07293 13.1344 9.4052 13 9.8 13C10.1948 13 10.5275 13.1344 10.7982 13.4032C11.0689 13.672 11.2028 14.0043 11.2 14.4C11.1972 14.7958 11.0628 15.1285 10.7968 15.3982C10.5308 15.668 10.1985 15.8019 9.8 15.8ZM18.2 15.8C17.8033 15.8 17.4711 15.6656 17.2032 15.3968C16.9353 15.128 16.8009 14.7958 16.8 14.4C16.7991 14.0043 16.9335 13.672 17.2032 13.4032C17.4729 13.1344 17.8052 13 18.2 13C18.5948 13 18.9275 13.1344 19.1982 13.4032C19.4689 13.672 19.6028 14.0043 19.6 14.4C19.5972 14.7958 19.4628 15.1285 19.1968 15.3982C18.9308 15.668 18.5985 15.8019 18.2 15.8ZM5.635 13.63C5.47167 11.1567 6.21833 9.03336 7.875 7.26002C9.53166 5.48669 11.5967 4.60002 14.07 4.60002C16.1467 4.60002 17.9727 5.25896 19.5482 6.57682C21.1237 7.89469 22.0743 9.58122 22.4 11.6364C20.2767 11.6122 18.3227 11.04 16.5382 9.92002C14.7537 8.80002 13.3826 7.28336 12.425 5.37002C12.0517 7.23669 11.2644 8.89942 10.0632 10.3582C8.862 11.817 7.38593 12.9076 5.635 13.63Z" fill="#7C8685" />
                            </svg>
                        </a>
                        <a class="text-mon18__bold" href="authorization.php">Войти</a>
                    </div>
                </div>
                <div class="burger-bg display__none800">
                    <div class="burger">
                      <span>
                      </span>
                    </div>
                </div>
            </div>
        </header>
        <div class="line _container768 _container1200"></div>
        <section class="content__support _container _container768 _container1200">
            <div class="text-mon24__bold _color-gradient display__none display__none800">Добавление фильма или сериала</div>
            <div class="text-mon36__bold _color-gradient display__none320 display__flex  display__none800">Добавление фильма или сериала</div>
            <div class="text-mon48__bold _color-gradient display__none display__none320 display-flex800">Добавление фильма или сериала</div>
            <form class="block-text__support _gap30" action="assets/php/add_product.php" method="post" enctype="multipart/form-data">
                <div class="input-container ic1">
                    <input class="input" type="text" name="name" placeholder="Название фильма" required/>
                </div>
                <div class="input-container ic1">
                     <textarea class="input"  name="briefdescription" placeholder="Краткое описание фильма" required></textarea>
                </div>
                <div  class="input-container ic1">
                       <textarea class="input"  name="description" placeholder="Описание фильма" required></textarea>
                </div>
                <div  class="input-container ic1">
                      <textarea class="input"  name="year" placeholder="Год" required></textarea>
                </div>
                <div  class="input-container ic1">
                    <input type="file" name="image" required>
                </div>
                <div  class="input-container ic1">
                    <textarea class="input"  name="country" placeholder="Страна" required></textarea>
                </div>
                <div  class="input-container ic1">
                    <select class="input-container ic1" name="genre_id">
                    <?php 
                        require_once ("assets/php/dbconnect.php");

                        $result = $my_sql->query("SELECT * FROM genres");
                        if (!$result) {
                            echo("Какая-то ошибка");
                            exit();
                        }

                        $genres = [];
                        while ($genre = $result->fetch_assoc()) {
                            $genres[] = $genre;
                        }

                        foreach ($genres as $genre) {
                    ?>
                        <option value="<?= $genre['id']?>"><?= $genre['name']?></option>                        
                   
                    <?php 
                        }
                    ?>
                    </select>
                </div>
                <div  class="input-container ic1">
                       <select  class="input"  name="category">
                        <option name="films" value="films">Фильм</option>
                        <option name="series" value="series">Сериал</option>
                       </select>
                </div>
                 <button class="btn__support __margin-top15 _w0">
                <div class="text-mon15__bold display__none display__none800 ">Добавить фильм</div>
                <div class="text-mon20__bold display__none320 display__flex _color-white">Добавить фильм</div>
            </button>
            </form>
        </section>
        <div class="content__support _container _container768 _container1200">
            <div class="block-card__aboutus _js-center">
                <table id="output-categories" style="width: 800px;  margin: 0 auto;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Brief description</th>
                            <th>Description</th>
                            <th>Year</th>
                            <th>Image</th>
                            <th>Country</th>
                            <th>Genre</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        require_once ("assets/php/dbconnect.php");

                        $result = $my_sql->query("SELECT * FROM products");
                        if (!$result)
                        {
                            echo("Какая-то ошибка");
                            exit();
                        }

                        $categoryResult = $my_sql->query("SELECT * FROM genres");
                        $categories = [];

                        while ($category = $categoryResult->fetch_assoc()) {
                            $categories[$category['id']] = $category['name'];
                        }

                        $products = [];
                        while ($product = $result->fetch_assoc())
                        {
                            $products[] = $product;
                        }

                        foreach ($products as $product)
                        {
                    ?>
                    <tr>
                        <th><?= $product['id'] ?></th>
                        <th><?= $product['name'] ?></th>
                        <th><?= $product['briefdescription'] ?></th>
                        <th><?= $product['description'] ?></th>
                        <th><?= $product['year'] ?></th>
                        <th><?= $product['image'] ?></th>
                        <th><?= $product['country'] ?></th>
                        <th><?= $categories[$product['genre_id']] ?></th>
                        <th><?= $product['category'] ?></th>
                        <th><a href="adminEditProducts.php?id=<?= $product["id"] ?>"><button class="table-btn__update">Изменить<br>данные</button></a></th>
                        <th><a href="assets/php/delete.php?id=<?= $product["id"] ?>&action=products"><button class="table-btn__delete">Удалить<br>данные</button></a></th>
                    </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="line _container768 _container1200"></div>
        <footer class="footer _container768 _container1200">
            <div class="icon__footer">
                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M29.5666 25.274H26.4303C25.2436 25.274 24.8861 24.3128 22.759 22.1843C20.9 20.3927 20.1149 20.17 19.6446 20.17C18.9942 20.17 18.8169 20.3487 18.8169 21.2438V24.0653C18.8169 24.8285 18.5694 25.2753 16.5756 25.2753C14.6414 25.1454 12.7657 24.5578 11.1031 23.5609C9.44044 22.5641 8.03842 21.1865 7.0125 19.5416C4.57653 16.5097 2.8816 12.9513 2.0625 9.14934C2.0625 8.67909 2.24125 8.25284 3.13775 8.25284H6.27275C7.0785 8.25284 7.36863 8.61172 7.68488 9.44084C9.207 13.9206 11.8044 17.8173 12.859 17.8173C13.2633 17.8173 13.4392 17.6386 13.4392 16.6307V12.0162C13.3059 9.91109 12.188 9.73372 12.188 8.97197C12.2021 8.771 12.2941 8.58346 12.4443 8.44918C12.5945 8.31491 12.7911 8.24447 12.9924 8.25284H17.9204C18.5941 8.25284 18.8169 8.58834 18.8169 9.39409V15.6228C18.8169 16.2952 19.1056 16.518 19.3091 16.518C19.7134 16.518 20.0241 16.2952 20.7653 15.5555C22.3539 13.6181 23.6517 11.4596 24.618 9.14797C24.7169 8.87043 24.9039 8.63286 25.1504 8.47149C25.3969 8.31012 25.6894 8.23382 25.9834 8.25422H29.1197C30.0602 8.25422 30.2596 8.72447 30.0602 9.39547C28.9195 11.9508 27.508 14.3764 25.85 16.6307C25.5117 17.1463 25.377 17.4145 25.85 18.0195C26.1607 18.4897 27.2608 19.4082 27.9991 20.2813C29.0744 21.3538 29.9667 22.5941 30.6419 23.9526C30.9114 24.8271 30.4618 25.274 29.5666 25.274Z" fill="#7C8685" />
                </svg>
                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.2662 10.9995V11.7145C27.279 13.791 26.8794 15.8494 26.0907 17.7703C25.302 19.6912 24.1397 21.4364 22.6714 22.9047C21.2031 24.373 19.4579 25.5352 17.537 26.324C15.6161 27.1127 13.5577 27.5123 11.4812 27.4995C8.45918 27.5083 5.49889 26.6441 2.95624 25.0108H4.33124C6.82474 25.0108 9.24595 24.1731 11.2062 22.632C10.0443 22.6216 8.91546 22.2435 7.98172 21.5518C7.04798 20.8601 6.35729 19.8905 6.00874 18.782C6.35887 18.8378 6.71293 18.8654 7.06749 18.8645C7.55857 18.861 8.04761 18.801 8.52499 18.6858C7.28269 18.4322 6.16615 17.7572 5.36435 16.775C4.56255 15.7927 4.12473 14.5637 4.12499 13.2958C4.89373 13.7198 5.75033 13.9599 6.62749 13.997C5.85353 13.485 5.2194 12.7882 4.78246 11.9696C4.34552 11.1509 4.11955 10.2362 4.12499 9.30826C4.1267 8.3423 4.38279 7.39382 4.86749 6.55826C6.25861 8.27378 7.99456 9.67798 9.9629 10.6799C11.9312 11.6818 14.0881 12.2592 16.2937 12.3745C16.2065 11.9584 16.1604 11.5347 16.1562 11.1095C16.1204 9.97772 16.4348 8.86245 17.0565 7.916C17.6782 6.96955 18.5768 6.23806 19.6297 5.8214C20.6827 5.40475 21.8385 5.32324 22.9395 5.58801C24.0405 5.85278 25.0329 6.45092 25.7812 7.30076C27.0257 7.0508 28.2169 6.58548 29.3012 5.92576C28.8871 7.20886 28.0161 8.29515 26.8537 8.97826C27.9588 8.85884 29.0392 8.57136 30.0575 8.12576C29.3035 9.22708 28.3746 10.1978 27.3075 10.9995H27.2662Z" fill="#7C8685" />
                </svg>
                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.0463 11.1923C26.924 10.7211 26.6788 10.2907 26.3358 9.94527C25.9927 9.59982 25.5641 9.35162 25.0938 9.22604C22.242 8.8897 19.3714 8.73813 16.5 8.77229C13.6286 8.73813 10.7581 8.8897 7.90626 9.22604C7.4359 9.35162 7.0073 9.59982 6.66426 9.94527C6.32122 10.2907 6.07604 10.7211 5.95376 11.1923C5.64138 12.944 5.4895 14.7205 5.50001 16.4998C5.48897 18.2882 5.64085 20.0739 5.95376 21.8348C6.08237 22.2984 6.33037 22.7202 6.67299 23.058C7.01561 23.3958 7.44086 23.6378 7.90626 23.7598C10.7581 24.0961 13.6286 24.2477 16.5 24.2135C19.3714 24.2477 22.242 24.0961 25.0938 23.7598C25.5592 23.6378 25.9844 23.3958 26.327 23.058C26.6697 22.7202 26.9177 22.2984 27.0463 21.8348C27.3592 20.0739 27.5111 18.2882 27.5 16.4998C27.5105 14.7205 27.3586 12.944 27.0463 11.1923ZM14.245 19.786V13.241L20.0063 16.4998L14.245 19.7723V19.786Z" fill="#7C8685" />
                </svg>
                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.4141 27.2115V27.2087L25.4389 27.1496L29.5625 6.35962V6.29362C29.5625 5.77525 29.37 5.32287 28.9548 5.052C28.5904 4.81412 28.171 4.79762 27.8768 4.81962C27.6029 4.84439 27.3326 4.89974 27.071 4.98462C26.9595 5.02059 26.8494 5.06095 26.741 5.10562L26.7231 5.1125L3.73315 14.1311L3.72627 14.1339C3.65638 14.1577 3.58796 14.1857 3.5214 14.2177C3.35789 14.2912 3.20102 14.3786 3.05252 14.479C2.7569 14.6825 2.19452 15.161 2.2894 15.92C2.36777 16.5497 2.8009 16.9485 3.09377 17.1561C3.26664 17.2773 3.4525 17.3787 3.6479 17.4586L3.6919 17.4779L3.70565 17.482L3.71527 17.4861L7.73852 18.8405C7.72477 19.0921 7.74952 19.3492 7.8169 19.6036L9.83127 27.2472C9.94132 27.6639 10.1791 28.0356 10.5112 28.3102C10.8434 28.5848 11.2532 28.7484 11.6831 28.7782C12.113 28.8079 12.5414 28.7022 12.9082 28.476C13.275 28.2497 13.5617 27.9143 13.728 27.5167L16.874 24.1535L22.2764 28.295L22.3534 28.328C22.8443 28.5425 23.3021 28.6099 23.7215 28.5535C24.1409 28.4957 24.4736 28.3197 24.7239 28.1204C25.0133 27.8857 25.244 27.5867 25.3976 27.2472L25.4086 27.2239L25.4128 27.2156L25.4141 27.2115ZM9.81065 19.0784C9.78834 18.9936 9.79364 18.9038 9.82578 18.8223C9.85793 18.7407 9.91524 18.6714 9.9894 18.6246L23.6308 9.96212C23.6308 9.96212 24.4338 9.474 24.4049 9.96212C24.4049 9.96212 24.5479 10.0474 24.1175 10.4475C23.7105 10.8284 14.3949 19.8222 13.4516 20.7325C13.3992 20.7834 13.3625 20.8483 13.3458 20.9195L11.825 26.722L9.81065 19.077V19.0784Z" fill="#7C8685" />
                </svg>
                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.825 8.0025C21.8851 6.92948 21.3671 5.55147 21.3675 4.125H17.1187V21.175C17.086 22.0977 16.6964 22.9716 16.0321 23.6128C15.3679 24.254 14.4807 24.6124 13.5575 24.6125C11.605 24.6125 9.98247 23.0175 9.98247 21.0375C9.98247 18.6725 12.265 16.8987 14.6162 17.6275V13.2825C9.87247 12.65 5.71997 16.335 5.71997 21.0375C5.71997 25.6163 9.51497 28.875 13.5437 28.875C17.8612 28.875 21.3675 25.3687 21.3675 21.0375V12.3888C23.0903 13.626 25.1588 14.2899 27.28 14.2863V10.0375C27.28 10.0375 24.695 10.1613 22.825 8.0025Z" fill="#7C8685" />
                </svg>
            </div>
            <div class="block-text__footer">
                <div class="text-mon16__bold">О нас</div>
                <div class="text-mon16__bold">Контакты</div>
                <div class="text-mon16__bold">Партнерам</div>
                <div class="text-mon16__bold">Акции</div>
            </div>
            <div class="block-text__footer">
                <div class="text-mon16__bold">Где смотреть</div>
                <div class="text-mon16__bold">Вопросы и ответы</div>
                <div class="text-mon16__bold">Служба поддержки</div>
            </div>
            <div class="block-text__footer">
                <div class="text-mon16__bold">Регистрация и оплата</div>
                <div class="text-mon16__bold">Политика приватности</div>
                <div class="text-mon16__bold">Пользовательское соглашение</div>
                <div class="text-mon16__bold">Сообщить об ошибке</div>
            </div>
        </footer>
    </div>
    <script>
        document.querySelector('.burger').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.menu-list__index').classList.toggle('open');
        })
    </script>
</body>
</html>