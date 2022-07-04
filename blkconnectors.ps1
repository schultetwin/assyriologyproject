
Get-Childitem  "C:Users\arch\Desktop\copyofcdlis"  | ForEach-Object {
	 $Content = Get-Content $_.fullname 
	 $Content = ForEach-Object { $Content -replace "008000", "000000"} 
	Set-Content $_.fullname $Content -Force  
}


