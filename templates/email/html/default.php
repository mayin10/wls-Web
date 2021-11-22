<?php

//$data= json_decode($value);

?>


<div>
    <table border="1">
        <tr>
            <th><?=__('发件人姓名')?></th>
            <th><?=__( $content['name'])?></th>
        </tr>
        <tr>
            <th><?=__('发件人Email')?></th>
            <th><?=__( $content['email'])?></th>
        </tr>
        <tr>
            <th><?=__('主题')?></th>
            <th><?=__( $content['subject'])?></th>
        </tr>
    </table>
    <div>
        <h4><strong><?=__('内容')?></strong></h4>
        <p>
            <?=__( $content['message'])?>
        </p>

    </div>
</div>
