<?php
   	putenv("PATH=C:\Program Files (x86)\CodeBlocks\MinGW\bin");
	$CC="gcc";
	$out="a.exe";
	$filename_code="main.c";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$executable="a.exe";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;


	$code=$_SESSION["code"];
	$input=$_SESSION["input"];
	$_SESSION['output']="";

		
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	exec("cacls  $executable /g everyone:f"); 
	exec("cacls  $filename_error /g everyone:f");	
	shell_exec($command_error);
	$error=file_get_contents($filename_error);


	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		$_SESSION['output']="$output";
		$_SESSION['check']=1;
        
	}
	else if(!strpos($error,"error"))
	{
		if ($_SESSION['err']==0) 
		{
			echo "<pre>$error</pre>";	
		}
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}

		$_SESSION['output']="$output";
		$_SESSION['check']=1;
	}
	else
	{
		if ($_SESSION['err']==0) 
		{
			echo "<pre>$error</pre>";	
		}
		$_SESSION['check']=0;
	}





	exec("del $filename_code");
	exec("del *.o");
	exec("del *.txt");
	exec("del $executable");
?>