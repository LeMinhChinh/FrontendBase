<h1><?= $title; ?></h1>
<p><?= $time; ?></p>

<?php if($main): ?>
<table class="table table-hover table-striped mt-2">
    <thead>
        
        <tr>
        <?php foreach($header as $key => $head): ?>
            <th><?= $head; ?></th>
            <?php endforeach; ?>
        </tr>
        
    </thead>
    <tbody>
        <?php foreach($main as $key => $item): ?>
            <tr>
                <td><?= $item['v01']; ?></td>
                <td><?= $item['v11']; ?></td>
                <td><?= $item['v21']; ?></td>
                <td><?= $item['v31']; ?></td>
                <td><?= $item['v41']; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php endif; ?>