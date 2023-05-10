<div id="statistic">
    <Button value="" onclick="thongKe1()">thongKe</Button>

    <select name="" id="" class="yearInput">
        <?php for ($i = date('Y'); $i >= date('Y') - 4; $i--): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor ?>
    </select>

    <figure class="highcharts-figure">
        <div id="container"></div>
    </figure>
    <Button value="" onclick="thongKe2()">thongKe</Button>
    <figure class="highcharts-figure">
        <div id="container2"></div>
    </figure>
    <Button value="" onclick="thongKe3()">thongKe</Button>
</div>