<div class="selected-news-page">




    {foreach $news as $item name=news}


    <div class="selected-news-item">


        <div class="selected-news-photo">
            <img src="/images/news/{$item['photo']}" alt="">
        </div>

        <div class="selected-news-title">
            {$item['title']}
            
            <div class="selected-news-date">
                {$item['date']}
            </div>
            
        </div>

            



            








            <div class="selected-news-text">
                

                    {$item['text']}
              

            </div>




        {/foreach}

        
    </div>

</div>