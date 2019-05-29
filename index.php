<?
    $arts = [
        'FNT0012',
        'FNT0016',
        'FNT0019',
        'FNT0009',
        'FNT0001',
        'FNT0037',
        'FNT0014',
        'FNT0011',
        'FNT0036',
        'FNT0013',
        'FNT0015'
    ];

    // shuffle($arts);

    $query_str = 'https://www.toy.ru/company/info/orders.php?product_pic=1'; 

    foreach($arts as $art) {
        $query_str =  $query_str.'&art[]='.$art;
    }

    $str = file_get_contents($query_str);
    $arr = unserialize($str);

    $new_items =  array_slice($arr, 0, 4); // новинки. первые 4 элемента
    $toy_items = array_chunk($arr, 8); // по 8 товаров на слайд $toy_items[0], $toy_items[1], ...

    // echo "<pre>"; print_r($toy_items); echo "</pre>";

    $figures = [
        [
            'id' => 0,
            'name' => 'Drift',
            'description' => 'Fortnite FNT0012 Фигурка Drift с аксессуарами',
            'link' => 'https://www.toy.ru/catalog/toys-figurki/fortnite_fnt0012_figurka_drift_s_aksessuarami/',
            'small_pic' => 'img/characters/character-icon-1.png',
            'big_pic' => 'img/characters/character-1.png'
        ],
        [
            'id' => 1,
            'name' => 'Raptor',
            'description' => 'Fortnite FNT0014 Фигурка Raptor с аксессуарами',
            'link' => 'https://www.toy.ru/catalog/toys-figurki/fortnite_fnt0014_figurka_raptor_s_aksessuarami/',
            'small_pic' => 'img/characters/character-icon-2.png',
            'big_pic' => 'img/characters/character-2.png'
        ],
        [
            'id' => 2,
            'name' => 'Omega',
            'description' => 'Fortnite FNT0016 Фигурка Omega с аксессуарами',
            'link' => 'https://www.toy.ru/catalog/toys-figurki/fortnite_fnt0016_figurka_omega_s_aksessuarami/',
            'small_pic' => 'img/characters/character-icon-3.png',
            'big_pic' => 'img/characters/character-3.png'
        ],
        [
            'id' => 3,
            'name' => 'Carbide',
            'description' => 'Fortnite FNT0011 Фигурка Carbide с аксессуарами',
            'link' => 'https://www.toy.ru/catalog/toys-figurki/fortnite_fnt0011_figurka_carbide_s_aksessuarami/',
            'small_pic' => 'img/characters/character-icon-4.png',
            'big_pic' => 'img/characters/character-4.png'
        ],
        [
            'id' => 4,
            'name' => 'Bandolier',
            'description' => 'Fortnite FNT0013 Фигурка Bandolier с аксессуарами',
            'link' => 'https://www.toy.ru/catalog/toys-figurki/fortnite_fnt0013_figurka_bandolier_s_aksessuarami/',
            'small_pic' => 'img/characters/character-icon-5.png',
            'big_pic' => 'img/characters/character-5.png'
        ],
        [
            'id' => 5,
            'name' => 'Teknique',
            'description' => 'Fortnite FNT0015 Фигурка Teknique с аксессуарами',
            'link' => 'https://www.toy.ru/catalog/toys-figurki/fortnite_fnt0015_figurka_teknique_s_aksessuarami/',
            'small_pic' => 'img/characters/character-icon-6.png',
            'big_pic' => 'img/characters/character-6.png'
        ]
    ];

    $kits = [
        [
            'id' => 0,
            'name' => 'Набор фигурок Fortnite',
            'description' => 'Fortnite FNT0019 Набор фигурок Fortnite 4 шт. с аксессуарами',
            'link' => 'https://www.toy.ru/catalog/toys-figurki/fortnite_fnt0019_nabor_figurok_fortnite_4_sht_s_aksessuarami/',
            'small_pic' => 'img/characters/nabor-icon-1.png',
            'big_pic' => 'img/characters/nabor-1.png'
        ],
        [
            'id' => 1,
            'name' => 'Сундук с аксессуарами',
            'description' => 'Fortnite FNT0001 Сундук с аксессуарами (в ассортименте)',
            'link' => 'https://www.toy.ru/catalog/mininabory/fortnite_fnt0001_sunduk_s_aksessuarami_v_assortimente/',
            'small_pic' => 'img/characters/nabor-icon-2.png',
            'big_pic' => 'img/characters/nabor-2.png'
        ],
        [
            'id' => 2,
            'name' => 'Набор фигурок Fortnite',
            'description' => 'Fortnite FNT0036 Набор фигурок Fortnite 2 шт. с аксессуарами',
            'link' => 'https://www.toy.ru/catalog/mininabory/fortnite_fnt0036_nabor_figurok_fortnite_2_sht_s_aksessuarami/',
            'small_pic' => 'img/characters/nabor-icon-3.png',
            'big_pic' => 'img/characters/nabor-3.png'
        ],
        [
            'id' => 3,
            'name' => 'Лама',
            'description' => 'Fortnite FNT0037 Игрушка мягкая Fortnite "Лама"',
            'link' => 'https://www.toy.ru/catalog/lyubimye_geroi/fortnite_fnt0037_igrushka_myagkaya_fortnite_lama/',
            'small_pic' => 'img/characters/nabor-icon-4.png',
            'big_pic' => 'img/characters/nabor-4.png'
        ]
    ];

