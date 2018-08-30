<!-- BEGIN: MAIN -->
<script type='text/javascript'>{JS}</script>
<div class='competitionformstyle'>
    <!-- BEGIN: QUESTION -->
        <p class='questvote'>{QUESTION}</p>
    <!-- END: QUESTION -->

    <!-- BEGIN: FORM -->
    <form name='competition' id='votecom{VOTEID}' action='{ACTIONURL}' method='POST' {ONSUBMIT}>
    <input type='hidden' name='id' class='vote_id' value='{VOTEID}' />

    <ul>
        <!-- BEGIN: VOTEVALUE -->
        <li><input type='radio' name='votecom' class='radio_item' value='{ANSWERID}'><label>{ANSWERPIC}{ANSWERTEXT}</label></li>
        <!-- END: VOTEVALUE -->
    </ul>
    <input class='button' type='submit' value='Голосовать'>
    </form>
    <!-- END: FORM -->


    <!-- BEGIN: RESULTS -->
    <ul>
        <!-- BEGIN: VOTEVALUE -->
        <li><p>{ANSWERPIC}<br>{ANSWERTEXT}</p>
            <p>{ANSWERCOUNT} - {ANSWERPROC}% </p>
            <div style='width:{ANSWERPROCW}px; background:{ANSWERBG}; height:{ANSWERPROCH}px;' class='vote_line'></div>
        </li>
        <!-- END: VOTEVALUE -->
    </ul>
    <p>Проголосовало: {TOTALVOTE}</p>
    <!-- END: RESULTS -->
</div>
<br/>
<!-- BEGIN: MAIN -->