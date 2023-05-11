const getSalesByYear = (year) => {
  return $.ajax({
    url: "util/statistic.php?year=" + year + "&action=getSalesByYear",
    type: "GET",
  });
};
const getNumberOfKindProductsSold = (month, year) => {
  return $.ajax({
    url:
      "util/statistic.php?month=" +
      month +
      "&year=" +
      year +
      "&action=getNumberOfKindProductsSold",
    type: "GET",
  });
};
const getNumberOfProductsSold = (month, year) => {
  return $.ajax({
    url:
      "util/statistic.php?month=" +
      month +
      "&year=" +
      year +
      "&action=getNumberOfProductsSold",
    type: "GET",
  });
};

const getTop3Products = (month, year) => {
  return $.ajax({
    url:
      "util/statistic.php?month=" +
      month +
      "&year=" +
      year +
      "&action=getTop3Products",
    type: "GET",
  });
};

const thongKe1 = async () => {
  let year = document.querySelector("#statistic-type1 .yearInput").value;
  let data = JSON.parse(await getSalesByYear(year));
  const allMonths = Array.from({ length: 12 }, (_, i) =>
    (i + 1).toString().padStart(2, "0")
  );
  const formattedData = allMonths.map((mon) => {
    const existingData = data.find((item) => item.mon === mon);
    const total = existingData ? parseInt(existingData.total) : 0;
    return { mon, total };
  });
  let currnetYear = new Date().getFullYear();
  if (year == currnetYear) {
    formattedData.splice(new Date().getMonth() + 1);
  }
  console.log(formattedData);
  Highcharts.chart("container", {
    chart: {
      type: "line",
    },
    title: {
      text: "Sales revenue in " + year,
    },
    xAxis: {
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
    },
    yAxis: {
      title: {
        text: "Total sales revenue",
      },
    },
    plotOptions: {
      line: {
        dataLabels: {
          enabled: true,
        },
        enableMouseTracking: false,
      },
    },
    series: [
      {
        name: year,
        data: formattedData.map((item) => item.total),
      },
    ],
  });
};

const thongKe2 = async () => {
  let month = parseInt(
    document.querySelector("#statistic-type2 .monthInput").value
  );
  let year = parseInt(
    document.querySelector("#statistic-type2 .yearInput").value
  );
  let typeInput = document.querySelector("#statistic-type2 .typeStatictis");
  let data;
  if (typeInput.value == "1") {
    data = JSON.parse(await getNumberOfKindProductsSold(month, year));
  } else if (typeInput.value == "2") {
    data = JSON.parse(await getNumberOfProductsSold(month, year));
  }
  let dataFormat = data.map((obj) => [obj.ten, parseInt(obj.soLuong)]);
  Highcharts.chart("container2", {
    chart: {
      type: "column",
    },
    title: {
      text: "Số lượng sản phẩm bán được theo loại vào tháng 02 năm 2023",
    },
    subtitle: {
      text: 'Source: <a href="https://worldpopulationreview.com/world-cities" target="_blank">World Population Review</a>',
    },
    xAxis: {
      type: "category",
      labels: {
        rotation: -45,
        style: {
          fontSize: "13px",
          fontFamily: "Verdana, sans-serif",
        },
      },
    },
    yAxis: {
      min: 0,
      title: {
        text: "Population (millions)",
      },
    },
    legend: {
      enabled: false,
    },
    tooltip: {
      pointFormat: "Population in 2021: <b>{point.y} vinyl records</b>",
    },
    series: [
      {
        name: "Population",
        colors: [
          "#9b20d9",
          "#9215ac",
          "#861ec9",
          "#7a17e6",
          "#7010f9",
          "#691af3",
          "#6225ed",
          // "#5b30e7",
          // "#533be1",
          // "#4c46db",
          // "#4551d5",
          // "#3e5ccf",
          // "#3667c9",
          // "#2f72c3",
          // "#277dbd",
          // "#1f88b7",
          // "#1693b1",
          // "#0a9eaa",
          // "#03c69b",
          // "#00f194",
        ],
        colorByPoint: true,
        groupPadding: 0,
        data: dataFormat,
        dataLabels: {
          enabled: true,
          rotation: -90,
          color: "#FFFFFF",
          align: "right",
          // format: "{point.y:.1f}", // one decimal
          y: 10, // 10 pixels down from the top
          style: {
            fontSize: "13px",
            fontFamily: "Verdana, sans-serif",
          },
        },
      },
    ],
  });
};

const thongKe3 = async () => {
  let month = parseInt(
    document.querySelector("#statistic-type2 .monthInput").value
  );
  let year = parseInt(
    document.querySelector("#statistic-type2 .yearInput").value
  );
  let data = JSON.parse(await getTop3Products(month, year));
  console.log(data);
  Highcharts.chart("container3", {
    chart: {
      type: "bar",
    },
    title: {
      text: "Top 5 sản phẩm bán chạy nhất vào tháng 02 năm 2023",
      align: "left",
    },
    xAxis: {
      categories: data.map((obj) => obj.tenLoai),
      title: {
        text: null,
      },
      gridLineWidth: 1,
      lineWidth: 0,
    },
    yAxis: {
      min: 0,
      title: {
        text: "Population (millions)",
        align: "high",
      },
      labels: {
        overflow: "justify",
      },
      gridLineWidth: 0,
    },
    tooltip: {
      valueSuffix: " vinyl records",
    },
    plotOptions: {
      bar: {
        borderRadius: "50%",
        dataLabels: {
          enabled: true,
        },
        groupPadding: 0.1,
      },
    },
    legend: {
      layout: "vertical",
      align: "right",
      verticalAlign: "top",
      x: -40,
      y: 80,
      floating: true,
      borderWidth: 1,
      backgroundColor:
        Highcharts.defaultOptions.legend.backgroundColor || "#FFFFFF",
      shadow: true,
    },
    credits: {
      enabled: false,
    },
    series: [
      {
        name: "Year 2000",
        data: data.map((obj) => parseInt(obj.soLuong)),
      },
    ],
  });
};
