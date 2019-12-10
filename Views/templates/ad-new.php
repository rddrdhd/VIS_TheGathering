
<div class="new_ad">
    <form action="/ads/added" method="post">
        <div class="new_tournament">
            Title: <input type="text" name="aTitle"><br>
            I want to sell: <select name="aType">
                <option value="card">Card</option>
                <option value="deck" disabled>Deck</option>
            </select><br>
            Card: <input type="number" name="aCardId"><br>
            Note: <input type="text" style="height:50px;" name="aNote"><br>
            Quantity: <input type="number" name="aQuantity"><br>
            Price: <input type="number" name="aPrice"><br>
            <input type="submit" value="Add ad">
        </div>
    </form>
</div>
<?php
