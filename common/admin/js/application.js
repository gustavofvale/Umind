var oldStuff = function() {
	// Estiliza o input file
//	$('input[type="file"]').each(function() {
//		$(this).jinputcss({});
//	});
	
	// Mostra os box de mensagem
	if($('#msg-box').length > 0) {
		$('#msg-box').css("left", (($(window).width() - $('#msg-box').outerWidth()) / 2) + $(window).scrollLeft() + "px");
		$('#msg-box').fadeIn(500);
		setTimeout(function() {
			$('#msg-box').fadeOut(500, function() {
				$(this).remove();
			});
		}, 3000);
	}
	
	// Cancela o click da categoria do menu
	$('.site-top-nav a[href="#"]').on('click', function(e) {
		e.preventDefault();
	});
	
	//
	$('a.btn-filter').on('click', function(e) {
		e.preventDefault();
		$('div.box-action').hide();
		$('div.box-filter').slideToggle();
	});
	$('a.btn-action').on('click', function(e) {
		e.preventDefault();
		$('div.box-filter').hide();
		$('div.box-action').slideToggle()
	});
	
	// 
	$('div.box-filter input[type="submit"], div.box-filter input[type="button"]').button();
	$('div.form-buttons').addClass('zend-form-element');
	
	// Filtro da listagem
	$('table.list tr.filter input').on('keyup', function(event) {
		if(event.keyCode == 13) {
			// Inicializa os parametros
			var param = "";
			
			// Verifica se o campo é um autocomplete
			if($(this).data('ac')) {
				// Armazena o nome do input do codigo
				var input = $(this).attr('rel');
				
				// Busca os valores
				var valor = $('#'+input).val();
				var nome = $('#'+input).attr('name');
				
				// Adiciona o parametro do label
				param += nome + "_label/" + $(this).val() + "/";
			}
			else {
				// Busca os valores
				var valor = $(this).val();
				var nome = $(this).attr('name');
			}
			
			param += nome + "/" + valor;
			
			// Envia o usuario para a busca
			window.location = $(this).closest('tr.filter').data('search') + "/" + param;
		}
	});
	
	// Filtro da listagem
	$('table.list tr.filter input[type="checkbox"]').on('click', function(event) {
		// Inicializa os parametros
		var param = "";
		
		// Busca os valores
		var valor = $(this).is(':checked');
		var nome = $(this).attr('name');
		
		if(valor) {
			valor = 1;
		}
		else {
			valor = 0;
		}
		
		param += nome + "/" + valor;
		
		// Envia o usuario para a busca
		window.location = $(this).closest('tr.filter').data('search') + "/" + param;
	});
	
//	// Ao passar o mouse em cima do menu
//	 $(".site-top-nav ul li ul").hide();
//	$('.site-top-nav ul li').on('mouseover', function() {
//		$(this).find('ul:first').slideDown("fast");
//	}).on('mouseout', function() {
//		$(this).find('ul:first').slideUp("fast");
//	});
	
//	// Abre o menu ja aberto previamente
//	if(document.openedController != undefined) {
//		if(document.openedController.length > 0) {
//			$('ul li a:contains(' + document.openedController + ')').parent().find('ul').show();
//		}
//	}
	
//	$(window).resize(function() {
//		// Ajusta o menu à tela
//		$('div.site-left-menu').height($(this).height() - 40);
//		$('div.table-list, div.zend_form').height($(window).height() - 96);
//		
//		$('ul.left-menu-nav').height($(this).height() - 120);
//	});
//	$(window).resize();
	
	//
	$('a.btn-new').bind('click', function() {
		window.location = $(this).attr('href');
	});
	
//	// Centraliza o welcome
//	if($('div.welcome').length > 0) {
//		$('div.welcome').parent().height($(window).height() - 80);
//		$('div.welcome').css({
//			'width':$(window).width() - 260 + 'px',
//			'height':$(window).height() - 80 + 'px'
//		});
//	}
	
	//
	$('a.btn-remove').bind('click', function() {
		var line = $(this).parent().parent().find('table.list input[type="radio"]:checked').parent().parent();
		var id = $(this).parent().parent().find('table.list input[type="radio"]:checked').val();
		
		if(id != undefined) {
			//
			if(!confirm('Deseja remover o registro?')) {
				return false;
			}
			
			//
			$.ajax({
				url: $(this).attr('href') + id,
				success: function(data) {
					if(data.result) {
						line.css({'background-color':'#ff9595'});
						line.fadeOut(function() {
							$(this).remove();
						});
					}
					else {
						$.msgBox({message:'Não foi possivel remover o registro', type:'error'});
					}
				}
			});
		}
		else {
			alert('Selecione um registro');
		}
		
		return false;
	});
	
	//
	$('a.btn-edit').bind('click', function() {
		var id = $(this).parent().parent().find('table.list input[type="radio"]:checked').val();
		
		// 
		if(id != undefined) {
			window.location = $(this).attr('href') + id;
		}
		else {
			alert('Selecione um registro');
		}
		
		return false;
	});
	
	// Evento do botão cancelar
	$('div.form-buttons button').bind('click', function() {
		
		var string = $(this).data('url'),
			position = string.indexOf('/' + $(this).data('primary') +  '/');
		
		if(position > 0) {
			var url = string.substring(0, position);
		}
		else {
			var url = string;
		}
			
		window.location = url;
	});
	
//	//
//	$('a.btn-next').text('');
//	$('a.btn-previous').text('');
	
	//
//	$('.top-nav-logout').bind('click', function() {
//		window.location = document.basePath + '/admin/usuarios/logout';
//	});
	
	// Menu
//	$('ul.left-menu-nav li a').bind('click', function() {
//		var child_menu = $(this).parent().find('ul');
//		
//		//
//		if(child_menu.is(':visible')) {
//			//
//			child_menu.stop().slideUp(300);
//		}
//		else {
//			//
//			$(this).parent().parent().find('ul').stop().slideUp(300);
//			child_menu.stop().slideDown(300);
//		}
//	})
	
	//
//	$('table.list').disableSelection();
	
	//
	$('table.list tr').bind('click', function() {
		$(this).find('input[type="radio"]').attr('checked', true);
	});
	
	// Adiciona o preview nos campos file
	$('input[data-prev_file]').each(function() {
		var anchor = $('<a href="' + document.basePath + '/' + $(this).data('prev_file') + '"></a>')
			.on('click', function() {
				var div = $('<div><img src="' + $(this).attr('href') + '"></div>').css('text-align', 'center');
				$('body').append(div);
				
				div.dialog({
					modal: true,
					title: 'Preview',
					width: 'auto',
					buttons: {
						"Fechar": function() {
							$(this).dialog("close");
						}
					}
				});
				
				return false;
			});
		var button = $('<div class="preview"></div>')
			.css({
				'float': 'left',
				'width': '16px',
				'height': '16px',
				'margin-top':'5px',
				'margin-right':'5px'
			})
			.appendTo(anchor);
		$(this).parent().find('div.customfile').before(anchor);
	});
	
	// Adiciona o datepiker
	$('input.datepicker').datepicker();
	
	// Estiliza os botões
	$('.form-tab').tabs();
	$('div.form-buttons a, div.form-buttons button, div.form-buttons input[type="submit"], #buttons-bar a').button();
	
	// Verifica o click da tabela detalhe
	$('.tab-table-list table tr td').on('click', function() {
		// Retorna a url
		var url = $(this).closest('tr').data('url');
		
		// Verifica se tem data-url
		if(url.length > 0) {
			window.location = url;
		}
	});
};

