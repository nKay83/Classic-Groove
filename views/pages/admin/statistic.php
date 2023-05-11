<div id="statistic">
    <div id="statistic-type1">
        <select name="" id="" class="yearInput">
            <?php for ($i = date('Y'); $i >= date('Y') - 4; $i--): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor ?>
        </select>
        <Button value="" onclick="thongKe1()">thongKe</Button>
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
    </div>
    <div id="statistic-type2">
        <select name="" id="" class="monthInput">
            <option value="0">ALL</option>
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor ?>
        </select>
        <select name="" id="" class="yearInput">
            <?php for ($i = date('Y'); $i >= date('Y') - 4; $i--): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor ?>
        </select>
        <Button value="" onclick="thongKe2()">thongKe</Button>
        <figure class="highcharts-figure">
            <div id="container2"></div>
        </figure>
        <Button value="" onclick="thongKe3()">thongKe</Button>
    </div>
    <div id="statistic-type3">
        <figure class="highcharts-figure">
            <div id="container3"></div>
        </figure>
    </div>
</div>