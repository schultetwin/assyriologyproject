
Get-Childitem  "C:Users\arch\Desktop\copyofcdlis"  | ForEach-Object {
	 $Content = Get-Content $_.fullname 
	 $Content = ForEach-Object { $Content -replace "ff0000", "000000"} 
	Set-Content $_.fullname $Content -Force  
}


