<?php $pager->setSurroundCount(1) ?>

<nav aria-label="Page navigation">
    <ul class="list-inline list-unstyled">
    <?php if ($pager->hasPrevious()) : ?>
        <li class="prev">
            <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                <span aria-hidden="true">Pertama</span>
            </a>
        </li>
        <li class="prev">
            <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
            </a>
        </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <li <?= $link['active'] ? 'class="active"' : '' ?>>
            <a href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li class="next">
            <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
            </a>
        </li>
        <li class="next">
            <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                <span aria-hidden="true">Terakhir</span>
            </a>
        </li>
    <?php endif ?>
    </ul>
</nav>