
let chart = null;

const loadStatistics = function() {
    $.post('/BlogsBerry/', {
        'Request' : 'Searches',
        'Action' : 'Statistics',
        'Platform' : $('#platform').val(),
        'BlogID' : $('#blog').val(),
        'ArticleID' : $('#article').val(),
        'Period' : $('#period').val(),
        'Count' : $('#count').val(),
    }).done(function(response) {
        if(response.includes('[') && response.includes(']')) {
            chart.data.labels = [];
            chart.data.datasets[0].data = [];
            chart.data.datasets[1].data = [];
            chart.data.datasets[2].data = [];

            JSON.parse(response).forEach(function(statistics) {
                chart.data.labels.push(statistics['Date']);
                chart.data.datasets[0].data.push(parseFloat(statistics['Searches']));
                chart.data.datasets[1].data.push(parseFloat(statistics['Position']));
                chart.data.datasets[2].data.push(parseFloat(statistics['Clicks']));
            });

            chart.update();
        } else alert(Translate.statistics($('#language').val(), 'statisticsError'));
    }).fail(function() {
        alert(Translate.statistics($('#language').val(), 'statisticsError'));
    });
};

$(document).ready(function() {
    chart = Chart.Line($('#statistics')[0], {
        data : {
            datasets : [{
                borderColor : '#007BFF',
                backgroundColor : '#007BFF',
                fill : false,
                yAxisID : 'searches',
            }, {
                borderColor : '#28A745',
                backgroundColor : '#28A745',
                fill : false,
                yAxisID : 'position',
            }, {
                borderColor : '#DC3545',
                backgroundColor : '#DC3545',
                fill : false,
                yAxisID : 'clicks',
            }],
        }, options : {
    		responsive : true,
    		scales : {
    			yAxes : [{
    				position : 'right',
    				id : 'searches',
                    ticks : {
                        beginAtZero : true,
                        fontColor : '#007BFF',
                    }, gridLines : {
                        drawOnChartArea : false,
                    },
    			}, {
    				position : 'right',
    				id : 'position',
                    ticks : {
                        beginAtZero : true,
                        fontColor : '#28A745',
                        reverse : true,
                    }, gridLines : {
    					drawOnChartArea : false,
    				},
    			}, {
    				position : 'right',
    				id : 'clicks',
                    ticks : {
                        beginAtZero : true,
                        fontColor : '#DC3545',
                    }, gridLines : {
    					drawOnChartArea : false,
    				},
    			}],
    		}, legend : {
                display : false,
            },
    	},
	});

    $('#platform, #blog, #article, #count, #period').change(function() {
        loadStatistics();
    });

    $('#platform, #blog').change(function() {
        if($('#platform').val() == 'Only Articles' && $('#blog').val() > 0) $.post('/BlogsBerry/', {
            'Request' : 'Articles',
            'Action' : 'Articles',
            'BlogID' : $('#blog').val(),
        }).done(function(response) {
            if(response.includes('[') && response.includes(']')) {
                $('#article option').slice(2).remove();

                JSON.parse(response).forEach(function(article) {
                    $('#article').append('<option value=\'' + parseInt(article['ID']) + '\'> ' + article['Title'] + ' </option>');
                });

                $('#article').removeClass('d-none');
            } else alert(Translate.statistics($('#language').val(), 'articlesError'));
        }).fail(function() {
            alert(Translate.statistics($('#language').val(), 'articlesError'));
        });
        else $('#article').addClass('d-none');
    });

    $('#searches').click(function() {
        if(!$('#positions').hasClass('off') || !$('#clicks').hasClass('off')) {
            if(!$(this).hasClass('off')) $(this).addClass('btn-outline-primary off').removeClass('btn-primary');
            else $(this).addClass('btn-primary').removeClass('btn-outline-primary off');

            chart.data.datasets[0].hidden = $(this).hasClass('off');
            chart.options.scales.yAxes[0].display = !$(this).hasClass('off');
            chart.update();
        }
    });

    $('#positions').click(function() {
        if(!$('#searches').hasClass('off') || !$('#clicks').hasClass('off')) {
            if(!$(this).hasClass('off')) $(this).addClass('btn-outline-success off').removeClass('btn-success');
            else $(this).addClass('btn-success').removeClass('btn-outline-success off');

            chart.data.datasets[1].hidden = $(this).hasClass('off');
            chart.options.scales.yAxes[1].display = !$(this).hasClass('off');
            chart.update();
        }
    });

    $('#clicks').click(function() {
        if(!$('#searches').hasClass('off') || !$('#positions').hasClass('off')) {
            if(!$(this).hasClass('off')) $(this).addClass('btn-outline-danger off').removeClass('btn-danger');
            else $(this).addClass('btn-danger').removeClass('btn-outline-danger off');

            chart.data.datasets[2].hidden = $(this).hasClass('off');
            chart.options.scales.yAxes[2].display = !$(this).hasClass('off');
            chart.update();
        }
    });

    $('#boostButton').click(function() {
        $.post('/BlogsBerry/', {
            'Request' : 'Users',
            'Action' : 'Partnership',
        }).done(function(response) {
            alert(Translate.statistics($('#language').val(), response.includes('true') ? 'boostSuccess' : 'boostError'));
        }).fail(function() {
            alert(Translate.statistics($('#language').val(), 'boostError'));
        });
    });

    loadStatistics();
});
