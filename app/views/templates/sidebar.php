<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">

                <?php
                // Fetch menu items from the database
                $menuCategory = $this->db->query("SELECT * FROM tb_setting_category_menu")->fetchAll(PDO::FETCH_ASSOC);
                $menus = $this->db->query("SELECT * FROM tb_setting_menu")->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <?php foreach ($menuCategory as $category): ?>
                    <div class="sidenav-menu-heading"><?= $category['category_name']; ?></div>
                    <!-- Sidenav Accordion (Dashboard)-->
                    <a class="nav-link <?= $data['url'] == 'home/index' ? 'active' : ''; ?>" href="<?= BASEURL; ?>/home">
                        <div class="nav-link-icon"><i data-feather="activity"></i></div>
                        Dashboards
                    </a>
                <?php endforeach; ?>

            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Valerie Lunas</div>
            </div>
        </div>
    </nav>
</div>
