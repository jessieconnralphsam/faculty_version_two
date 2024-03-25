// content-redirection
function redirectToFacultyDirectory() {
    window.location.href = 'index.php';
}
function redirectToPage(collegeName) {
    switch (collegeName) {
        case 'College of Agriculture':
            window.location.href = 'agriculture.php';
            break;
        case 'College of Engineering':
            window.location.href = 'engineering.php';
            break;
        case 'College of Social Sciences and Humanities':
            window.location.href = 'ssh.php';
            break;
        case 'College of Fisheries':
            window.location.href = 'fisheries.php';
            break;
        case 'College of Medicine':
            window.location.href = 'medicine.php';
            break;
        case 'College of Business Administration and Accountacy':
            window.location.href = 'business_ad.php';
            break;
        case 'College of Natural Science and Mathematics':
            window.location.href = 'nsm.php';
            break;
        case 'School of Graduate Studies':
            window.location.href = 'grad_school.php';
            break;
        case 'College of Education':
            window.location.href = 'educ.php';
            break;
        default:
            break;
    }
}
//form
document.addEventListener('DOMContentLoaded', function () {
    const uploadContainer = document.getElementById('uploadContainer');

    uploadContainer.addEventListener('click', () => {
        document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', handleFiles, false);

    function handleFiles(event) {
        const filesSelected = event.target.files;
        if (filesSelected.length > 0) {
            document.getElementById('fileUploadMessage').textContent = 'Loading...';
            
            setTimeout(() => {
                const fileName = filesSelected[0].name;
                document.getElementById('fileUploadMessage').innerHTML = `<strong>  File: </strong><span style="color: red;">${fileName}</span>`;
            }, 1000); 
        } else {
            document.getElementById('fileUploadMessage').textContent = 'Drop your file here';
        }
    }
});
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
                    data: [permanentCount, casualCount, lecturerCount]
                }
            ],
            chart: {
                height: 300,
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
                  fontSize: '12px',
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
                categories: ['Permanent', 'Casual', 'Lecturer'],
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
        data: [profRanks, asoproRanks, astproRanks, instRanks],
        color: '#16DBCC',
      }],
        chart: {
        type: 'bar',
        height: 255,
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
        categories: ['Professor',
                     'Associate Professor',
                     'Assistant Professor', 
                     'Instructor'
        ],
      }
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
    
});



  
  