?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/slick/slick.css">
    <link rel="stylesheet" href="libs/slick/slick-theme.css">
    <link rel="stylesheet" href="css/styles.css">

    <title>Fortnite игрушки</title>
</head>

<body>

    <header id="header">

        <div class="top-line">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="/"><img class="img-fluid" src="img/Logo.png" alt="Fortnite"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsDefault">
                        <ul class="navbar-nav w-100" id="main-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#novelty">Новинки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#winners">Победители</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#characters">Персонажи</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#toys">Игрушки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contest">Конкурс</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#buy">Где&nbsp;купить?</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>            
        </div>

        <div class="main-slider-wrapper">
            <div class="main-slider">
                <div>
                    <img class="img-fluid" src="img/First-banner-1-compressor.png" alt="">
                </div>
                <div>
                    <img class="img-fluid" src="img/First-banner-2-compressor.png" alt="">
                </div>
            </div>
            <div class="main-banners">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/Yellow.png" alt="">
                                <a class="more" href="#contest"><span class="d-none d-sm-block">Подробности ниже</span></a>
                            </div>
                        </div>
                        <div class="col-8">
                            <img class="img-fluid" src="img/2x2.png" alt="">
                        </div>
                    </div>
                </div>                  
            </div>

        </div>
    </header>

    <main id="main" class="my-2">

        <section id="novelty" class="py-6">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Новинки</h2>                        
                    </div>
                </div>
                <div class="row">

                    <?foreach ($new_items as $item):?>
                        <div class="col-12 col-sm-6 col-lg-3 mb-4">
                            <div class="card card-product">
                                <img src="https://www.toy.ru/<?=$item['PIC']?>" class="card-img-top" alt="<?=iconv("windows-1251", "utf-8", $item['NAME'])?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?=iconv("windows-1251", "utf-8", $item['NAME'])?></h5>
                                </div>
                                <div class="card-footer">
                                    <div class="card-price">
                                        <span class="price"><?=str_replace('.00','',$item['OLDPRICE'])?> руб.</span>
                                        <!-- <span class="discount">0 000 руб.</span> -->
                                    </div>                                    
                                    <a target="_blank" href="https://www.toy.ru<?=$item['URL']?>?action=ADD2BASKET&id=<?=$item['ID']?>" class="btn btn-buy">Купить в TOY.RU</a>                                
                                </div>
                            </div>
                        </div>
                    <?endforeach?>

                </div>
                <!-- <div class="row">
                    <div class="col-12">
                        <a class="link-view-all" href="#">Ко всем новинкам</a>
                    </div>
                </div>              -->
            </div>
        </section>

        <section id="winners" class="py-6">
            <div class="container">
                <div class="row">
                    <div class="d-none d-lg-block col-lg-6">
                        <a class="more2" href="#contest"><img class="img-fluid" src="img/gift.png" alt=""></a>
                    </div>                    
                    <div class="col-12 col-lg-6">
                        <h2 class="mb-4">Счастливые победители прошлой недели</h2>
                        <ul>
                            <li>DED****LAMA@MAIL.RU</li>
                            <li>DED****LAMA@MAIL.RU</li>
                            <li>DED****LAMA@MAIL.RU</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <section id="characters" class="py-6">
            <h2 class="mb-4">Персонажи</h2>
            <div class="character-slider">

                <!-- slide 1 -->                
                <div class="slide slide-characters">
                    <div class="container">
                        <div class="row">
                            <div class="d-none d-lg-block col-lg-6">
                                <div class="character-img">
                                    <?foreach ($figures as $key=>$figure):?>
                                        <img id="<?=$figure['id']?>" class="img-fluid <?if ($key!=0) echo 'd-none'?>" src="<?=$figure['big_pic']?>" alt="<?=$figure['name']?>">
                                    <?endforeach?>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="d-flex justify-content-between character-nav">
                                    <a class="slick-prev-c" href="#" onclick="return false"><img src="img/left-arrow-ring.png" alt=""></a>
                                    <div class="title w-100">Фигурки</div>
                                    <a class="slick-next-c" href="#" onclick="return false"><img src="img/right-arrow-ring.png" alt=""></a>
                                </div>
                                <div class="character-wrapper p-2">
                                    <?foreach ($figures as $key=>$figure):?>
                                        <!-- info -->
                                        <div id="<?=$figure['id']?>" class="info <?if ($key!=0) echo 'd-none'?>">
                                            <div class="row p-2">
                                                <div class="col-4">
                                                    <img class="img-fluid" src="<?=$figure['small_pic']?>" alt="<?=$figure['name']?>">
                                                </div>
                                                <div class="col-8">
                                                    <h3><?=$figure['name']?></h3>
                                                    <p><?=$figure['description']?></h3></p>
                                                </div>
                                            </div>
                                            <div class="text-center py-4">
                                                <a href="<?=$figure['link']?>" class="btn btn-yellow-buy" target="_blank">Купить</a>                                    
                                            </div>
                                        </div>                                                                                                          
                                    <?endforeach?>
                                    <div class="row">
                                        <?foreach ($figures as $key=>$figure):?>
                                            <div class="col-3 mt-4"><a class="img-link" id="<?=$figure['id']?>" href="#"><img class="img-fluid" src="<?=$figure['small_pic']?>" alt="<?=$figure['name']?>"></a></div>
                                        <?endforeach?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- slide 2 -->                
                <div class="slide slide-kits">
                    <div class="container">
                        <div class="row">
                            <div class="d-none d-lg-block col-lg-6">
                                <div class="character-img">
                                    <?foreach ($kits as $key=>$kit):?>
                                        <img id="<?=$kit['id']?>" class="img-fluid <?if ($key!=0) echo 'd-none'?>" src="<?=$kit['big_pic']?>" alt="<?=$kit['name']?>">
                                    <?endforeach?>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="d-flex justify-content-between character-nav">
                                    <a class="slick-prev-c" href="#" onclick="return false"><img src="img/left-arrow-ring.png" alt=""></a>
                                    <div class="title w-100">Наборы</div>
                                    <a class="slick-next-c" href="#" onclick="return false"><img src="img/right-arrow-ring.png" alt=""></a>
                                </div>
                                <div class="character-wrapper p-2">
                                    <?foreach ($kits as $key=>$kit):?>
                                        <div id="<?=$kit['id']?>" class="info <?if ($key!=0) echo 'd-none'?>">
                                            <div class="row p-2">
                                                <div class="col-4">
                                                    <img class="img-fluid" src="<?=$kit['small_pic']?>" alt="<?=$kit['name']?>">
                                                </div>
                                                <div class="col-8">
                                                    <h3><?=$kit['name']?></h3>
                                                    <p><?=$kit['description']?></h3></p>
                                                </div>
                                            </div>
                                            <div class="text-center py-4">
                                                <a href="<?=$kit['link']?>" class="btn btn-yellow-buy" target="_blank">Купить</a>                                    
                                            </div>
                                        </div>                                                                                                          
                                    <?endforeach?>
                                    <div class="row">
                                        <?foreach ($kits as $key=>$kit):?>
                                            <div class="col-3 mt-4"><a class="img-link" id="<?=$kit['id']?>" href="#"><img class="img-fluid" src="<?=$kit['small_pic']?>" alt="<?=$kit['name']?>"></a></div>
                                        <?endforeach?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section id="toys" class="py-6">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h2>Игрушки</h2>
                    </div>
                </div>
                
                <div class="toys-slider">
                    <!-- slide 1 -->
                    <div>
                        <div class="row">

                            <?foreach ($toy_items[0] as $item):?>
                                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                    <div class="card card-product">
                                        <img src="https://www.toy.ru/<?=$item['PIC']?>" class="card-img-top" alt="<?=iconv("windows-1251", "utf-8", $item['NAME'])?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?=iconv("windows-1251", "utf-8", $item['NAME'])?></h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="card-price">
                                                <span class="price"><?=str_replace('.00','',$item['OLDPRICE'])?> руб.</span>
                                                <!-- <span class="discount">0 000 руб.</span> -->
                                            </div>                                    
                                            <a target="_blank" href="https://www.toy.ru<?=$item['URL']?>?action=ADD2BASKET&id=<?=$item['ID']?>" class="btn btn-buy">Купить в TOY.RU</a>                                
                                        </div>
                                    </div>
                                </div>
                            <?endforeach?>

                        </div>                     
                    </div>

                    <!-- slide 2 -->
                    <div>
                        <div class="row">

                            <?foreach ($toy_items[1] as $item):?>
                                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                    <div class="card card-product">
                                        <img src="https://www.toy.ru/<?=$item['PIC']?>" class="card-img-top" alt="<?=iconv("windows-1251", "utf-8", $item['NAME'])?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?=iconv("windows-1251", "utf-8", $item['NAME'])?></h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="card-price">
                                                <span class="price"><?=str_replace('.00','',$item['OLDPRICE'])?> руб.</span>
                                                <!-- <span class="discount">0 000 руб.</span> -->
                                            </div>                                    
                                            <a target="_blank" href="https://www.toy.ru<?=$item['URL']?>?action=ADD2BASKET&id=<?=$item['ID']?>" class="btn btn-buy">Купить в TOY.RU</a>                                
                                        </div>
                                    </div>
                                </div>
                            <?endforeach?>

                        </div>                      
                    </div>

                </div>

            </div>
        </section>        

        <section id="contest">
            <div class="container">
                <div class="row">
                    <div class="d-none d-xl-block col-xl-3 position-relative">
                        <img src="img/contest_2.png" alt="" style="position: absolute;bottom: -28px;right: 0;">
                    </div>
                    <div class="col-12 col-xl-6 my-6 ml-0 mr-0">
                        <div class="action-info">
                            <h2 class="mb-4">Конкурс</h2>
                            <p>1. Купите в любом магазине <span>партнеров</span> товаров на сумму 2399 р. и сохраните чек</p>
                            <p><span>2. Зарегистрируйтесь на нашем сайте, указав номер чека</span></p>
                            <p>3. Ждите еженедельных результатов!</p>
                        </div>
                        <button class="btn btn-yellow-buy d-block mx-auto mt-4">Принять участие!</button>                  
                    </div>
                    <div class="d-none d-xl-block col-xl-3 position-relative">
                        <img src="img/contest_1.png" alt="" style="position: absolute;bottom: 0;left: 0;">
                    </div>               
                </div>
            </div>

            <!-- <img class="img-fluid" src="img/konkurs.png" alt=""> -->
        </section>        

        <section id="buy" class="py-6">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h2>Где купить?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="partners-slider">
                            <a href="#">
                                <img class="img-fluid" src="img/toyru.png" alt="">
                            </a>
                            <a href="#">
                                <img class="img-fluid" src="img/mytoys.png" alt="">
                            </a>
                            <a href="#">
                                <img class="img-fluid" src="img/korablik.png" alt="">
                            </a>
                            <a href="#">
                                <img class="img-fluid" src="img/dochki.png" alt="">
                            </a>
                            <a href="#">
                                <img class="img-fluid" src="img/toyru.png" alt="">
                            </a>                            
                        </div>
                    </div>
                </div>
            </div>            
        </section>        

    </main>

    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="nav flex-column text-center py-3 py-lg-5">
                        <a href="#">Instagram</a>
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                        <a href="#">YouTube</a>
                        <a href="#">LinkedIn</a>
                    </div>
                </div>
                <div class="col-12 col-sm-4 border-left border-right py-3 py-lg-5">
                    <img class="d-block mb-4 mx-auto" src="img/Logo.png" alt="">
                    <img class="d-block mb-4 mx-auto" src="img/jazwares.png" alt="">
                    <img class="d-block mx-auto" src="img/footer-lamas.png" alt="">
                </div>
                <div class="col-12 col-sm-4">
                    <div class="nav flex-column text-center py-3 py-lg-5">
                        <a href="#">Об игре</a>
                        <a href="#">Персонажи</a>
                        <a href="#">Каталог</a>
                        <a href="#">Где купить</a>
                        <a href="#">Toy.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="back-to-top"></div>

    <script src="libs/jquery-3.3.1.min.js"></script>
    <script src="libs/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="libs/slick/slick.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>