var autoComplete = function() {
	document.autocomplete = {}
	document.autocomplete.geturl = {};
	document.autocomplete.select = {};
	document.autocomplete.clear = {};
	
	// Auto complete
	$('*[data-ac]').each(function() {
		var input_complete = $(this);
		
		var multiple_model = input_complete.data('ac_middle');
		var multiple = null;
		if(multiple_model != undefined) {
			multiple = true;
		} else {
			multiple = false;
		}		
		
		var term = '%25';
		var ac = input_complete.data('ac');
		
		// Verifica se tem a data no parametro
		if(input_complete.data('ac_url')) {
			// Monta a url
			var url = input_complete.data('ac_url') + '/term/' + term + '/ac/' + ac;
			
			// Verifica se o hook existe
			if(typeof(document.autocomplete.geturl[name]) == 'function') {
				url = document.autocomplete.geturl[name].call(this, url);
			}
		}
		else {
			// Monta a url
			var url = document.basePath + '/admin/index/autocomplete/term/' + term + '/ac/' + ac;
			
			// Verifica se o hook existe
			if(typeof(document.autocomplete.geturl[name]) == 'function') {
				url = document.autocomplete.geturl[name].call(this, url);
			}
			
			// Verifica se existe a propriedade ac_name
			if(input_complete.data('ac_name')) {
				url += "/ac_name/" + input_complete.data('ac_name');
			}
			
			// Verifica se existe a propriedade ac_table
			if(input_complete.data('ac_table')) {
				url += "/ac_table/" + input_complete.data('ac_table');
			}
		}
		
		// Verifica se a url foi criada
		if(!url == false) {
			// Faz a requisição
			$.ajax({
				url: url,
				dataType: "json",
				success: function(data) {
					var array_data = [];
					var $select = $('<select>');
					$select.attr('class', 'form-control');
					$select.attr('name', $('.form-group').attr('data-name'));
					
					// Mapeia todos os elementos do retorno
					array_data = data;

					var indice = $('#'+$('.form-group').attr('data-name')).val();
					
					$.each(array_data, function(index, item) {
						var $option = $('<option>');
						$option.attr('value', item.identifier);

						if(indice == item.identifier){
							
							$option.attr('class', 'item-selecionado');	
							
						}
						
						$option.html(item.label);
						$select.append($option);
					});
					
					input_complete.replaceWith($select);

					$('.item-selecionado').parent().val(indice);
					
				}
			});
		}
	}) // Autocomplete
};

