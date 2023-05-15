const getSalesByYear = (year) => {
  return $.ajax({
    url: "util/statistic.php?year=" + year + "&action=getSalesByYear",
    type: "GET",
  });
};
const getNumberOfKindProductsSold = (dateStart, dateEnd) => {
  return $.ajax({
    url:
      "util/statistic.php?dateStart=" +
      dateStart +
      "&dateEnd=" +
      dateEnd +
      "&action=getNumberOfKindProductsSold",
    type: "GET",
  });
};
const getNumberOfProductsSold = (dateStart, dateEnd) => {
  return $.ajax({
    url:
      "util/statistic.php?dateStart=" +
      dateStart +
      "&dateEnd=" +
      dateEnd +
      "&action=getNumberOfProductsSold",
    type: "GET",
  });
};

const getTopKindProducts = (dateStart, dateEnd) => {
  return $.ajax({
    url:
      "util/statistic.php?dateStart=" +
      dateStart +
      "&dateEnd=" +
      dateEnd +
      "&action=getTopKindProducts",
    type: "GET",
  });
};

const getTopProducts = (dateStart, dateEnd) => {
  return $.ajax({
    url:
      "util/statistic.php?dateStart=" +
      dateStart +
      "&dateEnd=" +
      dateEnd +
      "&action=getTopProducts",
    type: "GET",
  });
};

const statistic1 = async () => {
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
      series: {
        color: "#f2623e",
      },
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

const statistic2 = async () => {
  let dateStart = document.querySelector("#statistic-type2 .dateStart").value;
  let dateEnd = document.querySelector("#statistic-type2 .dateEnd").value;
  if (dateStart == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Please, enter date start!"
    );
    return;
  }
  if (dateEnd == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Please, enter date end!"
    );
    return;
  }

  let typeInput = document.querySelector("#statistic-type2 .typeStatictis");
  let data;
  if (typeInput.value == "1") {
    data = JSON.parse(await getNumberOfKindProductsSold(dateStart, dateEnd));
  } else if (typeInput.value == "2") {
    data = JSON.parse(await getNumberOfProductsSold(dateStart, dateEnd));
  }
  if (new Date(dateStart) > new Date(dateEnd)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Date start must be smaller or equal date end!"
    );
    return;
  }
  let dataFormat = data.map((obj) => [obj.ten, parseInt(obj.soLuong)]);

  let title;
  let date =
    dateStart.split("-").reverse().join("/") +
    " to " +
    dateEnd.split("-").reverse().join("/");
  if (typeInput.value == "1") {
    title = "Number of products sold by product type from " + date;
  } else {
    title = "Number of products sold from " + date;
  }
  Highcharts.chart("container2", {
    chart: {
      type: "column",
    },
    title: {
      text: title,
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
        text: "Number of products sold",
      },
    },
    legend: {
      enabled: false,
    },
    tooltip: {
      pointFormat: "<b>{point.y} vinyl records</b>",
    },
    series: [
      {
        name: "Population",
        colors: ["#f2623e"],
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

const statistic3 = async () => {
  let dateStart = document.querySelector("#statistic-type3 .dateStart").value;
  let dateEnd = document.querySelector("#statistic-type3 .dateEnd").value;
  if (dateStart == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Please, enter date start!"
    );
    return;
  }
  if (dateEnd == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Please, enter date end!"
    );
    return;
  }
  if (new Date(dateStart) > new Date(dateEnd)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Date start must be smaller or equal date end!"
    );
    return;
  }
  let typeInput = document.querySelector("#statistic-type3 .typeStatictis");
  let data;
  if (typeInput.value == "1") {
    data = JSON.parse(await getTopKindProducts(dateStart, dateEnd));
  } else if (typeInput.value == "2") {
    data = JSON.parse(await getTopProducts(dateStart, dateEnd));
  }
  let title;
  let date =
    dateStart.split("-").reverse().join("/") +
    " to " +
    dateEnd.split("-").reverse().join("/");
  if (typeInput.value == "1") {
    title = "Top best-selling category from " + date;
  } else {
    title = "Top best-selling product from " + date;
  }
  Highcharts.chart("container3", {
    chart: {
      type: "bar",
    },
    title: {
      text: title,
      align: "left",
    },
    xAxis: {
      categories: data.map((obj) => obj.ten),
      title: {
        text: null,
      },
      gridLineWidth: 1,
      lineWidth: 0,
    },
    yAxis: {
      min: 0,
      title: {
        text: "Number of products sold",
        align: "high",
      },
      labels: {
        overflow: "justify",
      },
      gridLineWidth: 0,
    },
    tooltip: {
      valueSuffix: "vinyl records",
    },
    plotOptions: {
      series: {
        color: "#f2623e",
      },
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
      verticalAlign: "bottom",
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
        name: "",
        data: data.map((obj) => parseInt(obj.soLuong)),
      },
    ],
  });
};
