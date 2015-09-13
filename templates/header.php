<header class="banner" role="banner">
  <div class="container">
    <header class="main-header">
      <a href="" class="logo"></a>
      <nav class="main-nav">
        <ul class="main-menu">
          <li class="main-menu_item"><a class="main-menu_item_link" href="">сервисы</a></li>
          <li class="main-menu_item"><a class="main-menu_item_link" href="">подход</a></li>
          <li class="main-menu_item"><a class="main-menu_item_link" href="">отзывы</a></li>
          <li class="main-menu_item"><a class="main-menu_item_link" href="">порфолио</a></li>
          <li class="main-menu_item"><a class="main-menu_item_link" href="">контакты</a>

          </li>
        </ul>
      </nav>
      <div class="menu-button">menu</div>
    </header>   
    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
