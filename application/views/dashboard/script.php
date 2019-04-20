<script type="text/javascript">

     $(document).ready(function() {
        

        var table = $('#table').DataTable( {
            "ordering" : false,
            "searching" : false,
            "paginate" : false,
            "bInfo" : false,
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });

        statistik_jabatan();


        function statistik_jabatan(){
            var chart = Highcharts.chart('chart', {

                chart: {
                    type: 'column',
                  
                    },

                title: {
                    text: ''
                },


                legend: {
                    align: 'right',
                    verticalAlign: 'top',
                    layout: 'vertical'
                },

                xAxis: {
                    // categories: ['Apples', 'Oranges', 'Bananas'],
                    labels: {
                        x: -10
                    }
                },

                yAxis: {
                    allowDecimals: false,
                    title: {
                        text: 'Amount'
                    }
                },

                series: [{
                    name: 'Waka seksi',
                    data: [2,]
                }, {
                    name: 'Waka dinas',
                    data: [6,]
                }, {
                    name: 'Staff',
                    data: [8,]
                }, {
                    name: 'Sekertaris',
                    data: [3,]
                },{
                    name: 'Pengawas',
                    data: [4,]
                }, {
                    name: 'Kepala seksi',
                    data: [5,]
                },],

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                align: 'center',
                                verticalAlign: 'bottom',
                                layout: 'horizontal'
                            },
                            yAxis: {
                                labels: {
                                    align: 'left',
                                    x: 0,
                                    y: -5
                                },
                                title: {
                                    text: null
                                }
                            },
                            subtitle: {
                                text: null
                            },
                            credits: {
                                enabled: false
                            }
                        }
                    }]
                }

            });

        }


     });


</script>

    
