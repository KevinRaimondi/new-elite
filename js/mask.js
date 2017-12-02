			$(document).ready(function(){
  				$('.data').mask('00/00/0000');
				$('.tempo').mask('00:00:00');
				$('.data_tempo').mask('00/00/0000 00:00:00');
				$('.cep').mask('00000-000', {clearIfNotMatch: true});
  				$('.tel').mask('00000-0000');
  				$('.ddd_tel').mask('(00) 0000-0000');
  				$('.cpf').mask('000.000.000-00', {clearIfNotMatch: true});
  				$('.cnpj').mask('00.000.000/0000-00');
  				$('.dinheiro').mask('000.000.000.000.000,00' , { reverse : true});
  				$('.dinheiro2').mask("#.##0,00" , { reverse:true});
				$('.numero').mask("#");
				$('.rg').mask('00.000.000-0', {clearIfNotMatch: true});
			});