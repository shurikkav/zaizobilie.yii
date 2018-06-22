<div class="rate_body">
    <!--Валюта-->
    <table cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <th>&nbsp;
            </th><th>Валюта
            </th><th>Дата
            </th><th>знач.</th>
            <th>изм.</th>
        </tr>
        <tr>
            <td><span class="rate_title"><img src="/img/<?=$param[USD_STATUS];?>.png" alt="Up"></span></td>
            <td><span class="rate_title">USD</span></td>
            <td><span class="rate_title"><?=$param[VAL_TODAY];?></span></td>
            <td><span class="temp"><?=$param[USD_VAL];?></span></td>
            <td class="<?=$param[USD_STATUS];?>"><?=$param[USD_CHANGE];?></td>
        </tr>
        <tr>
            <td><span class="rate_title"><img src="/img/<?=$param[EUR_STATUS];?>.png" alt="Down"></span></td>
            <td><span class="rate_title">EUR</span></td>
            <td><span class="rate_title"><?=$param[VAL_TODAY];?></span></td>
            <td><span class="temp"><?=$param[EUR_VAL];?></span></td>
            <td class="<?=$param[EUR_STATUS];?>"><?=$param[EUR_CHANGE];?></td>
        </tr>
        </tbody>
    </table>
    <!--Валюта-->
</div>