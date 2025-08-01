
    
    <div id="app">
        <div class="layout-horizontal">
            <header class="mb-5">
                <!-- LOGIN DENGAN AKUN ----------------------------------------------------------------------------->
                <?php if($this->session->userdata('level') == "2" OR $this->session->userdata('level') == "3"){    ?>
                    <div class="header-top">
                        <div class="container">
                                    <a href="<?php echo site_url('home');?>"><div class="user-dropdown d-flex align-items-center dropend">
                                        <div class="pr-50">
                                            <div class="" >
                                                <img src="<?php echo base_url().'assets/images/logo/'.$images;?>" style="width:50px; margin-right:5px;">
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h5 class="mt-2 text-success"><b><?php echo $site_title; ?></b></h5>
                                        </div>
                                    </div></a>
                            
                            <div class="header-top-right">

                                <div class="dropdown">
                                    <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="avatar avatar-md2" >
                                            <img src="<?php echo base_url().'assets/images/profilusers/'.$this->session->userdata('user_photo');?>">
                                        </div>
                                        <div class="text">
                                            <h6 class="user-dropdown-name text-success"><?php echo $this->session->userdata('name');?></h6>
                                            <?php if($this->session->userdata('level') == "1"):?>
                                            <p class="user-dropdown-status text-sm text-muted">Administrator</p>
                                            <?php elseif($this->session->userdata('level') == "2"):?>
                                            <p class="user-dropdown-status text-sm text-muted">Penaksir</p>
                                            <?php elseif($this->session->userdata('level') == "3"):?>
                                            <p class="user-dropdown-status text-sm text-muted">Pengelola</p>
                                            <?php else:?>
                                            <p class="user-dropdown-status text-sm text-muted">Unauthorized</p> 
                                            <?php endif;?> 
                                            
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                      <li><a class="dropdown-item" href="#">My Profile</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                     
                                            <?php if($this->session->userdata('level') == "1"){    ?>
                                                <li><a class="dropdown-item" href="<?php echo site_url('logout');?>"><i
                                                        class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a>
                                                </li>
                                            <?php } else { ?>
                                                <li><a class="dropdown-item" href="<?php echo site_url('logout_user');?>"><i
                                                        class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a>
                                                </li>
                                            <?php } ?>
                                        
                                      
                                    </ul>
                                </div>

                                <!-- Burger button responsive -->
                                <a href="#" class="burger-btn d-block d-xl-none">
                                    <i class="bi bi-justify fs-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <!-- LOGIN DENGAN AKUN ----------------------------------------------------------------------------->

                <!-- LOGIN TANPA AKUN ----------------------------------------------------------------------------->
                <?php } else { ?>
                    <div class="header-top">
                        <div class="container">
                            <a href="<?php echo site_url('home');?>"><div class="user-dropdown d-flex align-items-center dropend">
                                <div class="pr-50">
                                    <div class="" >
                                        <img src="<?php echo base_url().'assets/images/logo/'.$images;?>" style="width:50px; margin-right:5px;">
                                    </div>
                                </div>
                                <div class="text">
                                    <h5 class="mt-2 text-success"><b><?php echo $site_title; ?></b></h5>
                                </div>
                            </div></a>
                            
                            <div class="header-top-right">

                                

                                <!-- Burger button responsive -->
                                <a href="#" class="burger-btn d-block d-xl-none">
                                    <i class="bi bi-justify fs-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- LOGIN TANPA AKUN ----------------------------------------------------------------------------->
                
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            
                            <?php if($this->session->userdata('level') == "2" OR $this->session->userdata('level') == "3"){    ?>
                                <li class="menu-item <?php echo $this->uri->segment(2) == 'home' ? 'active': '' ?>">
                                    <a href="<?php echo site_url('home');?>" class='menu-link'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16"><path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/></svg>
                                        <span>Home</span>
                                    </a>
                                </li>
                                
                                <?php if($this->session->userdata('level') == "2" OR $this->session->userdata('level') == "3"){    ?>
                                    <li class="menu-item">
                                        <a href="<?php echo site_url('logout');?>" class='menu-link'>
                                            <i class="bi bi-arrow-left"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                <?php } else { ?>
                                    <li class="menu-item">
                                        <a href="<?php echo site_url('logout_user');?>" class='menu-link'>
                                            <i class="bi bi-arrow-left"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                <?php } ?>

                            <?php } else { ?>
                                <li class="menu-item <?php echo $this->uri->segment(2) == 'home' ? 'active': '' ?>">
                                    <a href="<?php echo site_url('home');?>" class='menu-link'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16"><path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/></svg>
                                        <span>Home</span>
                                    </a>
                                </li>
                                
                                <li class="menu-item <?php echo $this->uri->segment(2) == 'login_user' ? 'active': '' ?>">
                                    <a href="<?php echo site_url('login_user');?>" class='menu-link'>
                                        <i class="bi bi-box-arrow-in-right"></i>
                                        <span>Login</span>
                                    </a>
                                </li>

                            <?php } ?>
                                
                            
                            
                            
                            
                            
                            
                            
                            
                        </ul>
                    </div>
                </nav>

            </header>

           
</div>
    