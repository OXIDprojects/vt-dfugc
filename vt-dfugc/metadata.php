<?php

/**
 * vt Discounts For UserGroup Combination
 * Copyright (C) 2012  Marat Bedoev
 * 
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */
$aModule = array(
	 'id' => 'vt-dfugc',
	 'title' => '<strong style="color:#c700bb;border: 1px solid #c700bb;padding: 0 2px;background:white;">VT</strong> <strong>D</strong>iscount <strong>F</strong>or <strong>U</strong>ser<strong>G</strong>roup <strong>C</strong>ombination',
	 'description' => 'this module allows you to apply a discount to a combination of multiple usergroups<hr/>
			<h2>Installation:</h2>
			<ul><li>run this sql query: <input type="text" wize="60" value="ALTER TABLE oxdiscount ADD  &quot;vtdfugc&quot; TINYINT( 1 ) NOT NULL" /></li>
			<li>update DB views</li>
			<li>edit   <strong>out/admin/discount_main.tpl</strong> and somewhre inside the form (e.g. Line 149 before another"&lt;tr&gt;":<br/>
			<textarea cols="80" rows="7">
<tr>
<td colspan="2" class="edittext">
<input type="hidden" name="editval[oxdiscount__vtdfugc]" value="0">
<input id="vtdfugc" class="edittext" type="checkbox" name="editval[oxdiscount__vtdfugc]" value="1" [{if $edit->oxdiscount__vtdfugc->value == 1}]checked[{/if}]> <label for="vtdfugc">assign the discount to the usergroup combination</label>
</td>
</tr>
			</textarea></li></ul>',
	 'thumbnail' => 'oxid-vt.jpg',
	 'version' => '4.6',
    'author' => 'Marat Bedoev',
    'email' => 'oxid@marat-bedoev.net',
    'url' => 'https://github.com/vanilla-thunder/',
	 'extend' => array(
		  'oxdiscountlist' => 'vt-dfugc/oxdiscountlist_dfugc'
	 )
);