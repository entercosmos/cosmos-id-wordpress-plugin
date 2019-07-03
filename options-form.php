<h1>Pender Account Options</h1>
<form method="POST">
    <table class="form-table">
        <tbody>
        <tr>
            <th scope="row"><label for="pender_account_client_id">Client ID</label></th>
            <td>
                <input name="pender_account_client_id" type="text" id="pender_account_client_id" value="<?php echo $client_id; ?>"
                       class="regular-text">
            </td>
        </tr>
        <tr>
            <th scope="row"><label for="pender_account_client_secret">Client Secret</label></th>
            <td>
                <input name="pender_account_client_secret" type="text" id="pender_account_client_secret" value="<?php echo $client_secret; ?>"
                       class="regular-text">
            </td>
        </tr>

        </tbody>
    </table>
    <p class="submit">
        <input type="submit" name="submit" id="submit" class="button button-primary" value="Wijzigingen opslaan">
    </p>
</form>
