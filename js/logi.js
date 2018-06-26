function valid(form){
    if(form.name.value && form.password.value)call('#formx','../php/insertgood.php');
}
    

function call(formtype,filex){
		var msg=$(formtype).serialize();
		$.ajax({type:'POST',
		url:filex,
		data:msg,
		success:success,
		error:function(xhr,str){
		alert('Возникла ошибка: '+xhr.responseCode);}});
}
function success(result){
alert("ok");
}
