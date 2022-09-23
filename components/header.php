<!--Header-->
<div class="container-fluid pl-0 pr-0" id="header1">
    <div id="header">
        <div class="row resp-header mr-0">

            <div class="col-12">
                <div class="row justify-content-end  d-none d-lg-flex" id="purple-row">
                    <a href="https://development.forma.bg/vip/LibraryTetovo/index.php"><img src="https://development.forma.bg/vip/LibraryTetovo/images/logo_tetovo.svg" id="logo" class="img-fluid"></a>

                    <div id="topright">
                        <a href="https://development.forma.bg/vip/LibraryTetovo/pages/allNews.php" class="mr-3">Новини</a>
                        <a onclick="SearchBar()"><img class="search" src="https://development.forma.bg/vip/LibraryTetovo/images/search.png" width="25"></a>
                        <a href="tel:0884102869"><img class="tel" src="https://development.forma.bg/vip/LibraryTetovo/images/tel.png" width="25"></a>
                        <a class="telNumber" href="tel:0884102869">+359 89 430 0985</a>
                        <a href=""><img class="you" src="https://development.forma.bg/vip/LibraryTetovo/images/youtube.png" width="25"></a>
                        <a href=""><img class="face" src="https://development.forma.bg/vip/LibraryTetovo/images/facebook.png" width="25"></a>
                        <a href=""><img class="in" src="https://development.forma.bg/vip/LibraryTetovo/images/linkedin.png" width="25"></a>
                        <a href="mailto:info@vipinnovations.bg"><img class="mail" src="https://development.forma.bg/vip/LibraryTetovo/images/mail.png" width="25"></a>
                        <a href="">EN</a>
                    </div>
                </div>
                <div class="row justify-content-around d-none d-lg-flex" id="gray-row">
                    <div id="menulinks">
                        <a href="https://development.forma.bg/vip/LibraryTetovo/pages/forUs.php">ЗА НАС</a>
                        <a href="https://development.forma.bg/vip/LibraryTetovo/pages/pageArticle-dance.php">ТАНЦОВА ДЕЙНОСТ</a>
                        <a href="https://development.forma.bg/vip/LibraryTetovo/pages/pageArticle-library.php">БИБЛИОТЕКА</a>
                        <a href="https://development.forma.bg/vip/LibraryTetovo/pages/pageArticle-orchestra.php">ОРКЕСТЪР</a>
                        <a href="https://development.forma.bg/vip/LibraryTetovo/pages/contacts.php">КОНТАКТИ</a>
                    </div>
                </div>
                <div id="resp-images">
                    <div>
                        <img src="https://development.forma.bg/vip/LibraryTetovo/images/logo_tetovo.svg" id="logo-resp" class="img-fluid">
                    </div>
                    <div id="resp-img1">
                        <a href="tel:0884102869"><img src="https://development.forma.bg/vip/LibraryTetovo/images/resp-tel1.png"></a>
                    </div>
                    <div id="resp-img2">
                        <a onclick="SearchBar()"><img src="https://development.forma.bg/vip/LibraryTetovo/images/resp-search1.png"></a>
                    </div>
                    <div id="resp-img3">
                        <a href="javascript:void(0);" onclick="HambMenu(),ImageChange()"><img src="https://development.forma.bg/vip/LibraryTetovo/images/ham-menu1.png"></a>
                    </div>
                </div>
            </div>
            <div class="row w-100 pr-0">
                <div class="col-12 pr-0">
                    <div id="myLinks">
                        <ul class="list-unstyled">
                            <li class="forUs"><a href="https://development.forma.bg/vip/LibraryTetovo/pages/forUs.php">ЗА НАС</a></li>
                            <li>
                                <a href="https://development.forma.bg/vip/LibraryTetovo/pages/pageArticle-dance.php">ТАНЦОВА ДЕЙНОСТ</a>
                            </li>
                            <li>
                                <a href="https://development.forma.bg/vip/LibraryTetovo/pages/pageArticle-library.php">БИБЛИОТЕКА</a>
                            </li>
                            <li>
                                <a href="https://development.forma.bg/vip/LibraryTetovo/pages/pageArticle-orchestra.php">НОВИНИ</a>
                            </li>
                            <li>
                                <a href="https://development.forma.bg/vip/LibraryTetovo/pages/contacts.php">КОНТАКТИ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="searchBar">
    <img src="https://development.forma.bg/vip/LibraryTetovo/images/shadow.png" class="w-100">
    <input class="form-control mr-sm-2" type="search" placeholder="Търсене" aria-label="Search" id="search1">

</div>
<script>
    function SearchBar() {
        var x = document.getElementById("searchBar");
        if (x.style.display === "flex") {
            x.style.display = "none";
        } else {
            x.style.display = "flex";
        }
    }
</script>
<script>
    function HambMenu() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function ImageChange() {
        const img = document.getElementById('resp-img3');
        let toggle = true;
        img.addEventListener('click', function() {
            toggle = !toggle;
            if (toggle) {
                img.src = '..\\images\\ham-menu.png';
            } else {
                img.src = '..\\images\\ham-menu-onclick.png';
            }
        })
    }
</script>
<!--End of Header-->