function deleting(val) {
  fetch(`./php/delete.php?id=${val}`)
    .then((Response) => console.log(Response.json()))
    .then((error) => console.log(error));
  window.location.reload(true);
}
//invocing date rangeChecker
function oneMonthDate(){
	from=$("#date_valid_from").val();
	till=$("#date_valid_till").val();
	if(from && till){
		fromsp=from.split(".");  //dd.mm.yy
		from=new Date(fromsp[1]+"."+fromsp[0]+"."+fromsp[2]);// mm.dd.yyyy is acceptable by Date  object
		tillsp=till.split(".");  //dd.mm.yy
		till=new Date(tillsp[1]+"."+tillsp[0]+"."+tillsp[2]);
		if(from!="Invalid Date" && till!="Invalid Date"){
			var aDay=86400000 //24*60*60*1000 / one day
			var diff = (Math.abs(till - from));
			var diff= Math.round(diff/aDay);
			if(diff<=30){
				return true;
			}else{
				return false;
			}
		}else{
			console.log("invalid date range");
			return false;
		}

	}else{
		alert("Invalid Date Range")
		return false;
	}
}