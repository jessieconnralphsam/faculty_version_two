
(function () {
    'use strict';

    var config = {
        colors: {
            headingColor: '#1E1E1E',
            axisColor: '#1E1E1E',
            borderColor: '#D9D9D973',
            primary: '#16DBCC',
            info: '#16DBCC'
        }
    };

    let cardColor, headingColor, axisColor, borderColor;

    cardColor = config.colors.primary;
    headingColor = config.colors.headingColor;
    axisColor = config.colors.axisColor;
    borderColor = config.colors.borderColor;
    // --------------------------------------------------------------------
    const status_chartEl = document.querySelector('#status_chart');

    if (typeof status_chartEl !== 'undefined' && status_chartEl !== null) {
        const status_chartOptions = {
            series: [
                {
                    name: 'Total Number of Faculty',
                    data: [4, 8, 10, 5, 7]
                }
            ],
            chart: {
                height: 300,
                width: 500,
                stacked: true,
                type: 'bar',
                toolbar: { show: false }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
                    borderRadius: 7,
                    startingShape: 'rounded',
                    endingShape: 'rounded'
                }
            },
            colors: [config.colors.primary, config.colors.info],
            dataLabels: {
                enabled: true,
                offsetX: 6,
                style: {
                  fontSize: '10px',
                  fontWeight: '700',
                  colors: ['#fff'],
                  fontFamily: 'roboto'
                },
            },
            legend: {
                show: true,
                horizontalAlign: 'left',
                position: 'top',
                markers: {
                    height: 8,
                    width: 8,
                    radius: 12,
                    offsetX: -3
                },
                labels: {
                    colors: axisColor
                },
                itemMargin: {
                    horizontal: 10
                }
            },
            grid: {
                borderColor: borderColor,
                padding: {
                    top: 0,
                    bottom: -8,
                    left: 20,
                    right: 20
                }
            },
            xaxis: {
                categories: ["Lecturer", "Instructor", "Assistant Professor", "Associate Professor", "Professor"],
                labels: {
                    style: {
                        fontSize: '13px',
                        colors: axisColor,
                        lineHeight: '1.5',
                        fontFamily: 'roboto'
                    }
                },
                axisTicks: {
                    show: false
                },
                axisBorder: {
                    show: false
                }
            },
            yaxis: {
                labels: {
                    style: {
                        fontSize: '13px',
                        colors: axisColor
                    }
                }
            },
            responsive: [
            ],
            states: {
                hover: {
                    filter: {
                        type: 'none'
                    }
                },
                active: {
                    filter: {
                        type: 'none'
                    }
                }
            }
        };

        const status_chart = new ApexCharts(status_chartEl, status_chartOptions);
        status_chart.render();
    }
})();

document.addEventListener('DOMContentLoaded', function () {
    var options = {
        series: [{
        name: 'Total',
        data: [lectRanks, instRanks, astproRanks, asoproRanks, profRanks],
        color: '#16DBCC',
      }],
        chart: {
        type: 'bar',
        height: 300,
        width: 500,
        toolbar: {
            show: true,
            tools:{
              download:false
            }
          }
      },
      plotOptions: {
        bar: {
          borderRadius: 4,
          horizontal: true,
        }
      },
      dataLabels: {
        enabled: true,
        offsetX: 6,
        style: {
          fontSize: '12px',
          colors: ['#fff'],
          fontFamily: 'roboto',
        }
      },

      tooltip: {
        shared: true,
        intersect: false
      },
      xaxis: {
        categories: ["Lecturer", "Instructor", "Assistant Professor", "Associate Professor", "Professor"
        ],
      }
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
    
});


document.addEventListener('DOMContentLoaded', function () {
    var options = {
        series: [{
        name: 'Total',
        data: [permanent, casual, joborder]
      }],
        chart: {
        height: 300,
        width: 500,
        type: 'bar',
        toolbar: { show: false }
      },
      plotOptions: {
        bar: {
          borderRadius: 10,
          dataLabels: {
            position: 'top', // top, center, bottom
          },
        }
      },
      dataLabels: {
        enabled: true,
        formatter: function (val) {
          return val + "";
        },
        offsetY: -20,
        style: {
          fontSize: '12px',
          colors: ["#304758"]
        }
      },
      
      xaxis: {
        categories: ["Permanent", "Casual", "Job Order"],
        position: 'bottom',
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        crosshairs: {
          fill: {
            type: 'gradient',
            gradient: {
              colorFrom: '#D8E3F0',
              colorTo: '#BED1E6',
              stops: [0, 100],
              opacityFrom: 0.4,
              opacityTo: 0.5,
            }
          }
        },
        tooltip: {
          enabled: true,
        }
      },
      yaxis: {
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false,
        },
        labels: {
          show: false,
          formatter: function (val) {
            return val + "";
          }
        }
      
      },
      title: {
        text: 'Total Number of Faculty: ',
        floating: true,
        offsetY: 330,
        align: 'center',
        style: {
          color: '#444'
        }
      }
      };
    
      var chart = new ApexCharts(document.querySelector("#chart-sample"), options);
      chart.render();    
    
});


const checkbox = document.getElementById('show-status-checkbox');
const statusContainer = document.getElementById('status-container');

checkbox.addEventListener('change', function() {
    if (this.checked) {
        statusContainer.style.display = 'block';
    } else {
        statusContainer.style.display = 'none';
    }
});

const rankCheckbox = document.getElementById('show-rank-checkbox');
const rankContainer = document.getElementById('rank-container');

rankCheckbox.addEventListener('change', function() {
    if (this.checked) {
        rankContainer.style.display = 'block';
    } else {
        rankContainer.style.display = 'none';
    }
});