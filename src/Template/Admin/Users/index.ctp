<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Listar Usuários</h2>
    </div>
    <a href="cadastrar.html">
        <div class="p-2">
            <button class="btn btn-outline-success btn-sm">
                Cadastrar
            </button>
        </div>
    </a>
</div>

<?= $this->Flash->render() ?>

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>SOBRENOME</th>
                <th>DATA ADMISSÃO</th>
                <th>CRIADO</th>
                <th>MODIFICADO</th>
                <th class="text-center">AÇÕES</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->date_admission) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <th class="text-center">Ações</th>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>