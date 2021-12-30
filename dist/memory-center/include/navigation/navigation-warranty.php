<div class="mb-3">

    <?
    if ($_SERVER['REQUEST_URI'] == '/warranty-add/') {
        ?>
        <button class="h4 btn btn-lg btn-light" disabled>Создать новую гарантию</button>
    <? }  else {?>
        <a class="h4 btn btn-lg btn-danger mr-3" href="https://docs.google.com/forms/d/e/1FAIpQLSd8wNGqip6n6IijtICTzTLBvMC6m1aZ4Yq6I1R54HPzY_Gsqw/viewform" target="_blank">Создать новую гарантию</a>
    <?}?>

    <?
    if ($_SERVER['REQUEST_URI'] == '/warranty-finish/') {
        ?>
        <button class="h4 btn btn-lg btn-outline-light" disabled>Принять гарантию</button>
    <? }  else {?>
        <a class="h4 btn btn-lg btn-outline-danger mr-3" href="https://docs.google.com/forms/d/e/1FAIpQLSdgSUG8ar1H5-SpTxsV7urg5zAYBIeHWKfT-Gq9UfvxX_3z8w/viewform" target="_blank">Принять гарантию</a>
    <?}?>

    <?
    if ($_SERVER['REQUEST_URI'] == '/warranty-dashboard/') {
        ?>
        <span class="h4 mr-3">Актуальные показатели</span>
    <? }  else {?>
        <a class="h4 mr-3" href="/warranty-dashboard/" style="color:#007bff !important">Актуальные показатели</a>
    <?}?>    

    <?
    if ($_SERVER['REQUEST_URI'] == '/warranty-list/') {
        ?>
        <span class="h4 mr-3">Таблица гарантий</span>
    <? }  else {?>
        <a class="h4 mr-3" href="https://docs.google.com/spreadsheets/d/1IOb-a7E3XZ5Z--skn_MRXsLAFni0Kkmx9tW79Esz0Zg/edit#gid=0" target="_blank" style="color:#007bff !important">Таблица гарантий</a>
    <?}?>

    

    <?
    if ($_SERVER['REQUEST_URI'] == '/balans-ot-gsi/') {
        ?>
        <span class="h4 mr-3">Оперативные траты ГСИ</span>
    <?} else {?>
        <a class="h4 mr-3" href="/balans-ot-gsi/" style="color:#007bff !important">Оперативные траты ГСИ</a>
    <?}?>

</div>