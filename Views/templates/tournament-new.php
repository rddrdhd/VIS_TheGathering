<?php
?>
<div class="new_tournament">
    <form action="/tournaments/added" method="post">
        <div class="new_tournament">
            Title: <input type="text" name="tTitle"><br>
            Date: <input type="datetime-local" name="tDate"><br>
            Place: <input type="text" name="tLocation"><br>
            Price: <input type="number" name="tPrice"><br>
            Prize: <input type="text" name="tPrize"><br>
            Type: <select name="tType">
                <option value="restricted">Restricted</option>
                <option value="limited">Limited</option>
            </select><br>
            Note: <input type="text" style="height:50px;" name="tNote"><br>
            <input type="submit" value="Add tournament">
        </div>
    </form>
</div>
