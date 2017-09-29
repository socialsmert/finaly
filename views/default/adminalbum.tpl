



<div class="admin-fullpage">

    <form method="POST" action="/admin/addalbum">

        <input required  class="inpt" type="text" placeholder="title" name="title"/>
        <input type="submit" name="submit" value="+">

    </form>



    {foreach $albums as $item name=albums}
    {$item['id']}={$item['title']}<br>




    {/foreach}


    <input id="albumphoto" type="file" />
    <input id="albumid" type="text" value="1">
    <buton onclick="addalbumphoto()">+</buton>
    <br>Головне фото<br>
    <input id="albummainphoto" type="file" />
    <input id="albummainid" type="text" value="1">
    <buton onclick="addalbummainhoto()">+</buton>
</div>