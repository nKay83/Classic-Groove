const thongKe = () => {
  Highcharts.chart("container", {
    chart: {
      type: "line",
    },
    title: {
      text: "Doanh Số bán hàng",
    },
    // subtitle: {
    //   text:
    //     "Source: " +
    //     '<a href="https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature" ' +
    //     'target="_blank">Wikipedia.com</a>',
    // },
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
        data: [
          16.0, 18.2, 23.1, 27.9, 32.2, 36.4, 39.8, 38.4, 35.5, 29.2, 22.0,
          17.8,
        ],
      },
    ],
  });
};
