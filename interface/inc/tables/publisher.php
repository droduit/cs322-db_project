
<tr><td><label for="name">Name</label></td><td><input type="text" id="name" name="name" required="required" maxlength="240"  /></td></tr>
<tr><td><label for="country_id">Country</label></td><td><?= getSelectComponent($db, 'country'); ?></td></tr>
<tr><td><label for="began">Began</label></td><td><input type="text" id="began" name="began" placeholder="<?php echo date('Y'); ?>" /></td></tr>
<tr><td><label for="ended">Ended</label></td><td><input type="text" id="ended" name="ended" placeholder="<?php echo date('Y'); ?>" /></td></tr>
<tr><td><label for="notes">Notes</label></td><td><textarea id="notes" name="notes"></textarea></td></tr>
<tr><td><label for="url">URL</label></td><td><textarea id="url" name="url"></textarea></td></tr>