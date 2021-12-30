<div class="mb-3">

    <?
    if ($_SERVER['REQUEST_URI'] == '/swap-create/') {
        ?>
        <button class="h4 btn btn-lg btn-light mr-3" disabled>Создать новый обмен</button>
    <? }  else {?>
        <a class="h4 btn btn-lg btn-danger mr-3" href="/swap-create/">Создать новый обмен</a>
    <?}?>

    <?
    if ($_SERVER['REQUEST_URI'] == '/swaps-dashboard/') {
        ?>
        <span class="h4 mr-3">Актуальные показатели</span>
    <? }  else {?>
        <a class="h4 mr-3" href="/swaps-dashboard/">Актуальные показатели</a>
    <?}?>    


</div>