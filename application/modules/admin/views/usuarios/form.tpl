<div class="row">
	<div class="col-md-12">
    	<div class="tabbable tabbable-custom boxless">
    		<ul class="nav nav-tabs">
            	<li class="active"><a href="#tab_0" data-toggle="tab">Geral</a></li>
            </ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_0">
					<div class="portlet box blue ">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-reorder"></i>Formulário de cadastro
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a> 
								<a href="javascript:;" class="reload"></a> 
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form method="post" enctype="multipart/form-data" action="{$form->getAction()}" class="form-horizontal form-bordered form-row-stripped">
								<div class="form-body">
									{if !$usuarios[0]['imagem_path']}
									<div class="form-group" id="element-imagem_path">
										<label class="control-label col-md-3 optional">Imagem do usuário</label>
										<div class="col-md-9">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div>
													<span class="btn default btn-file"> 
														<input type="hidden" name="MAX_FILE_SIZE" value="1097152" id="MAX_FILE_SIZE"> 
														<input type="file" name="imagem_path" class="varchar file default"> 
													</span>
												</div>
											</div>
										</div>
									</div>
									{else}
									<div class="form-group" id="element-imagem_path">
										<label class="control-label col-md-3 optional">Imagem do usuário</label>
										<div class="col-md-9">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div>
													<span class="btn default btn-file"> 
														<input type="hidden" name="MAX_FILE_SIZE" value="1097152" id="MAX_FILE_SIZE"> 
														<input type="file" name="imagem_path" class="varchar file default"
															data-prev_file="common/uploads/usuarios/{$usuarios[0]['imagem_path']}"> 
													</span>
												</div>
											</div>
										</div>
									</div>	
									{/if}
									<div class="form-group" id="element-nome">
										<label for="nome" class="control-label col-md-3 required">Nome
											<span class='help-block-remove'></span> </label>
										<div class="col-md-9">
											<input type="text" name="nome" id="nome" value="{$usuarios[0]['nome']}"
												field-type="text" class="varchar string form-control">
										</div>
									</div>
									<div class="form-group" id="element-email">
										<label for="email" class="control-label col-md-3 required">Email
											<span class='help-block-remove'></span> </label>
										<div class="col-md-9">
											<input type="text" name="email" id="email" value="{$usuarios[0]['email']}"
												field-type="text" class="varchar string form-control">
										</div>
									</div>
									<div class="form-group" id="element-login">
										<label for="login" class="control-label col-md-3 required">Login
											<span class='help-block-remove'></span> </label>
										<div class="col-md-9">
											<input type="text" name="login" id="login" value="{$usuarios[0]['login']}"
												field-type="text" class="varchar string form-control">
										</div>
									</div>
									<div class="form-group" id="element-senha">
										<label for="senha" class="control-label col-md-3 required">Senha
											<span class='help-block-remove'></span> </label>
										<div class="col-md-9">
											<input type="password" name="senha" id="senha" value=""
												field-type="password" class="varchar string password form-control">
										</div>
									</div>
									<div class="form-group" id="element-idperfil">
										<label for="idperfil" class="control-label col-md-3 required">Perfil
											<span class='help-block-remove'></span> </label>
										<div class="col-md-9">
											<select name="idperfil" class="form-control">
												<option value="2">Usuário</option>
											</select>										
										</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">
													<i class="icon-ok"></i> Cadastrar
												</button>
												<button type="button" class="btn default"
													data-primary="idusuario"
													data-url="/arkivos.com.br/admin/usuarios/list">Cancelar</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
