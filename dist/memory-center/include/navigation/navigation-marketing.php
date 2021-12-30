<div class="mb-3">
    <?
    if ($_SERVER['REQUEST_URI'] == '/marketing-dashboard/') {
        ?>
        <span class="h4">Актуальные показатели</span>
    <? }  else {?>
        <a class="h4" href="/marketing-dashboard/" style="color:#007bff !important">Актуальные показатели</a>
    <?}?>

    <?
    if ($_SERVER['REQUEST_URI'] == '/marketing-channels/') {
        ?>
        <span class="h4 ml-3">Обращения по каналам</span>
    <?} else {?>
        <a class="h4 ml-3" href="/marketing-channels/" style="color:#007bff !important">Обращения по каналам</a>
    <?}?>

</div>