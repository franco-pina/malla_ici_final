
var actualizar = new Object();
 
function myButton_onclick(x,id) {
	if(color=='rgb(255, 114, 144)')
    {
        x.style.backgroundColor='rgb(90,237,247)';
        color='rgb(90,237,247)';
     	 actualizar[id]=0;
        

      
    }else{
        x.style.backgroundColor='rgb(255, 114, 144)';
        color='rgb(255, 114, 144)';
         actualizar[id]=1;
         
        
    }
    
    return false;
}









