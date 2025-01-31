<div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="alpha-app">
            <div class="page-header">
                <nav class="navbar navbar-expand ">
                    
                    <a class="navbar-brand" href="#">
                    	<img src="{$basePath}/common/default/assets/images/logo.png" alt="Umind" class="">
                    </a>
                    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item dropdown d-none d-lg-block">
                                <a class="btn-jornada" href="{$basePath}/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Criar Jornadas
                                </a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link right-sidebar-link" href="#">
                                	<img src="{$basePath}/common/default/assets/images/avatars/avatar2.png" alt="" class="circle mailbox-profile-image shadow-sm">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- Page Header -->
            
            
            <div class="page-content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                        	<div class="mailbox-options">
                                <ul class="list-unstyled">
                                    <li class="ativo"><a href="#"><i class="fa fa-envelope-open-text"></i>Inbox</a></li>
                                    <li><a href="#"><i class="fa fa-trash"></i>Lixeira</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12 inbox" style="display:none;">
                        	<form class="form-inline my-2 my-lg-0 search">
	                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	                            <label for="search" class=""><i class="material-icons search-icon">search</i></label>
	                            <a href="#" id="close-search-input"><i class="material-icons">close</i></a>
	                        </form>
                        </div>
                        
                        <div class="col-lg-3 col-md-5 col-sm-12">
                            <div class="mailbox-list">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="">
                                            
                                            <h4 class="mail-title" style="font-weight:700;">08 de 19 jornadas submetidas</h4>
                                            
                                            
                                        </a>
                                    </li>
                                    
                                    {foreach from=$jornadas item=item}
                                    <li>
                                        <a href="{$basePath}/index/index/{$item->idjornada}" class="mail-active">
                                            <div class="mail-checkbox">
                                                <input type="checkbox" class="filled-in" id="mail-checkbox3">
                                                <label for="mail-checkbox3"></label>
                                            </div>
                                            
                                            <h4 class="mail-title">{$item->titulo}</h4>
                                            
                                            <div class="mail-date">{$item->data_cadastro} <i class="fas fa-star"></i></div>
                                        </a>
                                    </li>
                                    {/foreach}
									
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7 col-sm-12 spacimag">
                            <form method="POST" action="{$basePath}/index?type=save"
	                            <div class="row space">
									<div class="col-12">
										<h2 class="page-title F30 Tazul">Jornada Concluída</h2>
									</div>
									<div class="col-12">
										<div class="card">
											<div class="card-body">
												<div class="bloco Tazul">
													<h3 class="page-title F30 Tazul">Módulos</h3>
													<select name="idmodulo" class="Tazul Smodelo form-control">
														<option value="">I - Introdução aos Conceitos de Psicodinâmica</option>
														<option value="">II - A Importâncias das Regras e a Competição</option>
														<option value="">III - Recursos Humanos</option>
														<option value="">IV - Criando Segurança Psicológica</option>
														<option value="">V - Gênero</option>
													</select>
												</div>
											
												<div class="bloco Tazul">
													<h3 class="page-title F30 Tazul">Jornadas</h3>
													<p>Use este formulário para criar jornadas</p>
													
														<div class="form-group">
															<span>Nome da jornada</span>
															<input name="titulo" type="text" placeholder="Regra pela Exceção">
														</div>
														<div class="form-group">
															<span class="">Tema da jornada</span>
															<textarea name="tema" class="form-control" id="temaJornada" rows="9"></textarea>
														</div>
														<h3 class="page-title F30 Tazul">Milestones</h3>
														<div class="form-group">
															<span>Nome do Milestone</span>
															<input name="milestone" type="text" placeholder="Regra pela Exceção">
														</div>
														<div class="form-group">
															<span class="">Prompt</span>
															<textarea name="prompt" class="form-control" rows="9"></textarea>
														</div>
														<div class="form-group">
															<span>Pergunta</span>
															<input name="pergunta" type="text" placeholder="Regra pela Exceção">
														</div>
														<div class="row">
															<div class="col-3">
																<div class="form-group">
																	<span>Mídia</span>
																	<select name="tipo" class="form-control">
																		<option value="">Selecione</option>
																		<option value="">Vídeo</option>
																		<option value="">Aúdio</option>
																		<option value="">Imagem</option>
																	</select>
																</div>
															</div>
															<div class="col-9">
																<div class="form-group">
																	<span>Link:</span>
																	<input name="link" type="text" placeholder="Regra pela Exceção">
																</div>														
															</div>
														</div>
														<div class="row justify-content-center" style="gap:50px;">
															<button type="button" class="btn Bamarelo rounded-pill waves-effect waves-light">Salvar</button>
															<button type="button" class="btn Bamarelo rounded-pill waves-effect waves-light">Submeter</button>
														</div>
													
												</div>
											</div>
											
										</div>
									</div>
								</div>
                            </form>
                            
                            
                        </div>
                    </div>
                </div>
                
            </div><!-- Page Content -->
            
            
            
            
        </div>