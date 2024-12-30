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
                                    {foreach from=$form->getElements() item=element}
										{if $element->getName() != "submit" && $element->getName() != "cancel"}
											{$element}
										{/if}
									{/foreach}
								</div>
								<div class="form-actions fluid">
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">
													<i class="icon-ok"></i> Cadastrar
												</button>
												<button type="button" class="btn default" data-primary="{$primary}" data-url="{$this->url(['module'=>"admin", 'controller'=>$controller, 'action'=>"list"], "default", FALSE)}">Cancelar</button>
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
