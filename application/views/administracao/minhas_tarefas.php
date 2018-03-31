<?php echo heading('Minhas tarefas', 2, array(
	'class' => 'text-center my-2'
	)); ?>

<?php foreach ($minhas_tarefas as $tarefa): ?>
	<div class="col-md-9 col-xs-10 mx-auto my-3">
		<div class="card">
			<div class="card-header">
				<div class="card-title">
					<h4 class="text-center">
						<?=$tarefa->titulo?>
					</h4>
					<span>done</span>
				</div>
			</div>
			<div class="card-body">
				<?=$tarefa->descricao?>
			</div>
			<?php if ($this->session->userdata('usuario')): ?>
				<div class="card-footer">
					<div class="row">
						<div class="col-6">
							<a  href="<?=base_url('index.php/administracao/deleta_tarefa/') . $tarefa->id ?>" class="btn btn-danger btn-block">deletar</a>
						</div>
						<div class="col-6">
							<a href="<?=base_url('index.php/administracao/atualizar_tarefa/') . $tarefa->id?>" class="btn btn-primary btn-block">editar</a>
						</div>
					</div>
				</div>
			<?php endif ?>
		</div>
	</div>
<?php endforeach ?>