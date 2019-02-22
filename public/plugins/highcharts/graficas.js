/*function cambiar_indicador(){
    var indicador=$("#idindicador").val();
    console.log("Soy el indicador Numero: " + indicador);
}*/

/*Codigo de creacion de grafica de Indicadores de Buen Gobierno*/
function cargar_grafica_BuenGobierno(){
    var options ={
        chart: {
            type: 'areaspline'
        },
        title: {
            text: 'Indicadores de Buen Gobierno'
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 150,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        xAxis: {
            categories: [],
            plotBands: [{ // visualize the weekend
                from: 4.5,
                to: 6.5,
                color: 'rgba(68, 170, 213, .2)'
            }]
        },
        yAxis: {
            title: {
                text: 'Unidades'
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: 'Unidades'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [{
            name: 'Indicador',
            data: []
        }]
    }

    $("#div_grafica_buengobierno").html( $("#cargador_empresa").html() );
    var url = "/grafica_IndicadoresBuenGobierno";
    $.get(url, function(resul){
        var datos = jQuery.parseJSON(resul);
        var anios = datos.anios;
        var Indicador = datos.Indicadores;
        var registroanio = datos.registro;
        console.log(registroanio);
        var totalregistro = datos.totalregistro;
        var totalanio = datos.totalanio;
        var i=0;

       /* for(i=1;i<=totalregistro;i++){
            options.series[0].data.push(registroanio[i]);
            console.log(registroanio[i] + " ");
            options.xAxis.categories.push(anios);
        }*/

        //options.title.text="aqui e podria cambiar el titulo dinamicamente";
        chart = new Highcharts.chart(options);
    })
    
}


