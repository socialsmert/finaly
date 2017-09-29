<div class="admin-fullpage">
<br>
    
    <br>
  <br>  <br>

    {foreach $calendar as $item name=calendar}
    <input oninput="saveCalendarChanges()" id="calendar-id" type="hidden" value="{$item['id']}">
    <input oninput="saveCalendarChanges()" id="calendar-date" type="text" value="{$item['date']}">
    <input oninput="saveCalendarChanges()" id="calendar-place" type="text" value="{$item['place']}">
    <input oninput="saveCalendarChanges()" id="calendar-team1" type="text" value="{$item['team1']}">
    <input oninput="saveCalendarChanges()" id="calendar-score1" type="text" value="{$item['score1']}">
    <input oninput="saveCalendarChanges()" id="calendar-team2" type="text" value="{$item['team2']}">
    <input oninput="saveCalendarChanges()" id="calendar-score2" type="text" value="{$item['score2']}">
    <input oninput="saveCalendarChanges()" id="calendar-day" type="text" value="{$item['day']}">
    <input oninput="saveCalendarChanges()" id="calendar-month" type="text" value="{$item['month']}">
    <a href="/admin/deletecalendar/{$item['id']}">-</a>
    {/foreach}
</div>