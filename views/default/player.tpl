<style>

    .player-page{
        background-image: url(/images/players/KT9_3634.jpg);
    }
    
    body{
        background: black;
    }

   


</style>


<div class="player-page">


    <div class="player-content">

        <div class="content-left">
           
    
           
            {foreach $player as $item name=player}
            <div class="content-left-header">
                Думки
            </div>
            <div class="content-left-text">
            {$item['info']}
            </div>
        </div>
        <div class="content-right">

            <div class="content-right-number">

               {$item['number']}

            </div>

            <div class="content-right-name">

                {$item['surname']}<br>{$item['name']}

            </div>

            <div class="content-item">

                <div class="content-item-value">

                    ПОЗИЦІЯ

                </div>
                
                {$item['position']}
                

            </div>

            <div class="content-item">

                <div class="content-item-value">

                    НАЦІОНАЛЬНІСТЬ

                </div>
                
                {$item['nationality']}
                

            </div>
            
            <div class="content-item">

                <div class="content-item-value">

                    ДАТА НАРОДЖЕННЯ

                </div>
                
                {$item['birth']}
                

            </div>
            
            <div class="content-item">

                <div class="content-item-value">

                    ЗРІСТ

                </div>
                
                {$item['height']} см
                

            </div>

       <div class="content-item">

                <div class="content-item-value">

                    ВАГА

                </div>
                
                {$item['weight']} кг
                

            </div>

       {/foreach}
       
        </div>

    </div>

</div>