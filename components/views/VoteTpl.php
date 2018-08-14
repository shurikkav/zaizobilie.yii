<!-- BEGIN: MAIN -->
<script type='text/javascript'>{JS}</script>
<div class='voteformstyle'>
    <!-- BEGIN: QUESTION -->
        <p class='questvote'>{QUESTION}</p>
    <!-- END: QUESTION -->

    <!-- BEGIN: FORM -->
    <form name='vote' action='{ACTIONURL}' method='POST' onsubmit='pushVote($(this)); return false; '>
    <input type='hidden' name='id' class='vote_id' value='{VOTEID}' />
    <ul>
        <!-- BEGIN: VOTEVALUE -->
        <li><input type='radio' name='vote' class='radio_item' value='{ANSWERID}'><label>{ANSWERTEXT}</label></li>
        <!-- END: VOTEVALUE -->
    </ul>
    <input class='button' type='submit' value='Голосовать'>
    </form>
    <!-- END: FORM -->


    <!-- BEGIN: RESULTS -->
    <ul>
        <!-- BEGIN: RETULTITEM -->
        <li>{ANSWERTEXT}: {ANSWERCOUNT} - {ANSWERPROC}% <br/>
            <div style='width:{$pp}px; background:{$this->backgrounds[$i]}; height:2px;' class='vote_line'></div>
        </li>
        <!-- END: RETULTITEM -->
    </ul>
    <p>Проголосовало: {TOTALVOTE}</p>
    <!-- END: RESULTS -->
</div>
<br/>
<!-- BEGIN: MAIN -->
