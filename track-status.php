<?php include 'header2.php';?>
<?php include 'gug.php';?>
<section id="track number" style="background-color: #4264aa">
              <tbody><tr>
                <td class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> Track and Trace your Cargo/Courier <br>
                        </strong></div></td>
              </tr>
              <tr>
                <td class="bottom" valign="middle">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="aalpha" valign="top"><div align="center" style="color: white">Enter the Consignment no </div></td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top"><div align="center">
            <form action="track-result.php" method="post" name="form" id="form" >
                <div class="col">
                    <input name="Consignment" type="text" class="form-control" id="Consignment" maxlength="50" placeholder="TrackNo">
                </div>

                  <input name="Submit" type="submit" class="btn btn-primary" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now">
            </form>
			      <span class="gentxt"style="color: white" >Ex: IXM53533553 </span> </div></td>
                </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
              </tr>
            
          </tbody></table>
        </div></td>
        </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
        </tr>
      
      
      <tr>
        <td>&nbsp;</td>
        </tr>
    </tbody></table>      </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#2284d5" >&nbsp;</td>
    <td bgcolor="#2284d5">&nbsp;</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>
 <tr>
  <td>


<?php include 'footer.php';?>