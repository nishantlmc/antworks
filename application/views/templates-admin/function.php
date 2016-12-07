<script>
function get_city()
{
	var state_code = $("#state").val();
	$.ajax({
	type:"POST",
	url: "<?=base_url();?>dashboard/city_list_statewise/",
	data:"state="+state_code,
	success: function(result){
		$("#city").html(result);
	}});
}
</script>