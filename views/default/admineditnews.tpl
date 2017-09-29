<div class="admin-addnews">
    {foreach $news as $item name=news}
    <form method="POST" action="/admin/updatenews/{$item['id']}">

        <input required type="text" placeholder="title" value="{$item['title']}" name="title"/>
        <input required   type="text" placeholder="date" value="{$item['date']}" name="date"/>
        <textarea name="text">{$item['text']}</textarea>


        <script>

            CKEDITOR.replace("text");

        </script>

        <input type="submit" name="submit" value="+">
        {/foreach}
    </form>
</div>
</body>
</html>
