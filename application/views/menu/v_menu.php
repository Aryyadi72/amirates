<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu - AMIRATES</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/menu_assets/menu.css" />
</head>

<body>
    <section class="cards">
        <article class="card card--1">
            <div class="card__info-hover"></div>
            <div class="card__img"></div>
            <a href="<?php echo base_url('dashboard'); ?>" class="card_link">
                <div class="card__img--hover"></div>
            </a>
            <div class="card__info">
                <span class="card__category">Dashboard</span>
                <h3 class="card__title">Teknis, K3, & ILP</h3>
            </div>
        </article>

        <article class="card card--2">
            <div class="card__info-hover"></div>
            <div class="card__img"></div>
            <a href="<?php echo base_url('monitoring'); ?>" class="card_link">
                <div class="card__img--hover"></div>
            </a>
            <div class="card__info">
                <span class="card__category">Monitoring</span>
                <h3 class="card__title">Kualitas & Kuantitas</h3>
            </div>
        </article>
    </section>
</body>

</html>