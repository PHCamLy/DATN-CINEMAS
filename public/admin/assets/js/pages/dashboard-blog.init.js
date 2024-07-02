var options =
{
    series: [
        {
            name: "Doanh Thu",
            data: data_char
        },
        ],
    chart: { height: 350, type: "area", toolbar: { show: !1 } }, colors: ["#556ee6"], dataLabels: { enabled: !1 }, stroke: { curve: "smooth", width: 2 }, fill: { type: "gradient", gradient: { shadeIntensity: 1, inverseColors: !1, opacityFrom: .45, opacityTo: .05, stops: [20, 100, 100, 100] } }, xaxis: { categories: ["T1", "T2", "T3", "T4", "T5", "T6", "T7", "T8", "T9", "T10", "T11", "T12"] }, markers: { size: 3, strokeWidth: 3, hover: { size: 4, sizeOffset: 2 } }, legend: { position: "top", horizontalAlign: "right" }
}, chart = new ApexCharts(document.querySelector("#area-chart"), options); chart.render();