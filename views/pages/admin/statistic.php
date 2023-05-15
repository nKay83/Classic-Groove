<div id="statistic">
    <h2> <i class="fa-solid fa-chart-column"></i><span>Statistic</span></h2>
    <div id="statistic-type1">

        <input type="date" class="dateStart" value="<?= date("Y") . "-01-01" ?>">
        <input type="date" class="dateEnd" value=<?= date("Y-m-d") ?>>
        <Button value="" onclick=" statistic1()">Statistic</Button>
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
    </div>
    <div id="statistic-type2">
        <input type="date" class="dateStart" value="<?= date("Y") . "-01-01" ?>">
        <input type="date" class="dateEnd" value=<?= date("Y-m-d") ?>>
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
        <input type="date" class="dateStart" value="<?= date("Y") . "-01-01" ?>">
        <input type="date" class="dateEnd" value=<?= date("Y-m-d") ?>>
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