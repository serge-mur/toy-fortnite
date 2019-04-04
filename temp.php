<?
    $arts = [
        'e2146',
        'e0311',
        '9706551',
        'fcv49',
        'mag03628',
        'bbd43',
        '9529351',
        '10533',
        'dvj18',
        'dnx65',
        '549239',
        '549253',
        'fcv75',
        'dpk31',
        '556022',
        'b9093'
    ];

    shuffle($arts);

    $query_str = 'https://www.toy.ru/company/info/orders.php?product_pic=1'; 
    foreach($arts as $art) {
        $query_str =  $query_str.'&art[]='.$art;       
    }
    // pr($query_str);   
    // $str = file_get_contents('https://www.toy.ru/company/info/orders.php?product_pic=1&art[]=75119&art[]=31313');
    $str = file_get_contents($query_str);
    $arr = unserialize($str);
    //pr($arr);
?>
<?
//pr($arr);
?>
<?foreach ($arr as $item):?>
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
        <div class="card">
            <a href="<?=$item['URL']?>" target="_blank"><img class="card-img-top" src="<?=$item['PIC']?>" alt="<?=$item['NAME']?>" title="<?=$item['NAME']?>"></a>
            <div class="card-body">
                <h5 class="card-title"><a href="<?=$item['URL']?>" target="_blank"><?=$item['NAME']?></a></h5>
                <div class="card-buy d-flex justify-content-between">
                    <div class="price"><?=str_replace('.00','',$item['OLDPRICE'])?> руб.</div>
                    <a href="<?=$item['URL']?>?action=ADD2BASKET&id=<?=$item['ID']?>" class="d-block" target="_blank"><img src="/halloween/img/cart.png" alt="Купить"></a>
                </div>
            </div>
        </div>
    </div>
<?endforeach?>