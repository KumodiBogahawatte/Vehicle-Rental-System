
//Referred from YouTube

function selectVehicle(){
	var x = document.getElementById("category").value;
	
	$.ajax({
		url:"show_vehicle.php",
		method: "POST",
		data:{
			id : x
		},
		success:function(data){
			$("#ans").html(data);
		}
		
	})
		
}