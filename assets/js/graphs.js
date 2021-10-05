new Chart(document.getElementById("line-chart1"), {
    type: 'line',
      data: {
        labels: ['','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo', ''],
        datasets: [{
            data: [null,10, 20, 30, 35, 30, 38, 40, null],
            label: 'Impresiones',
            borderColor: "#09BAD4",
            fill: false,
            pointRadius: 5,
            pointBackgroundColor: '#ffffff'
          }, {
            data: [null,0, 8, 7, 5, 5, 6, 7,null],
            label: "Alcance",
            borderColor: "#FF5252",
            fill: false,
            pointRadius: 5,
            pointBackgroundColor: '#ffffff'
          }, {
            data: [null,0, 0, 0, 0, 0, 0, 0,null],
            label: "Frecuencia",
            borderColor: "#FFA726",
            fill: false,
            pointRadius: 5,
            pointBackgroundColor: '#ffffff'
          }
        ]
      },
    options: {
     title: {
       display: false,
     },
     legend: {
        display: false,
     },
   }
 });

 new Chart(document.getElementById("segmentoSex"), {
  type: 'pie',
  data: {
    labels: ["Mujeres", "Hombres", "Otros"],
    datasets: [{
      backgroundColor: ["#FF5252", "#09BAD4","#3cba9f"],
      data: [75,25,0]
    }]
  },
  options: {
    title: {
      display: false,
    },
     legend: {
      display: true,
      position: 'bottom',
      align: 'center'
     },
  }
});

new Chart(document.getElementById("segmentoAfinidad"), {
  type: 'pie',
  data: {
    labels: ["Noticieros", "Entretenimiento"],
    datasets: [{
      backgroundColor: ["#FFA726", "#67BB6A"],
      data: [80,20]
    }]
  },
  options: {
    title: {
      display: false,
    },
     legend: {
      display: true,
      position: 'bottom',
      align: 'center'
     },
  }
});

am4core.ready(function() {

  // Themes begin
  am4core.useTheme(am4themes_animated);
  // Themes end

  var chart = am4core.create("chartdiv", am4charts.SlicedChart);
  chart.hiddenState.properties.opacity = 0; // this makes initial fade in effect

  chart.data = [{
      "name": "Impresiones",
      "value": 1692
  }, {
      "name": "Alcance",
      "value": 520
  }, {
      "name": "Frecuencia",
      "value": 2
  },];

  var series = chart.series.push(new am4charts.FunnelSeries());
  series.dataFields.value = "value";
  series.dataFields.category = "name";
  series.alignLabels = true;
  series.orientation = "horizontal";
  series.bottomRatio = 1;

  series.colors.list = [
    am4core.color("#FF5252"),
    am4core.color("#09BAD4"),
    am4core.color("#FFA726"),
  ];

  chart.legend = new am4charts.Legend();
  chart.legend.position = "top";

});