<html lang="en">
<head>

<!-- Latest compiled and minified Bootstrap Core CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Exercise 13-4 | HTML5 Storage</title>
</head>

<body>
<header>
</header>


<?php
echo	"<h1	id='questionNumber'>Question	#1</h1>";
echo	"<h2>".getSurveyQuestion(0)."</h2>";
function	getSurveyQuestion($i){
		$questions	=	array("What	is	your	favorite	color?",	"In	what	city	were	you
																						born?",	"Your	favorite	drink	is:");
		$form=	"
		<form	action=''	method='get'	role='form'>
		<div	class	='form-group'>
				<label	for='answer'	id='question'>".$questions[$i]."</label>
				<input	type='text'	name='answer'	id='answer'	class='form-control'/>
			</div>";
			$form.="<input	type='button'	value='Next'	class='form-control'
onclick='nextQ();'/>";
		$form.="</form>";
		return	$form;
}


?>
<script	language="javascript"	type="text/javascript">
if	(typeof	(localStorage)	===	"undefined"	||	typeof	(sessionStorage)	===
"undefined")	{
alert("Web	Storage	is	not	supported	on	this	browser...");
}
else	{
		//gets	serialized	to	a	comma	separated	list	of	strings.
			sessionStorage.setItem("Questions",
new	Array("What	is	your	favorite color?",	"In	what	city	were	you	born?",
"Your	favorite	drink	is:"));
sessionStorage.setItem("Answers",	"");
sessionStorage.setItem("currentQuestion",0);
//	document.write("web	storage	modified");
function	nextQ(){
		var	currentIndex	=	sessionStorage.getItem("currentQuestion");
		var	answerNode	=	document.getElementById("answer");
		var	answer	=	answerNode.value;
		var	oldAnswers	=	sessionStorage.getItem("Answers");
		if(oldAnswers!="")
				sessionStorage.setItem("Answers",oldAnswers+","+answer);
		else
				sessionStorage.setItem("Answers",answer);
		//Now	increment	to	Next	Question
		currentIndex	=	parseInt(currentIndex)	+	1;
		sessionStorage.setItem("currentQuestion",currentIndex);
		var	allQs	=	sessionStorage.getItem("Questions").split(",");
		if(allQs.length<=currentIndex){
					//echo	for now	– survey	completed.
							var	allAs	=	sessionStorage.getItem("Answers").split(",");
						for	(var	i=0;i<allQs.length;i++){
							document.write(allQs[i]+":"+allAs[i]+"</br>");
						}
		}
		else{
			 //Update	the	questions	from	SessionStorage
		 var	questionNode=document.getElementById("questionNumber");
		 questionNode.innerHTML=("Question	#"+(parseInt(currentIndex)+1));
				var	questionNode=document.getElementById("question");
				questionNode.innerHTML=(allQs[currentIndex]);
		}
}
}
</script>
      </div>
 </div>
</body>
</html>
