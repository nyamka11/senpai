<!-- Header Area Start Here -->

<?php
    use Cake\ORM\TableRegistry;

    $Visa = TableRegistry::get('Visa');
    $Visa = $Visa->find();
?>

<header>
    <div id="header-layout1" class="header-style1">
        <div class="main-menu-area bg-primarytextcolor header-menu-fixed" id="sticker">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="logo-area">
                            <a href=<?= $this->Url->build(array('controller'=>'News','action'=>'index')) ?> >
                                <img src=<?= $this->Url->build('/img/logo.png'); ?> alt="logo" class="img-fluid" style="max-width:180px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 position-static min-height-none">
                        <div class="ne-main-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li class="active">
                                        <a href=<?= $this->Url->build(array('controller'=>'News','action'=>'index')) ?>>Нүүр</a>
                                    </li>
                                    <li>
                                        <a href="#">Виз</a>
                                        <ul class="ne-dropdown-menu">
                                            <?php foreach ($Visa as $items): ?>
                                                <li>
                                                    <a href="<?= $this->Url->build(array('controller'=>'Visa','action'=>'view',$items->id)) ?>"><?=  $items->type ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?= $this->Url->build(array('controller'=>'Advertisement','action'=>'index')) ?>" >Зар</a>
                                    </li>
                                    <li>
                                        <a href="">ENTERTAINMENT</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 position-static">
                        <div class="header-action-item">
                            <ul>
                                <li>
                                    <form id="top-search-form" class="header-search-light">
                                        <input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">
                                        <button class="search-button">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <?php
                                        if($userData == null)  {
                                            echo
                                            "<a href=".$this->Url->build(array('controller'=>'Users','action'=>'login'))." class='login-btn'>
                                                <button type='button' class='login-btn'>
                                                    <i class='fa fa-user' aria-hidden='true'></i>Sign in
                                                </button>
                                            </a>";
                                        }
                                        else  {
                                            echo 
                                            '<div class="btn-group">
                                                <button id="leggedInfo" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-user" aria-hidden="true"></i> '.$userData['username'].'
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href='.$this->Url->build(array('controller'=>'Users','action'=>'view', $userData['user_id'])).' >&nbsp;<i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Профайл</a>
                                                    <a class="dropdown-item" href='.$this->Url->build(array('controller'=>'News','action'=>'list')).' ><i class="fa fa-newspaper-o" aria-hidden="true">&nbsp;&nbsp;</i>Мэдээ</a>
                                                    <a class="dropdown-item" href='.$this->Url->build(array('controller'=>'Visa','action'=>'list')).' ><i class="fa fa-cc-visa"></i>&nbsp;&nbsp;Визний мэдээлэл</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href='.$this->Url->build(array('controller'=>'Users','action'=>'logout')).'><i class="fa fa-sign-out" aria-hidden="true">&nbsp;&nbsp;</i>Logout</a>
                                                </div>
                                            </div>';
                                        }
                                    ?>
                                </li>
                                <li>
                                    <div id="side-menu-trigger" class="offcanvas-menu-btn">
                                        <a href="#" class="menu-bar">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                        <a href="#" class="menu-times close">
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>