<!-- ======= Header ======= -->
<header id="header" class="fixed-top shadow-sm">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto">
            <?php echo  $this->Html->link('Senpai', ['controller' => 'Home', 'action' => 'display', 'index']); ?></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><?php echo  $this->Html->link('Нүүр', ['controller' => 'Home', 'action' => 'display', 'index']); ?>
                </li>
                <li><?php echo  $this->Html->link('Мэдээ', ['controller'=>'News', 'action' => 'index']); ?></li>
                <li><?php echo  $this->Html->link('Японы амьдрал', ['controller'=>'Courses','action' => 'display']); ?>
                </li>

                <li><a href="trainers.html">Япон хэл</a></li>
                <li><a href="events.html">Зар</a></li>
                <li><a href="pricing.html">Япон хуанли</a></li>
                <li class="drop-down"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="drop-down"><a href="#">Deep Drop Down</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>

            </ul>
        </nav><!-- .nav-menu -->
        <?php echo  $this->Html->link('Sign In', ['controller' => 'Users', 'action' => 'Signup'],['class'=>'get-started-btn']); ?>
    </div>
</header><!-- End Header -->