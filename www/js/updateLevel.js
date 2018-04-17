$(document).ready(function(){

	setTimeout(function(){
		$('p.ng-binding').html("Loading...");
		$.get("php/updateLevel.php?gym="+$('h1.ng-binding').html().replace(/ /g,"_")+"&"+"return=true", function(data) {
			$('p.ng-binding').html(data);
		});


		$('button').click(function(){
			$('p.ng-binding').html("Loading...");
			$.get("php/updateLevel.php?gym="+$('h1.ng-binding').html().replace(/ /g,"_")+"&"+"level="+$(this).html().trim(), function(data) {
				$('p.ng-binding').html(data);
			});
		});

	}, 1000);
}); 