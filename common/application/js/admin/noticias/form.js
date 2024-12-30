$(function() {
	$("#sortable").sortable();
	$("#sortable").disableSelection();
});

var j = $('#sortable').attr('data-qtd');
if (j == "") {
	j = 0;
}
var img = "";

function handleFileSelect() {

	if (window.File && window.FileList && window.FileReader) {

		var files = event.target.files; // FileList object
		var output = document.getElementById("sortable");

		$('.checked').removeClass();

		for ( var i = 0; i < files.length; i++) {
			var file = files[i];

			if (!file.type.match('image'))
				continue;

			var picReader = new FileReader();

			picReader
					.addEventListener(
							"load",
							function(event) {
								var picFile = event.target;
								
								console.log(picFile);
								
								if($('#galeria_imagem').attr('data-acao') != ""){
									var jsoncerto = picFile.result;
									$.ajax({
										url: document.basePath + '/admin/noticias/uploadimg/idnoticia/'+$('#galeria_imagem').attr('data-acao'),
										type:'POST',
										dataType:'json',
										data : jsoncerto,
										async: false,
										success : function(r){
										img = r;
										}
										});
								}
								
								var div = document.createElement("div");
								div.className = "col-md-3 ui-state-default";
								div.innerHTML = '<div class="fileupload"><input type="hidden" name="ordem[]" class="ordem" value="'
										+ j
										+ '"><div style="max-width:200px; max-height:150px; line-height: 20px;"><img class="thumbnail" src="'
										+ picFile.result
										+ '" + "title='
										+ picFile.name
										+ '/><input type="hidden" name="existentes['+j+']" value="'+img+'"></div><div><a class="btn red" href="#"><i class="icon-trash"></i></a><input type="radio" value="'
										+ j
										+ '" id="imagem_capa" style="margin-left:10px !important;zoom:1.2;position:relative;top:5px;" name="imagem_capa">Imagem da capa<textarea rows="4" name="descricao['
										+ j + ']"></textarea></div></div>';
								output.insertBefore(div, null);
								
								j++;

								$('.col-md-3.ui-state-default .btn.red').on(
										'click',
										function(e) {
											e.preventDefault();

											$(this).parent().parent().parent()
													.remove();

										});
							});

			picReader.readAsDataURL(file);
		}
	} else {
		console.log("Your browser does not support File API");
	}
}

document.getElementById('galeria_imagem').addEventListener('change',
		handleFileSelect, false);

$('.col-md-3 .btn.red').on('click', function(e) {
	e.preventDefault();

	var elemento = $(this);

	$.ajax({
		url : elemento.attr('href'),
		type : 'POST',
		dataType : 'json',
		success : function(r) {
			if (r.resposta === 'Excluido com sucesso') {
				$(elemento).parent().parent().parent().remove();
			}
		}
	})

});

//VALIDA TEXTAREA SE ESTA VAZIO
$('button[type="submit"]').on('click', function(e) {
	e.preventDefault();
	var controle = false;
	$.each($('#sortable textarea'), function(i, item) {
		if ($(item).val() == '') {
			$(item).css('border', '1px solid red');
			controle = true;
		} else {
			$(item).css('border', '1px solid green');
		}
	});
	if (controle) {
		alert('Preencha todoas as descrições antes de prosseguir.');
	} else {
		$('button[type="submit"]').off();
		$('button[type="submit"]').trigger('click');
	}
});
 


/** *****LOGICA PARA MARCAR E DESMARCAR CATEGORIAS E SUBCATEGORIAS******** */

$('.sub-filhos input[type="checkbox"]').on('click',function(){

	var pai = $(this).parent().parent().parent().parent().parent().parent().find('.categorias-pai');
	var filho = $(this);

	$(pai).find('span').addClass('checked');
	$(pai).find('input').prop('checked', true );

});

$('.categorias-pai input').on('click',function(){
	
	$(this).parent().parent().parent().parent().find('.sub-filhos input').prop('checked',false);	
	$(this).parent().parent().parent().parent().find('.sub-filhos span').removeClass('checked');	
	
});

