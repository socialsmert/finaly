<div class="admin-addnews">

    <form method="POST" action="/admin/addnews">

        <input required type="text" placeholder="title" name="title"/>
        <input required   type="text" placeholder="date" name="date"/>
        <textarea name="text"></textarea>
        
        
        <script>
        
            CKEDITOR.replace("text");
            
        </script>
        
        <input type="submit" name="submit" value="+">

    </form>
</div>
</body>
</html>

