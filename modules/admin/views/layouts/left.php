<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<!--                <img src="--><?//= $directoryAsset ?><!--/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>-->

                <img src="/web/<?=Yii::$app->user->identity->image?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <a href="<?=Yii::$app->UrlManager->createUrl('/admin/.')?>"
                <p>www.telfon.uz</p>
                </a>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <a href="<?=Yii::$app->UrlManager->createUrl('/admin/user/user')?>">
        <p style="color: white" align="center"><?//=Yii::$app->user->identity->fio?></p>
        </a>
        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'E`lonlar', 'icon' => 'file-code-o', 'url' => ['/admin/item/index']],
                    ['label' => 'Category', 'icon' => 'file-code-o', 'url' => ['/admin/category/index']],
                    ['label' => 'Vendor', 'icon' => 'file-code-o', 'url' => ['/admin/vendor/index']],
                    ['label' => 'Model', 'icon' => 'file-code-o', 'url' => ['/admin/model/index']],
                    ['label' => 'Detail', 'icon' => 'file-code-o', 'url' => ['/admin/detail/index']],
                    ['label' => 'Detail Qiymati', 'icon' => 'file-code-o', 'url' => ['/admin/detailval/index']],
                    ['label' => 'Rasm', 'icon' => 'file-code-o', 'url' => ['/admin/mrasm/index']],
                    ['label' => 'Tarjimalar', 'icon' => 'file-code-o', 'url' => ['/admin/text-translate/index']],
                    ['label' => 'Viloyat', 'icon' => 'file-code-o', 'url' => ['/admin/viloyat/index']],
                    ['label' => 'Tuman', 'icon' => 'file-code-o', 'url' => ['/admin/tuman/index']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    // [
                    //     'label' => 'Some tools',
                    //     'icon' => 'share',
                    //     'url' => '#',
                    //     'items' => [
                    //         ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                    //         ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                    //         [
                    //             'label' => 'Level One',
                    //             'icon' => 'circle-o',
                    //             'url' => '#',
                    //             'items' => [
                    //                 ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                    //                 [
                    //                     'label' => 'Level Two',
                    //                     'icon' => 'circle-o',
                    //                     'url' => '#',
                    //                     'items' => [
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                         ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                    //                     ],
                    //                 ],
                    //             ],
                    //         ],
                    //     ],
                    // ],
                ],
            ]
        ) ?>

    </section>

</aside>
