<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-container">
    <figure class="uk-text-center home__logo">
        <a href=""><img src="images/vinfast/Logo3D/Vertical.png" alt=""></a>
    </figure>
    <div class="item__30 uk-text-center">
        <div class="item__8">
            <h1 class="uk-h1 uk-margin-remove home__title">Ký thành công</h1>
        </div>
        <div class="item__8">
            <div class="home__txt">Các giấy tờ của Quý khách đã được ký thành công. <br>
                Mọi thông tin chi tiết khác VinFast sẽ thông báo tới Quý khách thông qua email.</div>
        </div>
    </div>
    <div class="item__24">
        <?php
        $data = array(
            'Hợp đồng mua bán đặt cọc ô tô',
            'Hợp đồng mua bán pin',
            'Biên bản các loại',
            'Hợp đồng bán ô tô cũ',
        );
        foreach ($data as $k=>$v): ?>
        <div class="home__item">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-expand">
                    <h4 class="uk-h4 home__txt"><?= $v ?></h4>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-child-width-expand uk-grid-medium uk-flex-middle" uk-grid>
                        <div>
                            <a href="" class="uk-link-toggle home__txtSmall home__icon home__view"><span class="uk-text-nowrap">Xem trước</span></a>
                        </div>
                        <div>
                            <a href="" class="uk-link-toggle home__txtSmall home__icon home__download">Tải về</a>
                        </div>
                        <div>
                            <a href="" class="uk-link-toggle home__txtSmall home__icon home__status home__status--success">Ký thành công</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="uk-text-center home__item-48-30">
        <div class="home__txtLogo">vinfastauto.com</div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>