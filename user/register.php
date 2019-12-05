<link rel="stylesheet" href="../css/register.css" type="text/css">
<form name="form1" method="post" action="register_interface.php">
<div id="register_container">
<?php
include('../inc/header.php');
?>
<div id="table_div">
  <table width="100%" border="0" cellspacing="2" cellpadding="8">
  <th align="center" colspan="3"><h2>Ragister</h2></th>
  <tr>
    <td colspan="3">Name :</td>
  </tr>
  <tr>
    <td><input type="text" name="firstname" id="username2"></td>
    <td colspan="2"><input type="text" name="lastname" id="username3"></td>
  </tr>
  <tr>
    <td colspan="3">Your Email :</td>
  </tr>
  <tr>
    <td colspan="3"><input type="text" class="text" name="email"></input>
      <label>
     </td>
	</tr>
  <tr>
    <td colspan="3">Create Password :</td>
  </tr>
  <tr>
    <td colspan="3">
      <label>
        <input type="text" name="pass" id="username">
        </label>
     </td>
  </tr>
  <tr>
    <td colspan="3">Confirm Your Password</td>
  </tr>
  <tr>
    <td colspan="3">
      <label>
        <input type="text" name="cpass" id="username">
        </label>
      </td>
  </tr>
  <tr>
    <td colspan="3">Birthday :</td>
  </tr>
  <tr>
    <td id="months">Months <br><select name="month"><option>Jan</option><option>Feb</option> <option>Mar</option> <option>Apr</option><option>May</option><option>Jun</option><option>Jul</option>
<option>Aug</option><option>Sep</option><option>Oct</option><option>Nov</option><option>Dec</option></select></td>
    <td id="date">Date <br><select name="date"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></td>
    <td id="year">Year <br><select name="year"><option>1980</option><option>1981</option><option>1982</option><option>1983</option>v<option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option><option>2019</option><option>2020</option></td>
</td>
  </tr>
 <tr>
    <td colspan ="3">Gender</td>
  </tr>
  <tr>
    <td colspan ="3">I am <select name="gender"><option>Male</option><option>Female</option><option>Other</option></select></td>
  </tr>
  <tr>
    <td colspan="3">Mobile Phone</td>
  </tr>
  <tr>.
    <td colspan="3" class="flag">+91 <img src="flag.jpg"> <input  type="text" class="text" name="mobile"></input></td>
  </tr>
  <tr>
    <td colspan="3">Your Current Email</td>
  </tr>
  <tr>
    <td colspan="3"><input type="text" name="username" id="username">
        </label></td>
  </tr>
  <tr>
    <td colspan="3">Prove You Are Not A Robot</td>
  </tr>
  <tr>
    <td colspan="3"><input type="checkbox" name="checckbox"> Skip The Verification(Phone Verification May Be Required)</td>
  </tr>
  <tr>
    <td colspan="3">Type A Text</td>
  </tr>
  <tr>
    <td colspan="3"> <input type="text" class="text"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aSv5587966</td>
  </tr>
  <tr>
    <td colspan="3">Location</td>
  </tr>
  <tr>
    <td colspan="4"><select name="location"><option>INDIA</option><option>AMERICA</option><option>ENGLAND</option><option>PAKISTAN</option><option>INDONESIYA</option><option>SOUTH AFRICA</option><option>NEWZELAND</option><option>SRILANKA</option></select></td>
  </tr>
  <tr>
    <td colspan="3"><input type="checkbox" name="checckbox">I Agree To The Google.</td>
  </tr>
  <tr>
    <td colspan="3"><form action="loginpage.html" class="submit"><button type="submit"><a href="loginpage.html">SUBMIT</a></button></form></td></tr>
</table>
</div>
</div>
</form>