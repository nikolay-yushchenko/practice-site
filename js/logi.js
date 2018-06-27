        function valid(form){
    if(form.name.value && form.password.value)call('#formx','../php/log.php');
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
        var result=$.parseJSON(result);
    if(result==="True")window.location="admin.html";
    else alert("Проверьте правильность данных!");
}