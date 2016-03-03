 <table class="table table-hover table-leaders">
        <tr>
            <td>Никнейм</td>
            <td>Время</td>
        </tr>
        <tr>
            <?php foreach($leaders as $arr) { ?>
                <td><?=$arr['username']?></td>
                <td><?=$arr['best_result']?></td>
        </tr>
            <?php } ?>
 </table>