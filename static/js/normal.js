function gerarGrafNormal(divId, lowerBound=-1, upperBound=1, x1=-0.5, gtype=0, x2) {
		
					// divId = id do div a ser inserido o gráfico
					//lowerBound = mu - sigma
					//upperBound = mu + sigma
					// x1 = primeiro ponto
					// gtype = tipo do grafico.
					// gtype = 0: gráfico genérico
					// gtype = 1: gráfico à esquerda
					// gtype = 2: gráfico à direita
					// gtype = 3: gráfico entre pontos
					// x2 = segundo ponto

					const normalY = (x, mean, stdDev) => Math.exp((-0.5) * Math.pow((x - mean) / stdDev, 2));

					const getMean = (lowerBound, upperBound) => (upperBound + lowerBound) / 2;

					// distance between mean and each bound of a 95% confidence interval 
					// is 2 stdDeviation, so distance between the bounds is 4
					const getStdDeviation = (lowerBound, upperBound) => (upperBound - lowerBound) / 4;



					const generatePoints = (lowerBound, upperBound) => {
					  let stdDev = getStdDeviation(lowerBound, upperBound); 
					  let min = lowerBound - 2 * stdDev;
					  let max = upperBound + 2 * stdDev;
					  let unit = (max - min) / 100;
					  return _.range(min, max, unit);
					}

					let mean = getMean(lowerBound, upperBound);
					let stdDev = getStdDeviation(lowerBound, upperBound);
					let points = generatePoints(lowerBound, upperBound);


					let seriesData = points.map(x => ({ x, y: normalY(x, mean, stdDev)}));

					// à esquerda
					if (gtype == 1){
												Highcharts.chart(divId, {
											    chart: {
											        type: 'area'
											    },
											    series: [{
											        data: seriesData,
											        name:"Área",
											    }],
											    plotOptions: {
											    	area: {
											      	enableMouseTracking: false,
											        color: 'rgb(226, 119, 122)',
											        fillColor: 'rgba(226, 119, 122, 0.5)',
											        zoneAxis: 'x',
											        zones: [{
											        //fillColor gets the inside of the graph, color would change the lines
											        fillColor: 'white',
											        // everything below this value has this style applied to it
											        value: -Math.abs(lowerBound*3),
											      },{
											        value: x1,
											      },{
											        fillColor: 'white',
											      }]
														}
											    },
											    title: {
											        text: `Área da distribuição Normal à esquerda de ${x1}`,
											    },
											    credits: {
											        enabled: false,
											    },
											    legend: {
											    	enabled: false,
											    },
											    yAxis: {
										            visible: false
										        },


											});
					}

					// à direita
					else if (gtype == 2){

								Highcharts.chart(divId, {
											    chart: {
											        type: 'area'
											    },
											    series: [{
											        data: seriesData,
											        name:"Área",
											    }],
											    plotOptions: {
											    	area: {
											      	enableMouseTracking: false,
											        color: 'rgb(226, 119, 122)',
											        fillColor: 'rgba(226, 119, 122, 0.5)',
											        zoneAxis: 'x',
											        zones: [{
											        //fillColor gets the inside of the graph, color would change the lines
											        fillColor: 'white',
											        // everything below this value has this style applied to it
											        value: x1,
											      },{
											        value: 3*upperBound,
											      },{
											        fillColor: 'white',
											      }]
														}
											    },
											    title: {
											        text: `Área da distribuição Normal à direita de ${x1}`,
											    },
											    credits: {
											        enabled: false,
											    },
											    legend: {
											    	enabled: false,
											    },
											    yAxis: {
										            visible: false
										        },

											});
						
					}

					// entre
					else if(gtype == 3){
						if(!x2){console.warn("Erro: insira x2 no gerarGrafNormal")}
							else{

											if (x1 > x2){

												Highcharts.chart(divId, {
											    chart: {
											        type: 'area'
											    },
											    series: [{
											        data: seriesData,
											        name:"Área",
											    }],
											    plotOptions: {
											    	area: {
											      	enableMouseTracking: false,
											        color: 'rgb(226, 119, 122)',
											        fillColor: 'rgba(226, 119, 122, 0.5)',
											        zoneAxis: 'x',
											        zones: [{
											        //fillColor gets the inside of the graph, color would change the lines
											        fillColor: 'white',
											        // everything below this value has this style applied to it
											        value: x2,
											      },{
											        value: x1,
											      },{
											        fillColor: 'white',
											      }]
														}
											    },
											    title: {
											        text: `Área da distribuição Normal entre ${x2} e ${x1}`,
											    },
											    credits: {
											        enabled: false,
											    },
											    legend: {
											    	enabled: false,
											    },
											    yAxis: {
										            visible: false
										        },

											});
											

											} else{
												Highcharts.chart(divId, {
											    chart: {
											        type: 'area'
											    },
											    series: [{
											        data: seriesData,
											        name:"Área",
											    }],
											    plotOptions: {
											    	area: {
											      	enableMouseTracking: false,
											        color: 'rgb(226, 119, 122)',
											        fillColor: 'rgba(226, 119, 122, 0.5)',
											        zoneAxis: 'x',
											        zones: [{
											        //fillColor gets the inside of the graph, color would change the lines
											        fillColor: 'white',
											        // everything below this value has this style applied to it
											        value: x1,
											      },{
											        value: x2,
											      },{
											        fillColor: 'white',
											      }]
														}
											    },
											    title: {
											        text: `Área da distribuição Normal entre  ${x1} e ${x2}`,
											    },
											    credits: {
											        enabled: false,
											    },
											    legend: {
											    	enabled: false,
											    },
											    yAxis: {
										            visible: false
										        },

											});
											}


						
												}
					}  else{
											Highcharts.chart(divId, {
										    chart: {
										        type: 'area'
										    },
										    series: [{
										        data: seriesData,
										        name:"Área",
										    }],
										    plotOptions: {
										    	area: {
										      	enableMouseTracking: false,
										        }
										    },
										    title: {
										        text: `Distribuição Normal`,
										    },
										    credits: {
											        enabled: false,
											    },
											    legend: {
											    	enabled: false,
											    },
											    yAxis: {
										            visible: false
										        },


										});
					}


}