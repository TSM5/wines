var message=document.getElementById("submit");
message.onClick=function()
{
    var output=document.getElementById("output");
	output.innerHTML="shopname is"+document.getElementById("shop").value+
	                 "<br>date of submit"+document.getElementById("date1").value+
					 "<br>brand nameis"+document.getElementById("brand").value+
					 "<br>opening stock is"+document.getElementById("opstock").value+
					 "<br>size of brand is"+document.getElementById("size").value+
					 "<br>invoice is"+document.getElementById("invoice").value+
					 "<br> transfer from this shop"+document.getElementById("transfer").value+
					 "<br>closing stock is"+document.getElementById("costock").value+
					 "<br>expenditure is"+document.getElementById("expend").value;
					 };