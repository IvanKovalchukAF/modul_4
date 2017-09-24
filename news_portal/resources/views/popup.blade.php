
<div id="bg_popup">
    <div id="popup">
        <h5>Подпишитесь на нашу рассылку, чтобы всегда быть в курсе событий</h5>
        <form method="post" action="mail/sendletter.php">
            <input type="text" name="sender" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'* Ваше Имя и Фамилия':this.value;" value="* Ваше Имя и Фамилия" class="your-name"/>
            <input type="text" name="email" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'* Ваш Email':this.value;" value="* Ваш Email" class="email-address"/>
            <input type="submit" name="send" value="Отправить" class="send-message">
        </form>
        <a class="close" href="#" title="Закрыть" onclick="document.getElementById('bg_popup').style.display='none'; return false;">X</a>
    </div>
</div>
