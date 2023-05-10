<div id="statistic">
    <select name="" id="" class="yearInput">
        <?php for ($i = date('Y'); $i >= date('Y') - 4; $i--): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor ?>
    </select>
    <Button value="" onclick="thongKe1()">thongKe</Button>
    <figure class="highcharts-figure">
        <div id="container"></div>
    </figure>
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
    <figure class="highcharts-figure">
        <div id="container3"></div>
    </figure>
</div>