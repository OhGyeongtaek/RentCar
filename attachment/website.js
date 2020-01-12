$(function(){
	/*move page*/
if($('button')){
	$('button').click(function(){
		location.href="/view/reserve/reserve";
	});
}
	/*create img*/
	if($('.content3')){
		$('.content3').append('<img src="/img/graph.png" title="graph" alt="graph" width="520" height="398">')
	}
});