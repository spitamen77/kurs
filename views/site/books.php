<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://www.websar.uz
 * Project: kurs
 * Date: 23.09.2019 22:21
 */
use yii\helpers\Url;
use app\models\Lang;
$this->title = Lang::t('Books library');
?>
<div class="page-breadcrum">
    <div class="container">
        <ul>
            <li><a href="<?=Url::to('/')?>"><?=Lang::t('Home')?></a></li>
            <li>-</li>
            <li><?=Lang::t('Books')?></li>
        </ul>
    </div> <!-- /.container -->
</div> <!-- /.page-breadcrum -->
<div class="error-page">
    <div class="container">
        <div class="error-wrapper clear-fix">
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><?=Lang::t('Title')?></th>
                <th scope="col"><?=Lang::t('File')?></th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0; foreach ($model as $item) :?>
            <?php $i++;?>
            <tr>
                <th scope="row"><?=$i;?></th>
                <td><?=$item->title?></td>
                <td><a href="/web/<?=$item->file?>" target="_blank" style="margin-top: -5px"><?=Lang::t('Download')?></a> </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>

