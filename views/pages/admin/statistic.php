<div id="statistic">
   <h2> <i class="fa-solid fa-chart-column"></i><span>Statistic</span></h2>
    <div id="statistic-type1">
        <select name="" id="" class="yearInput">
            <?php for ($i = date('Y'); $i >= date('Y') - 4; $i--): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor ?>
        </select>
        <Button value="" onclick=" statistic1()">Statistic</Button>
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
        <select name="" id="" class="typeStatictis">
            <option value="1">Type Products</option>
            <option value="2">Products</option>
        </select>
        <Button value="" onclick=" statistic2()">Statistic</Button>
        <figure class="highcharts-figure">
            <div id="container2"></div>
        </figure>
    </div>
    <div id="statistic-type3">
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
        <select name="" id="" class="typeStatictis">
            <option value="1">Type Products</option>
            <option value="2">Products</option>
        </select>
        <Button value="" onclick=" statistic3()">Statistic</Button>
        <figure class="highcharts-figure">
            <div id="container3"></div>
        </figure>
    </div>
</div>