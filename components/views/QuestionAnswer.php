<QA>
    <header class="header_item">
        <h4>Вопрос-ответ</h4>
    </header>

    <?
        foreach ($data as $row)
        {
    ?>
	<div class="qa_content">
            <h2><?=$row->question ?></h2>
            <p><?=$row->answer ?></p>
	</div>
    <?
        }
    ?>
</QA>