var fileUpload = function() {
	
	// File upload
	$('*[data-provides=fileupload]').each(function() {
        var $this = $(this);
        var img_file = $('input[type=file]', $this).attr('data-prev_file');
        if (img_file != null) {
            $this.removeClass('fileupload-new');
            $this.addClass('fileupload-exists');
        } else {
            $this.removeClass('fileupload-exists');
            $this.addClass('fileupload-new');
        }
        var $thumbnail = $('<div>');
        $thumbnail.addClass('fileupload-new thumbnail');
        $thumbnail.css({
        	'width': '200px',
            'height': '150px'
        });
        var $img = $('<img>');
        $img.attr({
        	'src': 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Sem+imagem',
        	'alt': 'Sem imagem'
        });
        $thumbnail.append($img);
        var $preview = $('<div>');
        $preview.addClass('fileupload-preview fileupload-exists thumbnail');
        $preview.css({
        	'max-width': '200px',
        	'max-height': '150px',
        	'line-height': '20px'
        });
        if (img_file != null) {
        	$img = $('<img>');
        	$img.attr('src', "http://" + document.domain + document.basePath + '/' + img_file);
        	$img.css('max-height', '150px');
        	$preview.append($img);
        }
        $this.prepend($preview);
        $this.prepend($thumbnail);
        
        var $btn = $('input[type=file]', $this).parent();
        var $new = $('<span>');
        $new.addClass('fileupload-new');
        var $clip = $('<i>');
        $clip.addClass('icon-paper-clip');
        $new.text(' Selecione uma imagem');
        $new.prepend($clip);
        var $exists = $('<span>');
        $exists.addClass('fileupload-exists');
        var $undo = $('<i>');
        $undo.addClass('icon-undo');
        $exists.text(' Reenviar');
        $exists.prepend($undo)
        $btn.prepend($new);
        $btn.prepend($exists);
        var $div = $btn.parent();
        var $remove = $('<a>');
        $remove.addClass('btn red fileupload-exists');
        $remove.attr({
        	'href': '#',
        	'data-dismiss': 'fileupload'
        });
        var $trash = $('<i>');
        $trash.addClass('icon-trash');
        $remove.text(' Remover');
        $remove.prepend($trash);
        $div.append($remove);
	}); // File upload
};

var datePicker = function() {
	$('*[data-provides=datepicker]').each(function() {
        var $this = $(this);
		var $btngrp = $('<span>');
		$btngrp.addClass('input-group-btn');
		var $btn = $('<button>');
		$btn.addClass('btn default');
		$btn.attr('type', 'button');
		$btngrp.append($btn);
		var $icon = $('<i>');
		$icon.addClass('icon-calendar');
		$btn.append($icon);
		$this.append($btngrp);
		$this.datepicker({
            rtl: App.isRTL(),
            autoclose: true
        });
	});
};

$(function() {
	oldStuff();
	autoComplete();
	fileUpload();
	datePicker();
});






$.fn.center = function () {
	this.css("position","absolute");
	this.css("top", (($(window).height() - this.outerHeight()) / 2) + $(window).scrollTop() + "px");
	this.css("left", (($(window).width() - this.outerWidth()) / 2) + $(window).scrollLeft() + "px");
	return this;
}

$.msgBox = function(config) {
	$('#msg-box').fadeOut(500, function() {
		$(this).remove();
	});
	
	var div = $('<div id="msg-box"></div>')
		.addClass("msg-" + config.type)
		.html(config.message);
	$('body').append(div);
	
	var position = (($(window).width() - div.outerWidth()) / 2) + $(window).scrollLeft() + "px";
	
	div.css("left", position)
		.fadeIn(500);
		
	setTimeout(function() {
			div.fadeOut(500, function() {
				$(this).remove();
			});
		}, 
		3000
	);
}

$.extend({
	getUrlVar: function(name) {
		var hashes = window.location.href.split('/');
		for(var i = 0; i < hashes.length; i++) {
			if(hashes[i] == name) {
				return hashes[i+1];
			}
		}
	}
});

// 
$(function(){
	
	$('input[name="email_observacao"]').on('click', function() {
		
		// Guarda a URL
		var url = window.location;
		
		// Transforma em array
		var arr_url = url.toString().split('/');
		
		// Busca o ID do pedidos_status
		var idpedidostatus = $(this).attr('data-idpedidostatus');
		
		// Cria a variavel
		var idpedido = null;
		
		// Busca o id do pedido
		$(arr_url).each(function(i, valor) {
			if(arr_url[i] == "idpedido") {
				idpedido = arr_url[i + 1];				
			}			
		});
	
		// Monta a URL enviando dados
		window.location = "http://" + document.domain + document.basePath + "/admin/pedidos/notificarcliente/idpedido/" + idpedido + "/idpedidostatus/" + idpedidostatus;		
	});
	
});



/*************************************************/

