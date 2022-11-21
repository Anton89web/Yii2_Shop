<?php
    foreach($books as $books)
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<div class="row">
    <div class="card" style="width:18rem;">
    <div class="card-header">
        <?= $book->name;?>
    </div>
    <div class="card-body">
        Описание книги
    </div>
    </div>
</div>
