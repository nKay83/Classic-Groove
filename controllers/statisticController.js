const getSalesByYear = (year) => {
  return $.ajax({
    url: "util/statistic.php?year=" + year + "&action=getSalesByYear",
    type: "GET",
  });
};

const thongKe = async () => {
  let data = JSON.parse(await getSalesByYear(2023));
  const allMonths = Array.from({ length: 12 }, (_, i) =>
    (i + 1).toString().padStart(2, "0")
  );
  const formattedData = allMonths.map((mon) => {
    const existingData = data.find((item) => item.mon === mon);
    const total = existingData ? parseInt(existingData.total) : 0;
    return { mon, total };
  });
  console.log(formattedData);
  Highcharts.chart("container", {
    chart: {
      type: "line",
    },
    title: {
      text: "Doanh Số bán hàng",
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
        text: "Tổng tiền",
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
        name: "Reggane",
        data: formattedData.map((item) => item.total),
      },
    ],
  });
};
