

<table>
   <tr>
   <td>Kunden-ID:</td>
   <td><input type='text' name='username' id='username' /></td>
   </tr>
   <tr>
   <td>Produkt-ID:</td>
   <td><input type="text" name="email" id="email" /></td>
   </tr>             
</table>
            
<input type="button" 
       value="Auswerten"
       style=float:left;margin-left:270px;
       onclick="return regformhash(this.form,
                                   this.form.kunden_id,
                                   this.form.produkt,);" /> 