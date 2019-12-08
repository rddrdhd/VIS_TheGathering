<?php
?>
<div class="new_tournament">
    <form action="/tournaments/added" method="get">
        <div class="new_tournament">
            <input type="text" name="tTitle"><br>
            <input type="datetime-local" name="tDate"><br>
            <input type="text" name="tLocation"><br>
            <input type="number" name="tPrice"><br>

            <select name="tType">
                <option value="restricted">Restricted</option>
                <option value="limited">Limited</option>
            </select>
            <input type="submit">
        </div>
    </form>
</div>
