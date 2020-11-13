<!-- ナビバー -->
<nav class="nav">
    <ul class="nav__list">
        <li class="nav__item">
            <a href="<?php home_url('/')?>" class="nav__link"> 
                <img src="<?php echo get_template_directory_uri(); ?>/images/home.png" alt="homeへ" width="25px" height="25px">
                <p class="nav__text">HOME</p>
            </a>
        </li>
        <li class="nav__item"> 
            <a href="#category" class="nav__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/category.png" alt="categoryへ" width="25px" height="25px">
                <p class="nav__text">CATEGORY</p>
            </a>
        </li>
        <li class="nav__item">
            <a href="" class="nav__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt="aboutへ" width="25px" height="25px">
                <p class="nav__text">ABOUT</p>
            </a>
        </li>
        <li class="nav__item">
            <a href="" class="nav__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/contact.png" alt="contactへ" width="25px" height="25px">
                <p class="nav__text white">CONTACT</p>
            </a>
        </li>
    </ul>
</nav>
<!-- ナビバー -->