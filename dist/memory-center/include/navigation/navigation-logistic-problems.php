<div class="mb-3">
    <?
    if (isCurrentUrl('logistic-problems-no-order-in-map')) {
        ?>
        <span class="h4">Нет заказа в маршрутке</span>
    <? }  else {?>
        <a class="h4" href="/logistic-problems-no-order-in-map/" style="color:#007bff !important">Нет заказа в маршрутке</a>
    <?}?>

    <?
    if (isCurrentUrl('cant-give-order')) {
        ?>
        <span class="h4 ml-3">Не выдать заказ</span>
    <?} else {?>
        <a class="h4 ml-3" href="/logistic-problems-cant-give-order/" style="color:#007bff !important">Не выдать заказ</a>
    <?}?>

</div>