<div class="portlet box blue">
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-reorder"></i>Meus dados
		</div>
		<div class="tools">
			<a href="javascript:;" class="collapse"></a> 
			<a href="javascript:;" class="remove"></a>
		</div>
	</div>
	<div class="portlet-body form">
		<!-- BEGIN FORM-->
		{foreach from=$usuario item=item}
		<form action="{$basePath}/admin/index/profile" class="horizontal-form" method="post" enctype="multipart/form-data">
			<div class="form-body">
				<div class="row">
					<div class="col-md-12">
						<h3 class="form-section">Informações Pessoais</h3>						
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Sua Foto do Profile</label>
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div>
									<span class="btn default btn-file">
										<input type="hidden" name="MAX_FILE_SIZE" value="20971520" id="MAX_FILE_SIZE">
										<input type="file" name="imagem_path" id="logo_topo" field-type="file" class="varchar file default" 
											data-prev_file="thumb/usuarios/2/200/150/{$item->imagem_path}"/>
									</span>
								</div>
							</div>
						</div>
					</div>
					<!--/span-->
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Seu Nome</label> 
							<input type="text" name="nome" class="form-control" placeholder="Nome completo" value="{$item->nome}" /> 
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Seu E-mail</label> 
							<input type="email" name="email" class="form-control" placeholder="Seu E-mail" value="{$item->email}" /> 
						</div>
					</div>
					<!--/span-->
				</div>
				<!--/row-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Nova Senha</label> 
							<input type="password" name="senha" class="form-control" placeholder="*******" />
						</div>
					</div>
					<!--/span-->
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Confirmar Senha</label> 
							<input type="password" name="conf_senha" class="form-control" placeholder="Nova senha"/>
						</div>
					</div>
					<!--/span-->
				</div>
				<!--/row-->
			</div>
			<div class="form-actions right">
				<button type="submit" class="btn blue">
					<i class="icon-ok"></i> Salvar
				</button>
			</div>
		</form>
		{/foreach}
		<!-- END FORM-->
	</div>
</div>
